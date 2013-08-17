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
		$cod = array(
			"name"=>"cod_tipo",					
			'placeholder' =>"Número de Código" ,
			'class' =>"form-control",
			'id'=>'cod_tipo',
		 );
		$abre = array(
			"name"=>"abreviatura",
			"type"=>"date",
			'id'=>'abreviatura',								
			'placeholder' =>"Simplificación" ,
			'class' =>"form-control",
					 );
		$descripcion = array(
			'name' =>'descripcion' , 
			'type' =>'descripcion' ,
			);
		/*$descripcion = array(
			'name' => 'descripcion',
			'type' => '',
			'placeholder' =>'Descripción de la Operación' ,
			'' => , 
			);*/

		

		echo form_open("operacion_c",$form);
		echo form_label('Número Código', 'cod_operacion');
		echo form_input($cod);
		echo form_label("Abreviatura","abreviatura");
		echo form_input($abre);
		echo form_label("Descripción","descripción");
		echo form_input($descripcion);
				
		echo form_submit($enviar);
		echo form_reset($limpiar);
		echo form_close();
 ?>
</div>