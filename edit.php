<?php
// require connect database
require_once 'connect.php';

// query fetch by id
$id = $_POST['id'];
$query = mysqli_query($conn, "SELECT * FROM skincare WHERE id_skincare=$id");
$row = mysqli_fetch_object($query);
?>

<!-- FRONT END -->
<div class="p-4 shadow p-3 my-4 mx-5 bg-white rounded">
    <h3 class="mb-3">Edit Data Skincare</h3>
    <form class="col-12" method="post" id="formEdit" enctype="multipart/form-data">
        <!-- form -->
        <input type="text" name="id" value="<?= $row->id_skincare ?>" hidden>
        <div class="form-group mb-2">
            <label for="" class="form-label">Nama Skincare</label>
            <input type="text" class="form-control" name="nama_skincare" placeholder="Nama Skincare" value="<?= $row->nama_skincare ?>">
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"><?= $row->deskripsi ?></textarea>
        </div>
        <label for="" class="form-label">Ingredient</label>
        <div class="form-group mb-2">
            <textarea class="form-control" name="ingredient" placeholder="Ingredient"><?= $row->ingredient ?></textarea>
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Harga</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="number" class="form-control" name="harga" placeholder="Harga" min="0" value="<?= $row->harga ?>">
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Rating</label>
            <input type="number" class="form-control" name="rating" placeholder="Rating" step=".01" max="5.00" value="<?= $row->rating ?>">
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Concern</label>
            <select class="form-control" name="id_concern">
                <?php
                require_once 'connect.php';
                $query = mysqli_query($conn, "SELECT * FROM concern");
                while ($concern = mysqli_fetch_object($query)) :
                ?>
                    <option value="<?= $concern->id_concern ?>" <?php ($concern->id_concern == $row->id_concern) ? 'selected' : '' ?>>
                        <?= $concern->nama_concern ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="" class="form-label">Gambar</label><br>
            <?php if (isset($row->gambar)) : ?>
                <img src="glob(<?= $row->gambar; ?>)" class="mb-3" width="150" alt="" />
            <?php endif; ?>
            <input type="text" name="gambar_lama" value="<?= $row->gambar ?>" hidden>
            <input class="form-control" type="file" name="gambar">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary shadow"><i class="fas fa-pen me-1"></i> Edit</button>
        </div>
    </form>
</div>