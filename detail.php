<?php
require_once 'connect.php';
$id = $_POST['id'];
$query = mysqli_query($conn, "SELECT * FROM skincare INNER JOIN concern ON skincare.id_concern = concern.id_concern WHERE id_skincare=$id");
$row = mysqli_fetch_object($query);
?>

<!-- FRONT END -->
<div class="row mt-4">
    <!-- Image -->
    <div class="col-5">
        <img src="<?= $row->gambar ?>" class="card-img-top" alt="" />
    </div>
    <div class="col-6">
        <h2 class="mb-3"><?= $row->nama_skincare; ?></h2>
        <div class="d-flex justify-content-start mb-2">
            <h5 class="text-secondary"><?= $row->nama_concern ?></h5>
            <h5 class="ms-4"><i class="fas fa-star text-warning"></i> <?= $row->rating ?></h5>
        </div>
        <h2 class="text-primary mb-3">Rp <?= number_format($row->harga) ?></h2>
        <h6 class="text-secondary mb-3"><?php print_r($row->deskripsi) ?></h6>
        <h6 class="text-secondary mb-3"><?php print_r($row->ingredient) ?></h6>
    </div>
</div>