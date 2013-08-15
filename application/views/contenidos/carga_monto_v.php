<div>
	<div class="row">
		<div class="col-lg-9">
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
			'id'=>'monto',
		 );
		$fecha = array(
			"name"=>"fecha",
			"type"=>"date",
			'id'=>'fecha',
			"value"=> date('d-m-Y'),					
			'placeholder' =>"Fecha de Operación" ,
			'class' =>"form-control",
		 );
		/*$descripcion = array(
			'name' => 'descripcion',
			'type' => '',
			'placeholder' =>'Descripción de la Operación' ,
			'' => , 
			);*/

		

		echo form_open("carga_c",$form);
		echo form_label('Monto a Cargar', 'monto_cargado');
		echo form_input($monto);
		echo form_label("Fecha de Operación","fecha");
		echo form_input($fecha);
		echo form_label('Descripción','descripcion')
		?>
		<textarea class='form-control' name="descripcion" id="" cols="3"></textarea>		
		</div>
	</div>
		<?php		
		echo form_submit($enviar);
		echo form_reset($limpiar);

		echo form_close();
 ?>
</div>