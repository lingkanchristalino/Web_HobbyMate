<?php
require '../daftar/koneksi.php';

// Cek apakah form telah disubmit
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai-nilai dari form
    $nama = $_POST['nama'];
    $jenis_kegiatan = $_POST['jenis_kegiatan'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $deskripsi = $_POST['deskripsi'];

    // Query untuk menyimpan data ke tabel "upload"
    $query = "INSERT INTO upload (nama, jenis_kegiatan, waktu, tempat, jumlah_orang, deskripsi)
              VALUES ('$nama', '$jenis_kegiatan', '$waktu', '$tempat', '$jumlah_orang', '$deskripsi')";

    // Menjalankan query
    if ($conn->query($query) === TRUE) {
        // Jika data berhasil disimpan, redirect ke halaman "aktifitas.html"
        header("Location: aktifitas.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Menutup koneksi database
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/kategori.css"/>
	<link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
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
		
	<main>
		<h2>Upload Kegiatan</h2>
		<form action="#" method="post">
			<label for="nama">Nama Kegiatan:</label>
			<input type="text" id="nama" name="nama" required>

			<label for="jenis_kegiatan">Jenis Kegiatan:</label>
			<select id="jenis_kegiatan" name="jenis_kegiatan" required>
				<option value="">Pilih Jenis Kegiatan</option>
				<option value="Sepak Bola">Sepak Bola</option>
				<option value="Futsal">Futsal</option>
				<option value="Volly">Volly</option>
				<option value="Basket">Basket</option>
				<option value="Bulu tangkis">Bulu tangkis</option>
				<option value="Bersepeda">Bersepeda</option>
                <option value="Menyanyi">Menyanyi</option>
                <option value="Dance">Dance</option>
                <option value="Teater">Teater</option>
			</select>

			<label for="waktu">Waktu:</label>
			<input type="datetime-local" id="waktu" name="waktu" required>

			<label for="tempat">Tempat:</label>
			<input type="text" id="tempat" name="tempat" required>

			<label for="jumlah_orang">Jumlah Orang:</label>
			<input type="number" id="jumlah_orang" name="jumlah_orang" required>

            <label for="deskripsi">Deskripsi Kegiatan</label>
            <textarea id="deskripsi" name="deskripsi"></textarea>

			<div class="container">
				<button>Submit</button>
			</div>
		</form>

        <li><a href="aktifitas.php">Aktifitas Terbaru</a></li>

	</main>




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

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script src="./js/responsif.js"></script>
  
	<!--footer-->
	<footer class="footer-main footer-main-flex">
		<p> <span class="designed">Hobby<span>Mate</span> &copy; 2023. All rights reserved.
		</p>
	</footer>
</body>
</html>
