<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach ($barang as $brng) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="hidden" name="id_brng" class="form-control" value="<?php echo $brng->id_brng ?>">
                <input type="text" name="nama_brng" class="form-control" value="<?php echo $brng->nama_brng ?>">
            </div>

            <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $brng->keterangan ?>">
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select value="<?php echo $brng->kategori ?>" class="form-control" name="kategori" id="">
                        <option value="<?php echo $brng->kategori ?>"><?php echo $brng->kategori ?></option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="snack">Snack</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $brng->harga ?>">
                </div>

                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" name="stock" class="form-control" value="<?php echo $brng->stock ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>

            </form>
        <?php endforeach; ?>
</div>