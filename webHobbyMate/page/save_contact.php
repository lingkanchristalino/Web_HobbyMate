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
        // Mengatur pesan berhasil terkirim sebagai variabel sesi
        session_start();
        $_SESSION['success_message'] = true;

        // Mengalihkan kembali ke halaman contact
        header("Location: Contact.php");
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
     exit;
}

// Menutup koneksi database
$conn->close();
?>
