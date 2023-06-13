<?php
require 'koneksi.php';
session_start();

$errorMsg = ""; // Mendefinisikan variabel $errorMsg dengan nilai awal kosong

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Proses verifikasi login
    $query_sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;
        header("location:../index.php");
        exit();
    } else {
        $errorMsg = "Username atau Password Anda Salah. Silahkan Coba Login Kembali.";
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - HobbyMate</title>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="./loginreg.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h3>Welcome to Hobby<span>Mate</span></h3>
            <img src="../img/logoweb.png" alt="HobbyMate Logo">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <!-- Tampilkan pesan kesalahan jika ada -->
                <?php if ($errorMsg): ?>
                <p><?php echo $errorMsg; ?></p>
                <?php endif; ?>
				<a href="../index.php"><button type="submit">Login</button></a>
                <div class="form-switch">
                    <input type="checkbox" name="form-switch" id="form-switch">
                    <label for="form-switch">Belum punya akun? <a href="register.php">Register</a></label>
                </div>
            </form>
        </div>
    </div>
    <!--footer-->
    <footer class="footer-main footer-main-flex">
        <p><span class="designed">Hobby<span>Mate</span> &copy; 2023. All rights reserved.</p>
    </footer>
</body>
</html>
