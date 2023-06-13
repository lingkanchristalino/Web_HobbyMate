<?php
// Koneksi ke database (sesuaikan dengan informasi koneksi Anda)
require '../daftar/koneksi.php';

// Memeriksa apakah form kontak telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Menyimpan data kontak ke dalam database
    $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($query) === TRUE) {
        echo "Pesan berhasil terkirim.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>
