<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- <?php echo session()->get('username'); ?> -->

<head>
	<title>Mitre Kain | Toko Grosir Kain Kualitas Premium </title>
</head>

<style>
	.colcol {
		position: relative;
		width: 20%;
	}

	.image {
		display: block;
		width: 100%;
		height: auto;
	}

	.overlay {
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;

		/* opacity: 0.5; */
		overflow: hidden;
		width: 100%;
		height: 0;
		transition: .5s ease;
	}

	.colcol:hover .overlay {
		height: 100%;
	}

	.text {
		color: white;
		font-size: 28px;
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		text-align: center;
	}
</style>


<section class="m-banner ">
	<div class="Banner__StyledBanner-dhqtp2-0 gSbnCT wrap wrap--no-left-offset wrap--full-width">
		<div class=" m-banner__wrapper row-no-gutter">
			<div style="position:relative;width:100%;font-size:0;background:rgba(245, 238, 225, 0.8);padding-bottom:23.4%"><img alt="Banner image" style="position: absolute; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 1;" src="https://dj7u9rvtp3yka.cloudfront.net/layout/banners/promotions/B2BIDN_OCT19/InsideBanner_web-4p267-w1920p0-h450p0-id_v7.jpg">
			</div>
		</div>
	</div>
</section>
<br><br>

<section data-section-id="1498163293234" data-section-type="featured-content-section" class="text-center">
	<div class="page-width">
		<div class="grid">
			<div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">
				<div class="rte">

					<h2>⁘</h2>
					<h5 class="p-2">kami hadir menyediakan kain terbaik untuk anda dengan pembelian secara mudah dan cepat</h5>
					<h2>⁘</h2>
				</div>
			</div>
		</div>
</section>
<br>

<div class="container" data-aos="fade-left">
	<h3 class="textJudul text-center" style="font-weight: 600;">Kain terlaris 2021</h3>
	<div class="row ">
		<div class="colcol col-sm text-center p-4">

			<img src="<?= base_url('img/2.png') ?>" alt="Avatar" class="image">
			<div class="overlay">
				<div class="text">VALENCIA</div>
			</div>
		</div>
		<div class="colcol col-sm text-center p-4">

			<img src="<?= base_url('img/3.png') ?>" alt="Avatar" class="image">
			<div class="overlay">
				<div class="text">CREPE</div>
			</div>
		</div>
		<div class="colcol col-sm text-center p-4 ">

			<img src="<?= base_url('img/4.png') ?>" alt="Avatar" class="image">
			<div class="overlay">
				<div class="text">CERUTI</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="container">
	<div class="row ">
		<div class="colcol col-sm text-center p-4">

			<img src="<?= base_url('img/2.png') ?>" alt="Avatar" class="image">
			<div class="overlay">
				<div class="text">VALENCIA</div>
			</div>
		</div>
		<div class="colcol col-sm text-center p-4">

			<img src="<?= base_url('img/3.png') ?>" alt="Avatar" class="image">
			<div class="overlay">
				<div class="text">CREPE</div>
			</div>
		</div>
		<div class="colcol col-sm text-center p-4">

			<img src="<?= base_url('img/4.png') ?>" alt="Avatar" class="image">
			<div class="overlay">
				<div class="text">CERUTI</div>
			</div>
		</div>
	</div>
</div> -->




<?= $this->endSection() ?>