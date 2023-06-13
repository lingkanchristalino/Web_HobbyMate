<?php
session_start();
require '../daftar/koneksi.php';

// Mendapatkan informasi username dari database
$username = $_SESSION['username'];
$query = "SELECT * FROM register WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/kategori.css">
    <link rel="stylesheet" type="text/css" href="../css/chatroom.css">

    
  </head>

  <body>
  <nav>
		<div class="menu-bar">
		<a href="#" class="tombol-menu" onclick="displayMenubar()" >
			<span class="garis"></span>
			<span class="garis"></span>
			<span class="garis"></span>
		  </a>
		  <h1>Hobby<span>Mate</span></h1>
		  <ul>
			<li><a href="../index.php">Beranda</a></li>
			<li><a>Kategori <i class="fas fa-caret-down"></i></a>
				<div class="dropdown-menu">
					<ul>
					  <li>
						<a>Olahraga <i class="fas fa-caret-right"></i></a>
						<div class="dropdown-menu-1">
						  <ul>
							<li><a href="buttom.php">Bulutangkis</a></li>
							<li><a href="buttom.php">Basket</a></li>
							<li><a href="buttom.php">Futsal</a></li>
				            <li><a href="buttom.php">Volly</a></li>
							<li><a href="buttom.php">Bersepeda</a></li>
						  </ul>
						</div>
					  </li>
			<li>
						<a>Kesenian <i class="fas fa-caret-right"></i></a>
						<div class="dropdown-menu-2">
						  <ul>
							<li><a href="buttom.php">Menyanyi</a></li>
							<li><a href="buttom.php">Dance</a></li>
							<li><a href="buttom.php">Teater</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				</div>
			</li>
			<li><a href="tentang.php">Tentang</a>
			</li>
			<li><a href="Contact.php">Kontak Kami</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><i class="fas fa-user" id="login-btn"></i></li>
			</div>
		  </ul>
		</div>
		  
		  <div id="showMenubar" class="menu-bar2">
		  <ul>
			<li><a href="../index.php">Beranda</a></li>
			<div class="dropdown">
			<li><a>Kategori <i class="fas fa-caret-down"></i></a>
				<div class="dropdown-menu">
					<ul>
					  <li>
						<a>Olahraga <i class="fas fa-caret-right"></i></a>
						<div class="dropdown-menu-1">
						  <ul>
							<li><a href="buttom.php">Bulutangkis</a></li>
							<li><a href="buttom.php">Basket</a></li>
							<li><a href="buttom.php">Futsal</a></li>
				            <li><a href="buttom.php">Volly</a></li>
							<li><a href="buttom.php">Bersepeda</a></li>
						  </ul>
						</div>
					  </li>
					  <li>
						<a>Kesenian <i class="fas fa-caret-right"></i></a>
						<div class="dropdown-menu-2">
						  <ul>
							<li><a href="buttom.php">Menyanyi</a></li>
							<li><a href="buttom.php">Dance</a></li>
							<li><a href="buttom.php">Teater</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				</div>
			</li>
		  </div>
			<li><a href="tentang.php">Tentang</a>
			</li>
			<li><a href="Contact.php">Kontak Kami</a></li>
			<li><a href="sprofil.php">Profil</a></li>
			<li><i class="fas fa-user" id="login-btn" onclick="location.href = '../pageakun/akun.php';"></i></li>

		   
		  </div>
		  </ul> 
		</div>
	<nav>
  
      <div class="hero">
        &nbsp;
      </div>
 

    <div class="container">
      <div class="header">
        <h1>Chat</h1>
        <img src="../img/logoweb.png" alt="Logo Web" width="30" height="30">
      </div>

      <div class="chat-box" id="chatBox">
      <?php
      
      if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Proses pengiriman pesan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Mendapatkan pesan dari permintaan POST
  $message = $_POST['message'];
  $username = $_SESSION['username'];


  // Mendapatkan nilai untuk messageId
  $messageId = uniqid();

  // Mendapatkan waktu saat ini di zona waktu MySQL
  $currentTimestamp = date('Y-m-d H:i:s');

  // Menghindari serangan SQL Injection dengan menggunakan parameterisasi query
  $query = "INSERT INTO chats (messageId, timestamp, message, username) VALUES ('$messageId', '$currentTimestamp', '$message', '$username')";

  
  // Menjalankan query
  if ($conn->query($query) === TRUE) {
    $response = [
        'status' => 'success',
        'message' => 'Pesan berhasil dikirim dan disimpan'
    ];
  } else {
    $response = [
        'status' => 'error',
        'message' => 'Gagal menyimpan pesan: ' . $conn->error
    ];
  }

  $conn->close();

  echo json_encode($response);
  exit();
}

// Menampilkan pesan-pesan dalam chat box
$query = "SELECT * FROM chats ORDER BY timestamp ASC";
$result = $conn->query($query);



$html = '';
if ($result->fetch_assoc()) {
while ($row = mysqli_fetch_assoc($result)) {
  $username = $row['username'];
  $message = $row['message'];
  $timestamp = date('H:i:s', strtotime($row['timestamp']));


  if (!empty($message)) {
    $html .= '
        <div class="message">
            <div class="content">
                <div class="meta">' . $username . '</div>
                <div class="text">' . $message . '</div>
                <div class="meta">' . $timestamp . '</div>
            </div>
        </div>
    ';
  }
}
}
echo $html;

// Menutup koneksi ke database
$conn->close();
?>

      </div>

    <form id="chatForm">
        <input type="text" id="chatInput" placeholder="Ketik pesan...">
        <button type="submit">Kirim</button>
    </form>

    
    <!-- Tambahkan script JavaScript -->
    <script>
        const chatBox = document.getElementById('chatBox');
        const chatInput = document.getElementById('chatInput');
        const chatForm = document.getElementById('chatForm');

        chatForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const message = chatInput.value.trim();
            if (message !== '') {
                sendMessage(message);
            }
        });

        function sendMessage(message) {
            // Kirim pesan ke server menggunakan AJAX
            const xhr = new XMLHttpRequest();
            const url = 'chatroom.php'; // Nama file PHP saat ini (chatroom.php)

            // Data yang akan dikirim ke server
            const data = new FormData();
            data.append('message', message);


            xhr.open('POST', url, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Tanggapan dari server
                    const response = JSON.parse(xhr.responseText);
                    console.log(response.status); // Tampilkan status tanggapan jika diperlukan
                    console.log(response.message); // Tampilkan pesan tanggapan jika diperlukan
                }
            };
    
            xhr.send(data);

            // Setelah mengirim pesan, tambahkan pesan ke chat box
            const username = '<?php echo $username; ?>'; // Ambil username dari session menggunakan PHP
            const timestamp = new Date().toLocaleTimeString();
            const html = `
              <div class="message">
              <div class="content">
              <div class="meta">${username}</div>
              <div class="text">${message}</div>
              <div class="meta">${timestamp}</div>
              </div>
              </div>
              `;          
            chatBox.insertAdjacentHTML('beforeend', html);

            // Atur scroll ke bawah agar pesan terbaru terlihat
            chatBox.scrollTop = chatBox.scrollHeight;

            // Bersihkan input pesan
            chatInput.value = '';
        }
    </script>
    
    <script>
		const loginBtn = document.getElementById('login-btn'); 
	loginBtn.addEventListener('click', () => {
	  window.location.href = '../pageakun/akun.php'; 
	});

	function displayMenubar() {
  var x = document.getElementById("showMenubar");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
	</script>


</body>
</html>
