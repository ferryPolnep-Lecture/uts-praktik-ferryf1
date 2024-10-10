<?php
// koneksi ke DB
require "koneksi.php";

// baca data dari form
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// query untuk masukkan data baru
$sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
    // echo "Produk berhasil ditambahkan<br>";
    // echo "<a href='tampilProduk.php'>Lihat Produk</a>";
    header('Location: tampilProduk.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// tutup koneksi
$conn->close();
?>
