<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  $username = "";
} else {
  $username = $_SESSION['username'];
}


?> 


<!DOCTYPE html>
<html>
<head>
	<title>Profil Pengembang Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/profil.css">
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

    <div>
        <h1>Profil Pengembang Web</h1>
    </div>
	<div class="container">
		<div class="card">
			<img src="../img/fotoAnggota/aril.png" alt="Foto Pengembang Web 1">
			<h3>ARIL ALEX</h3>
			<p>210211060125</p>
            <p>Prodi Informatika</p>
            <p>Universitas Sam Ratulangi</p>
		</div>
		<div class="card">
			<img src="../img/fotoAnggota/lingkan.jpg" alt="Foto Pengembang Web 2">
			<h3>LINGKAN CHRISTALINO</h3>
			<p>210211060113</p>
            <p>Prodi Informatika</p>
            <p>Universitas Sam Ratulangi</p>
		</div>
		<div class="card">
			<img src="../img/fotoAnggota/bella.jpg" alt="Foto Pengembang Web 3">
			<h3>BELLA APRILIA SAMPE</h3>
			<p>210211060073</p>
            <p>Prodi Informatika</p>
            <p>Universitas Sam Ratulangi</p>
		</div>
		<div class="card">
			<img src="../img/fotoAnggota/vici.jpg" alt="Foto Pengembang Web 4">
			<h3>VICI</h3>
			<p>210211060182</p>
            <p>Prodi Informatika</p>
            <p>Universitas Sam Ratulangi</p>
		</div>
	</div>
	<div class="drive-link">
        <a href="https://drive.google.com/drive/folders/1eRLUdr0TjOBp-1A7pAIi2Af-dfOY4pwI">Link Vidio Presentasi Proyek Aplikasi HobbyMate</a>
        </div>

    
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
</body>
</html>
