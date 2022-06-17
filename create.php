<!-- FRONT END -->
<div class="p-4 shadow p-3 my-4 mx-5 bg-white rounded">
    <h3 class="mb-3">Tambah Data Skincare</h3>
    <form class="col-12" method="post" id="formCreate" enctype="multipart/form-data">
        <!-- form -->
        <div class="form-group mb-2">
            <label for="" class="form-label">Nama Skincare</label>
            <input type="text" class="form-control" name="nama_skincare" placeholder="Nama Skincare">
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
        </div>
        <label for="" class="form-label">Ingredient</label>
        <div class="form-group mb-2">
            <textarea class="form-control" name="ingredient" placeholder="Ingredient"></textarea>
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Harga</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="number" class="form-control" name="harga" placeholder="Harga" min="0">
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Rating</label>
            <input type="number" class="form-control" name="rating" placeholder="Rating" step=".01" max="5.00">
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Concern</label>
            <select class="form-control" name="id_concern">
                <?php
                    require_once 'connect.php';
                    $query = mysqli_query($conn, "SELECT * FROM concern");
                    while ($row = mysqli_fetch_object($query)) :
                ?>
                    <option value="<?= $row->id_concern ?>"><?= $row->nama_concern ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="" class="form-label">Gambar</label>
            <input class="form-control" type="file" name="gambar">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary shadow"><i class="fas fa-plus-circle me-1"></i> Tambah</button>
        </div>
    </form>
</div>