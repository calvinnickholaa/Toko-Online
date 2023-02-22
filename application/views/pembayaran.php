<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda: Rp." . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input class="form-control" type="text" name="no_telp" placeholder="Masukkan Nomor Telepon Anda">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control" name="" id="">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Go-Jek</option>
                        <option>Grab</option>
                        <option>Maxim</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control" name="" id="">
                        <option>BCA - XXXXX</option>
                        <option>BRI - XXXXX</option>
                        <option>MANDIRI - XXXXXX</option>
                        <option>BNI - XXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

            </form>
        <?php
                } else {
                    echo "<h5>Keranjang Belanja Anda Masih Kosong";
                }
        ?>
        </div>

        <div class="col-md-2"></div>
    </div>

</div>