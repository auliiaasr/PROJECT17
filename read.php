<?php
require_once 'connect.php';
$query = mysqli_query($conn, "SELECT * FROM skincare ORDER BY id_skincare DESC");
while ($row = mysqli_fetch_object($query)) :
?>
    <div class="col-sm-3 mb-3">
        <div class="card" style="width: 15rem">
            <!-- Image -->
            <a class="px-1 py-1" href="JavaScript:void(0);" id="detail" value="<?= $row->id_skincare ?>">
                <img src="<?= $row->gambar; ?>" class="card-img-top" alt="" />
            </a>
            <!-- Body -->
            <div class="card-body">
                <h5 class="card-title"><?= $row->nama_skincare; ?></h5>
                <h5 class="card-text text-primary">Rp <?= number_format($row->harga) ?></h5>
                <div class="row">
                    <div class="col-7">
                        <p class="card-text"><i class="fas fa-star text-warning"></i> <?= $row->rating; ?></p>
                    </div>
                    <!-- Button Edit -->
                    <div class="col-2">
                        <a href="JavaScript:void(0);" id="edit" value="<?= $row->id_skincare ?>">
                            <i class="fas fa-edit fa-lg text-warning mr-1"></i>
                        </a>
                    </div>
                    <!-- Button Delete -->
                    <div class="col-2">
                        <a href="JavaScript:void(0);" id="delete" value="<?= $row->id_skincare ?>">
                            <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>