<?php
// require connect database
require_once 'connect.php';

// create db
$id = $_POST['id'];
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
} else {
    $gambar = $_POST['gambar_lama'];
}

// validation
if (
    !empty($nama_skincare) && !empty($harga) && !empty($rating) && !empty($deskripsi)
    && !empty($ingredient) && !empty($id_concern) && !empty($gambar)
) {
    // query update
    $query = mysqli_query($conn, "UPDATE skincare SET nama_skincare='$nama_skincare', harga='$harga', rating='$rating', 
        deskripsi='$deskripsi', ingredient='$ingredient', id_concern='$id_concern', gambar='$gambar' WHERE id_skincare=$id");

    if ($query) {
        echo 'Edit Data Berhasil!';
    } else {
        echo 'Edit Data Gagal!';
    }
} else {
    echo 'Data Tidak Boleh Kosong!';
}
