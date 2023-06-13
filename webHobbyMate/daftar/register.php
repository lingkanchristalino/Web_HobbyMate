<?php
require 'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Proses pendaftaran pengguna ke dalam database
    $query_sql = "INSERT INTO register (fullname, email, username, password)
                  VALUES ('$fullname', '$email', '$username', '$password')";

    if (mysqli_query($conn, $query_sql)) {
        // Pendaftaran berhasil
        $_SESSION['registered'] = true;
        header("location: login.php");
        exit();
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($conn);
    }
} 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Register - HobbyMate</title>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="./loginreg.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h3>Register to Hobby<span>Mate</span></h3>
            <img src="../img/logoweb.png" alt="HobbyMate Logo">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
                <div class="form-switch">
                    <input type="checkbox" name="form-switch" id="form-switch">
                    <label for="form-switch">Sudah punya akun? <a href="login.php">Login</a></label>
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
