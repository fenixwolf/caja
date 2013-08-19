<div class="row">
	<div class="col-lg-4 col-lg-offset-2">


		<?php 
		$form = array(
			'name' =>'form' ,
			'class'=>'form-inline', 
			);

		$monto = array(
			'name' =>'monto' , 
			'id'=>'monto',
			'class'=>'form-control',
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

		/*********IMPORTANTÍSIMO! CREAR UN DROPDOWN EN CODEIGNITER RECIBIENDO UNA LISTA-ARRAY*********/
		foreach ($rubros as $indice=>$arrayrubro) {
			$listarubros[$arrayrubro['cod_rubros']] = $arrayrubro['descripcion'];
			// Creación de una arreglo a partir de los datos traído para el dropdown!!
		};
		
		foreach ($montos as $indice=>$arraymonto) {
			$listamontos[$arraymonto['cod_ingreso']] = $arraymonto['monto'];
			// Creación de una arreglo a partir de los datos traído para el dropdown!!
		};
		//echo '<pre>',print_r($listarubros),'</pre>';



		echo form_open('gastos_c',$form);
		echo '<div class="form-group">';
			echo form_label('Monto del Egreso:', 'monto');
			echo form_input($monto);
		echo '</div>';
		echo '<div class="form-group">';
		echo form_label('Rubro asociado: ', 'rubros');
		echo form_dropdown('rubros', $listarubros);
		echo '</div>';
		echo '<div class="form-group">';
		echo form_label('Monto de ingreso asociado: ', 'montos');
		echo form_dropdown('montos', $listamontos);
		echo '</div>';
		echo '<div class="form-group">';			
		echo '<div id="botones">';
		echo form_submit($enviar);
		echo form_reset($limpiar);
		echo form_close();
		echo '</div>';
		
			 ?>
		
		</div>
		</div> 

		
</div>