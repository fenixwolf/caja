
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema AVARO 1.0</title>
	<link rel="stylesheet" href="<?=base_url()?>dist/css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="<?=base_url()?>dist/js/bootstrap.js" media="screen">
	<link rel="stylesheet" href="<?=base_url()?>dist/css/styles.css" media="screen">
</head>
<header>
	<div class="container">
		<div class="row">
			<div class="colg-lg-12">
				<?php $this->load->view('template/header'); ?>
			</div>
		</div>
	</div>
</header>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<?php $this->load->view('contenidos/carga_v'); ?>
			</div>
		</div>
	</div>


</body>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php $this->load->view('template/footer'); ?>
			</div>
		</div>
	</div>
</footer>
<script src="<?=base_url()?>dist/js/jquery-2.0.3.min.js"></script>
</html>