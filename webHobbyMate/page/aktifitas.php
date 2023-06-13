<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/kategori.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title>Aktifitas</title>
    <style>
        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffd93d;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }

        h2 {
            margin-bottom:20px;

        }

        .activity {
            border: 1px solid #ddd;
            padding: 30px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .activity h3 {
            margin-bottom: 10px;
        }

        .activity p {
            margin-bottom: 5px;
        }

        .join-btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .join-btn:hover {
            background-color: #FF8400;
            margin-bottom:10px;
        
        }

        .join-btn:focus {
            outline: none;
            margin-bottom:10px;
        }

        .join-count {
            display: inline-block;
            margin-left: 8px;
            color:#7fcd56;
        }

        footer {
            background-color: rgb(29, 29, 29);
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #ffffff;
        }
    </style>
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
        <div>
            <h2>Postingan Kegiatan Terbaru</h2>
            <?php
            require '../daftar/koneksi.php';

            // Query untuk mengambil data postingan kegiatan terbaru
            $query = "SELECT * FROM upload ORDER BY waktu DESC LIMIT 5";
            $result = $conn->query($query);
            
            
            // Memeriksa apakah ada data yang ditemukan
            if ($result->num_rows > 0) {
                // Looping untuk menampilkan setiap postingan kegiatan
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='activity'>";
                    echo "<h3>" . $row['nama'] . "</h3>";
                    echo "<p>Jenis Kegiatan: " . $row['jenis_kegiatan'] . "</p>";
                    echo "<p>Waktu: " . $row['waktu'] . "</p>";
                    echo "<p>Tempat: " . $row['tempat'] . "</p>";
                    echo "<p>Jumlah Orang: " . $row['jumlah_orang'] . "</p>";
                    echo "<p>Deskripsi: " . $row['deskripsi'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Belum ada postingan kegiatan.";
            }


            // Menutup koneksi database
            $conn->close();
            ?>
        </div>
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
	
<script src="../js/kategori.js"></script>

  <!--footer-->
<footer class="footer-main footer-main-flex">
    <p> <span class="designed">Hobby<span>Mate</span> &copy; 2023. All rights reserved.
    </p>
</footer>
</body>
</html>