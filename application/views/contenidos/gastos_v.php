<div class="row">
	<div class="col-lg-4 col-lg-offset-2">


		<?php 
		$form = array(
			'role' =>'form' ,
			'class'=>'form-horizontal', 
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
		
				
		foreach ($fecha as $indice=>$arraymonto) {
			$fecha_completa=date('m',strtotime($arraymonto['fecha']));
			//echo $fecha_completa; 

			//*FUNCION LISTADO DE MESES*//
			if ($fecha_completa=="01") {
				$mes="ENERO";
			}
			elseif ($fecha_completa=="02") {
				$mes="FEBRERO";
			}
			elseif ($fecha_completa=="03") {
				$mes="MARZO";
			}
			elseif ($fecha_completa=="04") {
				$mes="ABRIL";
			}
			elseif ($fecha_completa=="05") {
				$mes="MAYO";
			}
			elseif ($fecha_completa=="06") {
				$mes="JUNIO";
			}
			elseif ($fecha_completa=="07") {
				$mes="JULIO";
			}
			elseif ($fecha_completa=="08") {
				$mes="AGOSTO";
			}
			elseif ($fecha_completa=="09") {
				$mes="SEPTIEMBRE";
			}
			elseif ($fecha_completa=="10") {
				$mes="OCTUBRE";
			}
			elseif ($fecha_completa=="11") {
				$mes="NOVIEMBRE";
			}           
			elseif ($fecha_completa=="12") {
			 	$mes="DICIEMBRE";
			}; 
			///**FIN DE LA FUNCION LISTADO DE MESES**///

			//*->lA variable $mes contiene el mes en curso */

			$listamontos[$arraymonto['cod_ingreso']] = $mes;
			// Creación de una arreglo a partir de los datos traído para el dropdown!!
		};
		//echo '<pre>',print_r($listamontos),'</pre>';die;



		echo form_open('gastos_c/carga',$form);
		
		echo '<div class="form-group">';
		echo '<div class="col-lg-6 col-lm-2">';
		echo form_label('Monto del Egreso:', 'monto');
		echo '</div>';
		echo form_input($monto);
		echo '</div>';

		echo '<div class="form-group">';
		echo '<div class="col-lg-6 col-lm-2">';
		echo form_label('Rubro asociado: ', 'rubros');
		echo '</div>';
		echo form_dropdown('rubros', $listarubros);
		echo '</div>';

		echo '<div class="form-group">';
		echo '<div class="col-lg-6">';
		echo form_label('Monto de ingreso asociado: ', 'montos');
		echo '</div>';
		echo form_dropdown('mes_monto', $listamontos,$mes);
		echo '</div>';
		echo form_label('Detalles','detalles');		
		?>
		<textarea class='form-control' name="detalles" id="" cols="2"></textarea>
		<div id="botones">
			<?php	

		echo '<div class="form-group">';			
		echo '<div id="botones" class="col-lg-6">';
		echo form_submit($enviar);
		echo form_reset($limpiar);
		echo form_close();
		echo '</div>';
		
			 ?>
		
		</div>
		</div>
	




		
</div>
<div class="row" class="table table-responsive">
	<div class="col-lg-4 col-lg-offset-2 cl-md-4">
		<table class="table table-hover">
			<h4>Últimos registros</h4>
			<tr>
				<th>1</th>
				<th>2</th>
			</tr>
			<tr>
				<td>Campo1</td>
				<td>Campo2</td>
			</tr>
		</table>	




	</div>
</div>