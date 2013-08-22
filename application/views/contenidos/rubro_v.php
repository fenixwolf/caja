
<div class="row">
	<div class="col-lg-4 col-lg-offset-2">
		<?php 
		
		$form= array(			
			'class' =>"form-inline",
			);
		$descripcion = array(
			'name' =>'rubro' ,
			'placeholder' =>'Tipo de Rubo de Egreso',
			'class'=>'form-control',
			'value'=>set_value('rubro'),
			);
		$abreviacion = array(
			'name' =>'abreviacion' ,
			 'placeholder'=>'simplificacion del rubro (Ejem: TAX para Taxi)',
			 'class'=>'form-control',
			 'value'=>set_value('abreviacion'),
			);
		$enviar = array(
			'name' =>'registrar' ,
			'value'=>'registrar',
			'class'=>'btn btn-primary', 
			);
		$limpiar = array(
			'name' =>'limpiar' ,
			'value'=>'Limpiar',
			'class'=>'btn btn-warning', 
			);



		echo form_open('rubro_c/validar',$form);
		echo '<div class="form-group">';
		echo form_label('Rubro', 'descripcion');
		echo form_input($descripcion);
		echo '<div class="form-group">';
		echo form_label('Abreviacion del Rubro','abreviacion');
		echo form_input($abreviacion);
		echo '<div class="form-group">';
		echo validation_errors();
		?>
		<div id="botones">
			<?php 
			echo form_submit($enviar);
		echo form_reset($limpiar);
		echo form_close();
			 ?>
		
		</div>
		</div> 
<div class="row" class="table-responsive">
	<div class="col-lg-6">
		<table class="table table-striped">	
		<tr>
			<td>RUBRO</td>
			<td>ABREVIATURA</td>
		</tr>
		</table>

	</div>
</div>
		
</div>