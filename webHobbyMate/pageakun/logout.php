<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();


// Redirect ke halaman login.php
header("Location: ../daftar/login.php");
exit();
?>
