<?php
session_start();
require '../daftar/koneksi.php';

// Cek apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    header("Location: ../daftar/login.php");
    exit();
}

// Mendapatkan informasi foto profil dari database
$username = $_SESSION['username'];
$query = "SELECT * FROM register WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$profilePicture = $row['profilePicture'];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Profil Akun</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <style>
        body {
            background-color: #c7f0fe;
        }
        .profile-container {
            display: flex;
            align-items: center;
            padding: 20px;
			margin-right:20px;
			margin-top: 20px;
        }

        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-left: 40px;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
        }

        .username {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
			margin-left:10px;
        }

        .edit-button {
            display: block;
            padding: 8px 16px;
            background-color: #FF8400;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
			margin-left:10px;
        }

		.username-form {
			margin-top:20px;
			margin-left:30px;
		}

		.username-form input[type="text"] {
            margin-top: 10px;
			margin-left:30px;
        }

        .upload-form {
			display: block;
            margin-top: 20px;
			margin-left:30px;
        }

        .upload-form input[type="file"] {
            margin-top: 10px;
			margin-left:30px;
        }

		.upload-form input[type="submit"] {
            margin-top: 10px;
			margin-left:30px;
		}

        .logout-button {
        display: inline-block;
        margin-top: 70px;
        padding: 8px 16px;
        background-color: #FFD93D;
        color: #030303;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        margin-left: 65px;
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
							<li><a href="../page/buttom.php">Bulutangkis</a></li>
							<li><a href="../page/buttom.php">Basket</a></li>
							<li><a href="../page/buttom.php">Futsal</a></li>
				            <li><a href="../page/buttom.php">Volly</a></li>
							<li><a href="../page/buttom.php">Bersepeda</a></li>
						  </ul>
						</div>
					  </li>
			<li>
						<a>Kesenian <i class="fas fa-caret-right"></i></a>
						<div class="dropdown-menu-2">
						  <ul>
							<li><a href="../page/buttom.php">Menyanyi</a></li>
							<li><a href="../page/buttom.php">Dance</a></li>
							<li><a href="../page/buttom.php">Teater</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				</div>
			</li>
			<li><a href="../page/tentang.php">Tentang</a>
			</li>
			<li><a href="../page/Contact.php">Kontak Kami</a></li>
			<li><a href="../page/profil.php">Profil</a></li>
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
							<li><a href="../page/buttom.php">Bulutangkis</a></li>
							<li><a href="../page/buttom.php">Basket</a></li>
							<li><a href="../page/buttom.php">Futsal</a></li>
				            <li><a href="../page/buttom.php">Volly</a></li>
							<li><a href="../page/buttom.php">Bersepeda</a></li>
						  </ul>
						</div>
					  </li>
					  <li>
						<a>Kesenian <i class="fas fa-caret-right"></i></a>
						<div class="dropdown-menu-2">
						  <ul>
							<li><a href="../page/buttom.php">Menyanyi</a></li>
							<li><a href="../page/buttom.php">Dance</a></li>
							<li><a href="../page/buttom.php">Teater</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				</div>
			</li>
		  </div>
			<li><a href="../page/tentang.php">Tentang</a>
			</li>
			<li><a href="../page/Contact.php">Kontak Kami</a></li>
			<li><a href="../page/profil.php">Profil</a></li>
			<li><i class="fas fa-user" id="login-btn" onclick="location.href = 'akun.php';"></i></li>

		   
		  </div>
		  </ul> 
		</div>
	<nav>
        
    <div class="profile-container">
        <img class="profile-picture" src="<?php echo $profilePicture; ?>" alt="Foto Profil">
        <div class="profile-details">
            <h2 class="username">
            <?php echo $username; ?></h2>
            <button class="edit-button" onclick="showEditForm()">Edit Profil</button>
        </div>
    </div>

    <div class="username-form" id="username-form" style="display: none;">
        <form action="ubahusername.php" method="post">
            <input type="text" name="username" placeholder="Username baru">
            <input type="submit" value="Ubah Username" name="submit">
        </form>
    </div>

    <div class="upload-form" id="upload-form" style="display: none;">
        <form action="uploadfoto.php" method="post" enctype="multipart/form-data">
            <input type="file" name="profilePicture" accept="image/*">
			<br>
            <input type="submit" value="Unggah Foto Profil" name="submit">
        </form>
    </div>

    <a href="logout.php" class="logout-button">LOGOUT</a>

    <script>
        function showEditForm() {
            document.getElementById('username-form').style.display = 'block';
            document.getElementById('upload-form').style.display = 'block';
        }

		const akunUser = document.getElementById('login-btn'); 
        akunUser.addEventListener('click', () => {
        window.location.href = 'akun.php'; 
        });
    </script>

    
</body>
</html>

