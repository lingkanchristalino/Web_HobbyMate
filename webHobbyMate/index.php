<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  $username = "";
} else {
  $username = $_SESSION['username'];
}


?> 

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/artikel.css" />

    <title>HobbyMate</title>
    <link rel="shortcut icon" href="../img/logoweb.png">
    <style>
        .welcome-message {
            font-size: 30px;
            color: black;
            margin-top: 20px;
            margin-bottom: 25px;
            margin-left:70px;
        }
    </style>
    <script>
        const welcomeMessage = document.querySelector('.welcome-message');
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
        <li><a href="./index.php">Beranda</a></li>
        <li><a>Kategori <i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                  <li>
                    <a>Olahraga <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="./page/buttom.php">Bulutangkis</a></li>
                        <li><a href="./page/buttom.php">Basket</a></li>
                        <li><a href="./page/buttom.php">Futsal</a></li>
			                  <li><a href="./page/buttom.php">Volly</a></li>
                        <li><a href="./page/buttom.php">Bersepeda</a></li>
                      </ul>
                    </div>
                  </li>
		      <li>
                    <a>Kesenian <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown-menu-2">
                      <ul>
                        <li><a href="./page/buttom.php">Menyanyi</a></li>
                        <li><a href="./page/buttom.php">Dance</a></li>
                        <li><a href="./page/buttom.php">Teater</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </div>
        </li>
        <li><a href="./page/tentang.php">Tentang</a>
        </li>
        <li><a href="./page/Contact.php">Kontak Kami</a></li>
        <li><a href="./page/profil.php">Profil</a></li>
        <li><i class="fas fa-user" id="login-btn"></i></li>
        </div>
      </ul>
    </div>
	  
	  <div id="showMenubar" class="menu-bar2">
      <ul>
        <li><a href="./index.php">Beranda</a></li>
        <div class="dropdown">
        <li><a>Kategori <i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                  <li>
                    <a>Olahraga <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="./page/buttom.php">Bulutangkis</a></li>
                        <li><a href="./page/buttom.php">Basket</a></li>
                        <li><a href="./page/buttom.php">Futsal</a></li>
			<li><a href="./page/buttom.php">Volly</a></li>
                        <li><a href="./page/buttom.php">Bersepeda</a></li>
                      </ul>
                    </div>
                  </li>
				  <li>
                    <a>Kesenian <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown-menu-2">
                      <ul>
                        <li><a href="./page/buttom.php">Menyanyi</a></li>
                        <li><a href="./page/buttom.php">Dance</a></li>
                        <li><a href="./page/buttom.php">Teater</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </div>
        </li>
      </div>
        <li><a href="./page/tentang.php">Tentang</a>
        </li>
        <li><a href="./page/Contact.php">Kontak Kami</a></li>
        <li><a href="./page/profil.php">Profil</a></li>
        <li><i class="fas fa-user" id="login-btn" onclick="location.href = './pageakun/akun.php';"></i></li>
       
      </div>
      </ul> 
    </div>
