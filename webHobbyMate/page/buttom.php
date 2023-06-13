<?php
session_start();
require '../daftar/koneksi.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: ../daftar/login.php");
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/buttom.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
	<title>Kegiatan</title>
	<script>
        document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll(".dropdown-menu-1 a");
        const titel = document.getElementById('titel');
    
        links.forEach(link => {
            link.addEventListener('click', event => {
            event.preventDefault(); 
            const name = link.textContent; 
            titel.textContent = name; 
            });
        });
    });
    </script>
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
	<h2 id="titel"></h2>
      <div class="container">
		<div class="box">
			<h3>Upload Kegiatan</h3>
			<p>Bergabunglah dengan seluruh teman sehobi kamu. Upload kegiatan dan ajak orang lain untuk berolahraga atau gabung dengan kesenian kamu. Upload kegiatan sekarang.</p>
			<button onclick="location.href='kategori.php'">Upload Kegiatan</button>
		</div>
		<div class="box">
			<h3>Gabung Room Chat</h3>
			<p>HobbyMate menghadirkan Room Chat untuk memudahkan semua orang menemukan teman sehobi mereka agar mereka bisa saling mengenal dan berinteraksi.</p>
			<button onclick="location.href='chatroom.php'">Gabung Room Chat</button>
		</div>
        <div class="box">
			<h3>Kegiatan</h3>
			<p>Cek kegiatan olahraga dan kesenian yang akan dilaksanakan di sini</p>
			<button onclick="location.href='aktifitas.php'">Kegiatan</button>
		</div>
	</div>

    <!-- login -->
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
</main>

<!--footer-->
<footer class="footer-main footer-main-flex">
    <p> <span class="designed">Hobby<span>Mate</span> &copy; 2023. All rights reserved.
    </p>
</footer>
</body>
</html>
