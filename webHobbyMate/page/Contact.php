<?php
session_start();
require '../daftar/koneksi.php';

// Cek apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    header("Location: ../daftar/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kontak Kami</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<link rel="stylesheet" href="../css/contact.css" />
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

	<div class="contact-us">
		<h2>Kontak Hobby<span>Mate</span></h2>
		<p>Jika ada saran, kritik, dan keluhan silahkan kontak kami</p>
		<div class="contact-menu">
		  <ul>
			<li><a href="mailto:hobbymate04@gmail.com">Email</a></li>
			<li><a href="alamat.html">Alamat</a></li>
		  </ul>
		</div>
	</div>

	<form action="save_contact.php" method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email</label>
		<input type="text" id="email" name="email" required>

		<label for="message">Pesan</label>
		<textarea id="message" name="message" rows="5" required></textarea>

		<input type="submit" value="Kirim">
	</form>

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
