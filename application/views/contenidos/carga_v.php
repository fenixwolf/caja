<div>
		<?php 
		$form= array(			
			'class' =>"form-inline",
			);
		$limpiar = array(
			"name"=>"limpiar",
			"value"=>"Limpiar",			
			'class' =>"btn btn-warning",
		 );
		$enviar = array(
			"name"=>"enviar",
			"value"=>"Enviar",			
			'class' =>"btn btn-primary",
		 );
		$monto = array(
			"name"=>"monto",					
			'placeholder' =>"Monto de Operación" ,
			'class' =>"form-control",
		 );
		$fecha = array(
			"name"=>"fecha",
			"type"=>"date",					
			'placeholder' =>"Fecha de Operación" ,
			'class' =>"form-control",
		 );

		

		echo form_open("carga_c/carga",$form);
		echo form_label('Monto a Cargar', 'monto_cargado');
		echo form_input($monto);
		echo form_label("Fecha de Operación","fecha");
		echo form_input($fecha);
		echo form_submit($enviar);
		echo form_reset($limpiar);

		echo form_close();
 ?>
</div>