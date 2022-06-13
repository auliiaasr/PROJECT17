<?php
if (isset($_POST['filter'])) :
    require_once 'connect.php';
    $filter = $_POST['filter'];

    $query = mysqli_query($conn, "SELECT * FROM skincare INNER JOIN concern ON skincare.id_concern = concern.id_concern WHERE nama_skincare=$search");
    while ($row = mysqli_fetch_object($query)) :
?>
        <div class="col-sm-3 mb-3">
            <div class="card" style="width: 15rem">
                <!-- Image -->
                <a class="px-1 py-1" href="">
                    <img src="<?= $row->gambar; ?>" class="card-img-top" alt="" />
                </a>
                <!-- Body -->
                <div class="card-body">
                    <h5 class="card-title"><?= $row->nama_skincare; ?></h5>
                    <h6 class="card-text">Rp <?= number_format($row->harga) ?></h6>
                    <div class="row">
                        <div class="col-8">
                            <p class="card-text"><i class="fas fa-star text-warning"></i> <?= $row->rating; ?></p>
                        </div>
                        <!-- Button Edit -->
                        <div class="col-2">
                            <a href="">
                                <i class="fas fa-edit fa-lg text-primary mr-1"></i>
                            </a>
                        </div>
                        <!-- Button Delete -->
                        <div class="col-2">
                            <a href="">
                                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>