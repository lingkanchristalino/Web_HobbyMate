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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tentang - Website Komunitas Olahraga dan Kesenian</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link rel="stylesheet" href="../css/tentang.css">
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

  <main>
    <section class="hero">
      <div class="hero-background"></div>
      <div class="container">
          <h1 class="hero-title">Komunitas Olahraga dan Kesenian</h1>
          <p class="hero-subtitle">Bergabunglah dengan Hobbymate untuk meningkatkan kesempatan sosial dan mengembangkan keterampilanmu di bidang olahraga dan kesenian.</p>
      </div>
    </section>

    <section class="about">
      <div class="container">
        <h2 class="section-title">Tentang</h2>
        <p class="about-description">Dengan Komunitas Olahraga dan Kesenian, kita bisa meningkatkan kesempatan sosial kita untuk berkomunikasi dengan orang-orang dalam mengembangkan keterampilan di bidang olahraga dan kesenian.</p>
        <h2 class="section-title">HobbyMate</h2>
        <p class="section-description">Hobbymate merupakan sebuah platform online yang menyediakan ruang bagi mereka penyuka hobi untuk berkomunikasi dan berinteraksi satu sama lain di bidang olahraga dan kesenian.</p>
        <h2 class="section-title">Tujuan HobbyMate</h2>
        <p class="section-description">Dalam keseluruhan, Hobbymate sangat komprehensif dan berfokus pada komunitas, yang bertujuan untuk membantu para penyuka hobi untuk terhubung dengan orang-orang dengan minat yang sama dalam mendapatkan sumber daya dan dukungan yang mereka butuhkan untuk berkembang dalam hobi mereka serta mendapatkan orang-orang yang bisa diajak untuk melakukan kegiatan hobi yang sama dalam berbagai jenis bidang olahraga dan kesenian.</p>
      </div>
    </section>
  </main>

  <!--footer-->
  <footer class="footer-main footer-main-flex">
    <p> <span class="designed">Hobby<span>Mate</span> &copy; 2023. All rights reserved.
    </p>
  </footer>

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
</body>
</html>
