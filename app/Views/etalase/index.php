<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<head>
	<title>Mitre Kain | Produk</title>
</head>
<div class="container">
	<br>
	<figure class="text-center">
		<blockquote class="blockquote">
			<p>Pastikan anda sudah login sebelum membeli!</p>
		</blockquote>
		<figcaption class="blockquote-footer">
			login <cite title="Source Title"><a class="text-primary" href="<?= site_url('auth/login') ?>">disini!</a></cite>
		</figcaption>
	</figure>

	<!-- <div class="container"> -->
	<div class="row">
		<?php foreach ($model as $m) : ?>
			<div class="col-4 p-2">
				<div class="card text-center">
					<div class="card-header">
						<span class="text-success"><strong><?= $m->nama ?></strong></span>
					</div>
					<div class="card-body">
						<img class="img-thumbnail" style="max-height: 200px" src="<?= base_url('uploads/' . $m->gambar) ?>" />
						<h5 class="mt-3 text-success"><?= "Rp " . number_format($m->harga, 2, ',', '.') ?></h5>
						<p class="text-info">Stok : <?= $m->stok ?></p>
					</div>
					<div class="card-footer">
						<a href="<?= site_url('etalase/beli/' . $m->id) ?>" style="width:100%" class="btn btn-success">Beli</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>




<?= $this->endSection() ?>