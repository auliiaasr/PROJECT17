<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POREs Be PURE - Situs Skincare Terlengkap & Terpercaya di Indonesia</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
                <a href="index.php" class="text-decoration-none">
                    <h1 class="text-primary" style="font-family: 'Mali', cursive;">POREs Be PURE</h1>
                </a>
            </div>
            <!-- Create Button -->
            <div class="d-flex">
                <button type="button" class="btn btn-primary px-4" id="create"><i class="fas fa-plus-circle me-1"></i> Tambah</button>
            </div>
        </div>
    </nav>
    <div class="container" id="container">
        <div class="row justify-content-between mx-5 pe-5 my-4">
            <!-- Sort -->
            <div class="col-4">
                <select class="form-select" aria-label="Default select example" id="sort">
                    <option selected disabled>Urutkan Harga</option>
                    <option value="ASC">Termurah</option>
                    <option value="DESC">Termahal</option>
                </select>
            </div>
            <!-- Filter -->
            <div class="col-4">
                <select class="form-select" aria-label="Default select example" id="filter">
                    <option selected disabled>Filter Concern</option>
                    <?php
                        require_once 'connect.php';
                        $query = mysqli_query($conn, "SELECT * FROM concern");
                        while ($row = mysqli_fetch_object($query)) :
                    ?>
                    <option value="<?= $row->id_concern ?>"><?= $row->nama_concern ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <!-- Search -->
            <div class="col-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Skincare..." id="search">
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="row mx-5" id="content"></div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>