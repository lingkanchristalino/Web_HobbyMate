<?php
session_start();
require '../daftar/koneksi.php';

// Mendapatkan informasi username dari database
$username = $_SESSION['username'];
$query = "SELECT * FROM register WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Proses pengiriman pesan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan pesan dari permintaan POST
    $message = $_POST['message'];
    $username = $_SESSION['username'];

    // Mendapatkan nilai untuk messageId
    $messageId = mt_rand();

    $query = "INSERT INTO chats (messageId, username, message, timestamp) VALUES ('$messageId', '$username', '$message', NOW())";

    // Menjalankan query
    if (mysqli_query($conn, $query)) {
        $response = [
            'status' => 'success',
            'message' => 'Pesan berhasil dikirim dan disimpan'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Gagal menyimpan pesan: ' . mysqli_error($conn)
        ];
    }
    mysqli_close($conn);

    echo json_encode($response);
    exit();
}

// Mengambil pesan-pesan dari database
$query = "SELECT * FROM chats ORDER BY timestamp ASC";
$result = mysqli_query($conn, $query);

$html = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
        $message = $row['message'];
        $timestamp = date('H:i:s', strtotime($row['timestamp']));
        $date = date('Y-m-d', strtotime($row['timestamp']));

        if (!empty($message)) {
            $html .= '
                <div class="message">
                    <div class="content">
                        <div class="meta">' . $username . '</div>
                        <div class="text">' . $message . '</div>
                        <div class="meta">' . $date . ' ' . $timestamp . '</div>
                    </div>
                </div>
            ';
        }
    }
}
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
        <a href="#" class="tombol-menu" onclick="displayMenubar()">
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
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="Contact.php">Kontak Kami</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><i class="fas fa-user" id="login-btn"></i></li>
        </div>
    </ul>
</nav>

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
        <li><a href="tentang.php">Tentang</a></li>
        <li><a href="Contact.php">Kontak Kami</a></li>
        <li><a href="sprofil.php">Profil</a></li>
        <li><i class="fas fa-user" id="login-btn" onclick="location.href = '../pageakun/akun.php';"></i></li>
    </ul>
</div>

<div class="hero">
    &nbsp;
</div>

<div class="container">
    <div class="header">
        <h1>Chat</h1>
        <img src="../img/logoweb.png" alt="Logo Web" width="30" height="30">
    </div>

    <div class="chat-box" id="chatBox">
        <?php echo $html; ?>
    </div>

    <form id="chatForm" action="chatroom.php" method="POST">
        <input type="text" id="chatInput" name="message" placeholder="Ketik pesan..." autocomplete="off">
        <button type="submit">Kirim</button>
    </form>
</div>

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
        data.append('timestamp', Date.now()); // Tambahkan timestamp saat ini
        data.append('username', '<?php echo $username; ?>'); // Mengirim username ke server

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

        const timestamp = new Date().toLocaleTimeString();
        const currentDate = new Date().toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
        const html = `
          <div class="message">
            <div class="content">
                <div class="meta">${data.get('username')}</div>
                <div class="text">${message}</div>
                <div class="meta">${currentDate} ${timestamp}</div>
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
