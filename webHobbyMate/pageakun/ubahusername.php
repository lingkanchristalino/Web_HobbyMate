<?php
require '../daftar/koneksi.php';
session_start();

// Periksa apakah ada perubahan username
if (isset($_POST["username"])) {
    $newUsername = $_POST["username"];
    $username = $_SESSION['username'];

    // Periksa apakah username baru telah diisi
    if (!empty($newUsername)) {
        // Update username di database
        $query = "UPDATE register SET username = '$newUsername' WHERE username = '$username'";
        mysqli_query($conn, $query);

        // Perbarui session dengan username baru
        $_SESSION['username'] = $newUsername;
    }
}

header("Location: akun.php");
exit();
?>
