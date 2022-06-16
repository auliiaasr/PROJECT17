<?php
// require connect database
require_once 'connect.php';

// alert
$alert = null;
$errorNama_skincare = $errorHarga = $errorRating = $errorDeskripsi = $errorIngredient = $errorIdConcern = $errorGambar = null;

// create db
if (isset($_POST['create'])) {
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
        $query = mysqli_query($conn, "INSERT INTO skincare(nama_skincare, harga, rating, deskripsi, 
            ingredient, id_concern, gambar)
            VALUES('$nama_skincare', '$harga', '$rating', '$deskripsi', '$ingredient',
            '$id_concern', '$gambar')");

        // change alert
        $alert = "success";
    }
}
?>

<!-- FRONT END -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POREs Be PURE - Situs Skincare Terlengkap & Terpercaya di Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d95b64c38.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap');
    </style>
</head>

<body style="background-color: #EFEFEF">
    <!-- Title -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid px-5">
            <div class="my-3">
                <h1 style="font-family: 'Mali', cursive;">POREs Be PURE</h1>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <!-- Content -->
        <div class="row mt-5 mx-5" id="content"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>