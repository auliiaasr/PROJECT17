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
    <title>AULIA SINTA_1122</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d95b64c38.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #242424">
    <!-- Title -->
    <div class="my-3">
        <h1 class="text-light text-center">CREATE MOVIE</h1>
    </div>
    <div class="mb-5 text-center">
        <a href="index.php" class="btn btn-secondary shadow" type="button"><i class="fas fa-arrow-circle-left me-1"></i> Back</a>
    </div>
    <div class="container">
        <!-- Content -->
        <div class="p-4 shadow p-3 mb-5 bg-white rounded">
            <form action="create.php" method="post" class="col-12">
                <!-- alert -->
                <?php if ($alert == "success") : ?>
                    <div class="alert alert-success" role="alert">Create Data Success! <a href="index.php">Show</a></div>
                <?php elseif ($alert == "failed") : ?>
                    <div class="alert alert-danger" role="alert">Create Data Failed!</div>
                <?php endif; ?>

                <!-- form -->
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                    <small class="form-text text-danger"><?= $errorTitle; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description"></textarea>
                    <small class="form-text text-danger"><?= $errorDescription; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Release Year</label>
                    <input type="text" class="form-control" name="release_year" placeholder="Release Year">
                    <small class="form-text text-danger"><?= $errorReleaseYear; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Language</label>
                    <select class="form-control" name="language_id">
                        <option value="1" selected>English</option>
                        <option value="2">Italian</option>
                        <option value="3">Japanese</option>
                        <option value="4">Mandarin</option>
                        <option value="5">French</option>
                        <option value="6">German</option>
                    </select>
                    <small class="form-text text-danger"><?= $errorLanguageId; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Rental Duration (Days)</label>
                    <input type="number" class="form-control" name="rental_duration" placeholder="Rental Duration">
                    <small class="form-text text-danger"><?= $errorRentalDuration; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Rental Rate ($)</label>
                    <input type="number" class="form-control" name="rental_rate" placeholder="Rental Rate" step=".01">
                    <small class="form-text text-danger"><?= $errorRentalRate; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Length (Minutes)</label>
                    <input type="number" class="form-control" name="length" placeholder="Length">
                    <small class="form-text text-danger"><?= $errorLength; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Replacement Cost ($)</label>
                    <input type="number" class="form-control" name="replacement_cost" placeholder="Replacement Cost" step=".01">
                    <small class="form-text text-danger"><?= $errorReplacementCost; ?></small>
                </div><br>
                <div class="form-group">
                    <label for="">Rating</label>
                    <select class="form-control" name="rating">
                        <option value="PG" selected>PG</option>
                        <option value="PG-13">PG-13</option>
                        <option value="NC-17">NC-17</option>
                        <option value="G">G</option>
                        <option value="R">R</option>
                    </select>
                    <small class="form-text text-danger"><?= $errorRating; ?></small>
                </div><br>
                <label for="">Special Features</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="special_features[]" value="Trailers" id="check0">
                    <label class="form-check-label" for="check0">
                        Trailers
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="special_features[]" value="Commentaries" id="check1">
                    <label class="form-check-label" for="check1">
                        Commentaries
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="special_features[]" value="Deleted Scenes" id="check2">
                    <label class="form-check-label" for="check2">
                        Deleted Scenes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="special_features[]" value="Behind the Scenes" id="check3">
                    <label class="form-check-label" for="check3">
                        Behind the Scenes
                    </label><br>
                    <small class="form-text text-danger"><?= $errorSpecialFeatures; ?></small>
                </div><br>
                <div class="d-grid gap-2">
                    <button type="submit" name="create" class="btn btn-success shadow bg-success"><i class="fas fa-plus-circle me-1"></i> Create</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</body>

</html>