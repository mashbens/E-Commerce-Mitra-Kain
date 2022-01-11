<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<br><br><br>
	<figcaption class="blockquote-footer">
		Pesanan #<?= $transaksi->id_trans ?>
	</figcaption>
	<p>
	</p>

	<blockquote class="blockquote">
		<p>Pesanan Anda sudah dikonfirmasi</p>
	</blockquote>


	<p> CARA TRANSFER: Mohon baca semua instruksi di bawah ini sebelum membayar. </p>
	<figcaption class="blockquote-footer">
		<p> Transfer nominal TOTAL PESANAN diakhiri dengan KODE UNIK (KODE UNIK adalah 3 ANGKA BELAKANG NOMOR PEMESANAN), kode unik berguna untuk admin kami melacak uangmu dan mencocokan dengan pesananmu. </p>
		<p>- No. Pemesanan #88 (INI HANYA CONTOH) untuk cek nomor pemesananmu, silahkan LIHAT DI ATAS kalimat "Pesanan anda Telah di Konfirmasi"
		</p>
		<p>- Total pesanan Rp. 195,000 (INI HANYA CONTOH) mohon sesuaikan dengan total order kalian masing-masing ya.</p>
		<p>- Maka, jumlah yang harus ditransfer adalah: Rp, 195,088 (INI HANYA CONTOH) mohon sesuaikan dengan total pemesanan & nomor pemesanan kalian masing-masing.
		</p>
	</figcaption>

	<p> Transfer HANYA ke salah satu REKENING di bawah ini:
	</p>
	<table class="table">
		<tr>
			<td> Rekening Bank BCA: 7610617926
				<br> Atas Nama: PT MITRA BUSANA
			</td>
		</tr>
		<tr>
			<td>Rekening Bank Mandiri: 176 0099 778 779
				<br> Atas Nama: PT MITRA BUSANA
			</td>
		</tr>

		<tr>
			<td>Rekening Bank BRI: 1145 01 000 771 565
				<br>Atas Nama: PT MITRA BUSANA
			</td>
		</tr>

		<tr>
			<td></td>
		</tr>
	</table>
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