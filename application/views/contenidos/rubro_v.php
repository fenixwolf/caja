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
		echo form_label('Rubro', 'descripcion');
		echo form_input($descripcion);
		echo form_label('Abreviacion del Rubro','abreviacion');
		echo form_input($abreviacion);
		echo form_submit($enviar);
		echo form_reset($limpiar);
		echo form_close();

		 ?>
		</div>
</div>