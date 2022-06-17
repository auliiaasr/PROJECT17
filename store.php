<?php
// require connect database
require_once 'connect.php';

// create db
$nama_skincare = $_POST['nama_skincare'];
$harga = $_POST['harga'];
$rating = $_POST['rating'];
$deskripsi = $_POST['deskripsi'];
$ingredient = $_POST['ingredient'];
$id_concern = $_POST['id_concern'];

// upload image
if ($_FILES['gambar']['name'] != '') {
    $lokasi = "Image/";
    $gambar = $lokasi . $_FILES['gambar']['name'];
    $temp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($temp, $baseUrl . $gambar);
}

// validation
if (
    !empty($nama_skincare) && !empty($harga) && !empty($rating) && !empty($deskripsi)
    && !empty($ingredient) && !empty($id_concern) && !empty($gambar)
) {
    // query create
    $query = mysqli_query($conn, "INSERT INTO skincare(nama_skincare, harga, rating, deskripsi, 
        ingredient, id_concern, gambar)
        VALUES('$nama_skincare', '$harga', '$rating', '$deskripsi', '$ingredient',
        '$id_concern', '$gambar')");

    if ($query) {
        echo 'Tambah Data Berhasil!';
    } else {
        echo 'Tambah Data Gagal!';
    }
} else {
    echo 'Data Tidak Boleh Kosong!';
}
