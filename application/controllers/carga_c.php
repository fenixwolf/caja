<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carga_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carga_m');
	}

	public function index()

	{
	
	
	}

	public function carga()
	{
		//$this->load->model('carga_monto');
		//Imprime arreglos enviados//
		$data = array(
			'monto' =>$this->input->post("monto") , 
			'fecha' =>$this->input->post("fecha") ,

			);

		$salida=$this->carga_m->ingreso($data);
		echo $salida;
		//echo "salus";
		//echo '<pre>',print_r($_POST),'</pre>';die;
		/**echo '<pre>',print_r($_POST),'</pre>';die;
		
			$monto =>$this->input->post('monto');
			$fecha =>$this->input->post('fecha');

	$this->'carga_monto'->enviar_monto($mont, $fechas);*/

	
	}

}

/* End of file c_carga.php */
/* Location: ./application/controllers/c_carga.php */