<nav>
    <div class="hero">
      &nbsp;
    </div>

    <?php if (!empty($username)): ?>
      <p class="welcome-message">Halo, <?php echo $username; ?>!</p>
    <?php endif; ?>
    
    <!-- $_SESSION['username']; -->
    <!--slideshow-->
    <div class="slideshow-container">
      <div class="mySlides fade">
          <img src="https://media.istockphoto.com/id/691338554/photo/two-couples-playing-badminton.jpg?b=1&s=170667a&w=0&k=20&c=429eqYKLuldVVe2eO93RSMQd3rvn0SzlqkwgcEjFo5M=" style="width:100%">
          <div class="text">Bulutangkis</div>
      </div>
      <div class="mySlides fade">
          <img src="https://media.istockphoto.com/id/482030254/id/foto/pemain-basket-muda-bermain-dengan-energi.jpg?s=612x612&w=0&k=20&c=Tb9EcXbMOnSz3aggw57EtPo8K-2ZZw506fqJOrHKnLc=" style="width:100%">
          <div class="text">Basket</div>
      </div>
      <div class="mySlides fade">
          <img src="https://media.istockphoto.com/id/1215144695/i7d/foto/latihan-malam.jpg?s=612x612&w=0&k=20&c=fFuv91ak8k09z7QLy7rGCaxzK8iEo4ps28zvGwkLLps=" style="width:100%">
          <div class="text">Futsal</div>
      </div>
      <div class="mySlides fade">
        <img src="https://media.istockphoto.com/id/1133753143/id/foto/siswa-pria-dan-wanita-bernyanyi-dalam-paduan-suara-dengan-guru-di-sekolah-seni-pertunjukan.jpg?s=612x612&w=0&k=20&c=-_4Qhhxz6ZhmTt5Dv0OYviat8CcQRhvTgvXeYLD0n-c=" style="width:100%">
        <div class="text">Menyanyi</div>
    </div>
    <div class="mySlides fade">
      <img src="https://media.istockphoto.com/id/1317053199/id/foto/sekelompok-pesepeda-profesional-selama-balapan-bersepeda.jpg?s=612x612&w=0&k=20&c=_y-1ZLNSrQszjxy6bjZTpvxoeBBPCFVMkshYG-0-4ZM=" style="width:100%">
      <div class="text">Bersepeda</div>
    </div>
    <div class="mySlides fade">
      <img src="https://media.istockphoto.com/id/1457327749/id/foto/penari-krump-remaja-menari-dengan-remaja-di-studio-koreografi.jpg?s=612x612&w=0&k=20&c=WYZLvxWlLjG_n3frnAUTLo1AkruRiu_0vNOvpYYIbpo=" style="width:100%">
      <div class="text">Dance</div>
    </div>
    <div class="mySlides fade">
      <img src="https://media.istockphoto.com/id/626535710/id/foto/pemain-voli-sma-asia-lonjakan-bola-voli-melawan-lawan-perempuan.jpg?s=612x612&w=0&k=20&c=CwNzSlm58A-9ezxblwqmjDaLTY-1j96jO5bwt9dBHZU=" style="width:100%">
      <div class="text">Volly</div>
    </div>
    <div class="mySlides fade">
      <img src="https://media.istockphoto.com/id/1355944093/id/foto/pertunjukan-teater-ramayana-ketika-ramayana-memenangkan-pertempuran.jpg?s=612x612&w=0&k=20&c=LVMx8GLKFyxJbtA_b6wGL4O_8m21knm4AbyPsUkArVE=" style="width:100%">
      <div class="text">Teater</div>
    </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <script src="./js/slideshow.js"></script>
  <!--end slideshow-->

  <!--Artikel-->
  <title>Articles</title>
  <section id="blog">
    <div class="blog-heading">
        <h3>Blog Hobby<span>Mate</span></span></h3>
    </div>
    <div class="blog-container">

        <div class="blog-box">
            <div class="blog-img">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKVnj13AF6DEzp44RxRS4yDOuqWSh4ADzW6YsyhSMwhbyKb0DSCnPLCGes0rna5Nd3cDMn1DLdfqRw2QmWe1fw6Z4nPAls0SuQ4mSlqzXksZSB30lbFwzPQx-h7cXhmzegiujZmnitNqrH2eZzskWEjEs-lPeN7uYLWrXhkcYDx5gQs5KQ8HAVby8a/s320/group-happy-diverse-volunteers.jpg" alt="Blog">
            </div>  
            <div class="blog-text">
                <span>7 Juni 2023</span>
                <a href="https://dampak-kesehatan-komunitas-olahraga.blogspot.com/2023/06/olahraga-adalah-salah-satu-aktivitas.html" target="_blank" class="blog-title">Komunitas Olahraga Membawa Dampak Positif Bagi Kesehatan Fisik dan Mental</a>
                <p>Olahraga adalah salah satu aktivitas yang sangat penting bagi kesehatan fisik dan mental seseorang. Olahraga bisa dilakukan oleh siapa saja, mulai dari anak-anak hingga orang dewasa, dan bahkan bagi penyandang cacat.</p>
                <a href="https://dampak-kesehatan-komunitas-olahraga.blogspot.com/2023/06/olahraga-adalah-salah-satu-aktivitas.html" target="_blank">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjrldQ3XNtKIEhyjo9vrL_BppcCgomESXOIS6K229v8vJAq-gdDXfSRSxmZBtiwOSC6yi6pjHFYtMaEouYb5tIGjkOEGNCwROXqH6j9gBGf6rVpnE6q2hcBUTWVYi3PeY2j7tL7Od6soPaVAIz9o278ZRfgj5RRcND8wcbrI4r7PIGPqZ6yr-rIKs29/w394-h262/football-fans-huddle-tailgate-party.jpg" alt="Blog">
            </div>  
            <div class="blog-text">
                <span>7 Juni 2023</span>
                <a href="https://bangun-kekompakan-melalui-olahraga.blogspot.com/2023/06/olahraga-adalah-aktivitas-yang-sangat.html" target="_blank" class="blog-title">Komunitas Olahraga: Membangun Kekompakan Melalui Olahraga</a>
                <p>Olahraga adalah aktivitas yang sangat penting bagi kesehatan tubuh dan pikiran. Selain itu, olahraga juga dapat menjadi sarana untuk membangun kekompakan dan kebersamaan antar individu.</p>
                <a href="https://bangun-kekompakan-melalui-olahraga.blogspot.com/2023/06/olahraga-adalah-aktivitas-yang-sangat.html" target="_blank">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiPcEi7e9Tc9PoxLQMvckAPvXeCRAlhi--_ws_Q14ggLuSTejZahhBB1niSFkqcyfiIfXS7u8L4BGcmjKpLlHQ-4rHNIPVthw45AwwdjLXUrXY-0gPvFMUfDsVJ8e945ua3bNyGm1K6sD60VAdtvy0-0sK7MhwUK43b2SMiJvYJE1UYMtMwGsM-Ywe6/w389-h310/6640.jpg" alt="Blog">
            </div>  
            <div class="blog-text">
                <span>7 Juni 2023</span>
                <a href="https://komunitas-kesenian-di-indonesia.blogspot.com/2023/06/seni-budaya-merupakan-bagian-penting.html" target="_blank" class="blog-title">Komunitas Kesenian di Indonesia</a>
                <p>Seni merupakan bagian penting dari kehidupan manusia. Salah satu bagian dari seni adalah seni modern. Di Indonesia, seni memiliki tempat yang istimewa karena Indonesia memiliki keanekaragaman budaya yang sangat kaya.</p>
                <a href="https://komunitas-kesenian-di-indonesia.blogspot.com/2023/06/seni-budaya-merupakan-bagian-penting.html" target="_blank">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
  
</section>
  <!--footer-->
  <footer class="footer-main footer-main-flex">
      <p> <span class="designed">Hobby<span>Mate</span> &copy; 2023. All rights reserved.
      </p>
  </footer>


  <script>
    const loginBtn = document.getElementById('login-btn'); 
loginBtn.addEventListener('click', () => {
  window.location.href = './pageakun/akun.php'; 
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
