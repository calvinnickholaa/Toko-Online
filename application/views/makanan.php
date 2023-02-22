<!-- Begin Page Content -->
<div class="container-fluid">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-4">

        <?php foreach ($makanan as $brng) : ?>
            <div class="card ml-3 mb-3" style="width: 12.4rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brng->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brng->nama_brng ?></h5>
                    <small><?php echo $brng->keterangan ?></small>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brng->harga, 0, ',', '.')  ?></span>
                    <?php echo anchor('dashboard/tambah_keranjang/' . $brng->id_brng, '<div class="btn btn-sm btn-primary">Add to Cart</div>') ?>
                    <?php echo anchor('dashboard/detail/' . $brng->id_brng, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->