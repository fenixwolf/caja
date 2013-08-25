
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=base_url()?>dist/css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="<?=base_url()?>dist/js/bootstrap.js" media="screen">
	<link rel="stylesheet" href="<?=base_url()?>dist/css/styles.css" media="screen">
	<link rel="stylesheet" href="<?=base_url()?>dist/css/font-awesome.min.css">
	<script src="<?=base_url()?>dist/js/jquery-2.0.3.min.js"></script>
	<script src="<?=base_url()?>dist/js/fechajquery.js"></script>
	<script>



	jQuery(function($){
   $("#fecha").mask("99-99-9999");
   //$('#monto').mask('99999,99');
  	});
	
  	</script>
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
			<div class="col-lg-5-offset-3">
				<?php $this->load->view($contenido);
				 ?>


			</div>
		</div>
	</div>


</body>
<footer>
	<div class="container" id="footer">
		<div class="row">
			<div class="col-lg-12">
				<?php $this->load->view('template/footer'); ?>
			</div>
		</div>
	</div>
</footer>

</html>