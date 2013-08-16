<div class="row">
		<div class="col-lg-3 col-lg-offset-2">
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
			//"type"=>"date", //**Finción Incompatible con Google Chrome ya que choca con el JqueryMask de fecha**//
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

		//Apertura del formulario de ingreso de saldo//

		echo form_open("carga_c/carga",$form);
		echo form_label('Monto a Cargar', 'monto_cargado');
		echo form_input($monto);
		echo form_label("Fecha de Operación","fecha");
		echo form_input($fecha);
		echo form_label('Detalles','detalles');		
		?>
		<textarea class='form-control' name="detalles" id="" cols="2"></textarea>	
			<?php		
		echo form_submit($enviar);
		echo form_reset($limpiar);

		echo form_close();
		//fin del formulario de ingreso de datos//
			?>	
		</div>
		<div class="col-lg-4>">
			
		</div>		
		<div class="col-lg-3 col-lg-offset-3">
 		<?php 
 	//Rebibe $saldototal del array $saldo en el controlador carga_c(index)
		echo $saldototal; //<-----
 	 	?>
 		</div>
	</div>