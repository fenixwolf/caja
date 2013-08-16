<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carga_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carga_m');
		$this->load->model('totales_m');
	}

	public function index()

	{
	
		//Funcion de monto total de saldo// (Falta funcion sustraer gastos!!!)

		$saldo=$this->totales_m->saldo();
		if ($saldo>0) {
			$total = array('saldototal' =>"<div class='alert alert-success'>Usted posee <strong>$saldo</strong> Bs. en Caja Chica</div>" );			
		} elseif ($saldo==0) {
			$total = array('saldototal' =>"<div class='alert'>Su saldo es <strong>0</strong> bs</div>"  , );
		}else {
			$total = array('saldototal' =>"<div class='alert alert-danger'>Usted posee <strong>$saldo</strong> Bs. en Caja Chica</div>" , );			
		}	
	
		$this->load->view('welcome_message',$total);
		//echo $total['saldototal'];		
		}
		//Fin de la función suma total de saldo//

	public function carga()
	{
		//Imprime arreglos enviados//
	 	//date("d-m-Y, h:m:A", strtotime($registro['fecha_actualizacion']))
		$data = array(
			'monto'=> $this->input->post('monto') , 
			'fecha' => date('Y-m-d',strtotime($this->input->post('fecha'))) ,
			'detalles'=> $this->input->post('detalles'),
			);

		$salida=$this->carga_m->ingreso($data);

		if ($salida>1) {
			echo 'Error al Guardar los Datos';

		} else {

			$this->index();
			//echo $data['monto'];echo $data['fecha'];
		}
		
		//echo '<pre>',print_r($_POST),'</pre>';die;
	
	}

}

/* End of file c_carga.php */
/* Location: ./application/controllers/c_carga.php */