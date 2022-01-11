<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <br><br><br>
    <figcaption class="blockquote-footer">
        Pesanan #<?= $transaksi->id_trans ?>

        <table class="table">
            <tr>
                <td>Barang</td>
                <td><?= $transaksi->nama ?></td>

            </tr>
            <tr>
                <td>Pembeli</td>
                <td><?= $transaksi->username ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $transaksi->alamat ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?= $transaksi->jumlah ?></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><?= $transaksi->total_harga ?></td>
            </tr>
        </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?= $this->endSection() ?>