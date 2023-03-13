<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang </button>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>KETERANGAN</th>
                <th>KATEGORI</th>
                <th>HARGA</th>
                <th>STOCK</th>
                <th colspan="3" class="text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brng) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $brng->nama_brng; ?></td>
                    <td><?php echo $brng->keterangan; ?></td>
                    <td><?php echo $brng->kategori; ?></td>
                    <td><?php echo $brng->harga; ?></td>
                    <td><?php echo $brng->stock; ?></td>
                    <td><button class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></button></td>
                    <td><?php echo anchor('admin/data_barang/edit/' . $brng->id_brng, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                    <td><?php echo anchor('admin/data_barang/delete/' . $brng->id_brng, '<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>  ') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input class="form-control" type="text" name="nama_brng">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori" id="">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                            <option value="snack">Snack</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" type="text" name="harga">
                    </div>

                    <div class="form-group">
                        <label>Stock</label>
                        <input class="form-control" type="text" name="stock">
                    </div>

                    <div class="form-group">
                        <label>Gambar Produk</label><br>
                        <input class="form-control" type="file" name="gambar">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>

        </div>
    </div>
</div>