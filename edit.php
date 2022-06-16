<?php
// require connect database
require_once 'connect.php';

// alert
$alert = null;
$errorNama_skincare = $errorHarga = $errorRating = $errorDeskripsi = $errorIngredient = $errorIdConcern = $errorGambar = null;

// edit db
if (isset($_POST['edit'])) {
    $nama_skincare = $_POST['nama_skincare'];
    $harga = $_POST['harga'];
    $rating = $_POST['rating'];
    $deskripsi = $_POST['deskripsi'];
    $ingredient = $_POST['ingredient'];
    $id_concern = $_POST['id_concern'];
    $gambar = $_POST['gambar'];

    // validation
    if (empty($nama_skincare)) {
        $alert = "failed";
        $errorNama_skincare = "*Nama skincare tidak boleh kosong!";
    }
    if (empty($harga)) {
        $alert = "failed";
        $errorHarga = "*Harga tidak boleh kosong!";
    }
    if (empty($rating)) {
        $alert = "failed";
        $errorRating = "*Rating tidak boleh kosong!";
    }
    if (empty($deskripsi)) {
        $alert = "failed";
        $errorDeskripsi = "*Deskripsi tidak boleh kosong!";
    }
    if (empty($ingredient)) {
        $alert = "failed";
        $errorIngredient = "*Ingredient tidak boleh kosong!";
    }
    if (empty($id_concern)) {
        $alert = "failed";
        $errorIdConcern = "*Id Concern Rate tidak boleh kosong!";
    }
    if (empty($gambar)) {
        $alert = "failed";
        $errorGambar = "*Gambar tidak boleh kosong!";
    }

    // if not empty
    if (
        !empty($nama_skincare) && !empty($harga) && !empty($rating) && !empty($deskripsi)
        && !empty($ingredient) && !empty($id_concern) && !empty($gambar)
    ) {
        // query create
        $query = mysqli_query($conn, "UPDATE skincare SET nama_skincare='$nama_skincare', harga='$harga', rating='$rating', 
        deskripsi='$deskripsi', ingredient='$ingredient', id_concern='$id_concern', gambar='$gambar'");

        // change alert
        $alert = "success";
    }
}
