<?php
require '../daftar/koneksi.php';
session_start();

// Fungsi untuk mengunggah foto profil
function uploadProfilePicture($file)
{
    // Cek apakah file telah dipilih
    if ($file["size"] == 0) {
        return null; // Jika file tidak dipilih, kembalikan nilai null
    }
    
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $maxFileSize = 5 * 1024 * 1024; // 5MB

    // Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > $maxFileSize) {
        echo "Sorry, your file is too large. Maximum file size is 5MB.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    return null;
}

// Periksa apakah ada file yang diunggah
if (isset($_FILES["profilePicture"])) {
    $profilePicture = $_FILES["profilePicture"];
    $uploadedFilePath = uploadProfilePicture($profilePicture);

    if ($uploadedFilePath) {
        // Update foto profil di database
        $username = $_SESSION['username'];
        $query = "UPDATE register SET profilePicture = '$uploadedFilePath' WHERE username = '$username'";
        mysqli_query($conn, $query);
    }
}


// Kembali ke halaman profil akun
header("Location: akun.php");
exit();
?>
