<?php

require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = basename($_FILES['image']['name']); // Amankan nama file
    $tempImage = $_FILES['image']['tmp_name'];

    // Generate random filename
    $randomFilename = time() . '-' . $image;

    // Updated upload directory
    $uploadDir = 'C:/xampp/htdocs/Tugas_pemweb_teori/pertemuan-7-pemweb-teori/upload/';
    $uploadPath = $uploadDir . $randomFilename;

    // Ensure the upload directory exists
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move uploaded file
    if (move_uploaded_file($tempImage, $uploadPath)) {
        // Save to database
        $query = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '/Tugas_pemweb_teori/pertemuan-6-pemweb-teori/upload/$randomFilename')";
        if (mysqli_query($db_connect, $query)) {
            echo "Berhasil upload";
        } else {
            echo "Gagal menyimpan ke database: " . mysqli_error($db_connect);
        }
    } else {
        echo "Gagal upload file.";
    }
}

?>
