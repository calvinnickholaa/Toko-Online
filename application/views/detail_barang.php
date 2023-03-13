<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Product</h5>
        <div class="card-body">
            <div class="row">

                <?php foreach ($barang as $brng) : ?>
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/uploads/' . $brng->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brng->nama_brng ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brng->keterangan ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brng->kategori ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stock</td>
                                <td><strong><?php echo $brng->stock ?></strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp.<?php echo number_format($brng->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>

                        <?php echo anchor('dashboard/tambah_keranjang/' . $brng->id_brng, '<div class="btn btn-sm btn-primary">Add to Cart</div>') ?>
                        <?php echo anchor('welcome/index/', '<div class="btn btn-sm btn-danger">Back</div>') ?>

                    </div>
                    
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>