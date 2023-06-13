<?php
// Masukkan Host, username, password, database anda di bawah.
$conn = mysqli_connect("localhost","id20896229_root","hobbyMATE4@","id20896229_db_hobbymate",3306);
// Cek connection
if ($conn) {
    echo "";
} else {
    echo "Gagal terhubung ke database: " . mysqli_connect_error();
}

?>