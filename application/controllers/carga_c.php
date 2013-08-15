<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carga_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carga_m');
	}

	public function index()

	{
		$contenidos = 'contenidos/carga_v';
		$cuerpo=$this->input->post($contenidos);
	
		$this->load->view('welcome_message');
				}

	public function carga()
	{
		//Imprime arreglos enviados//
	 	//date("d-m-Y, h:m:A", strtotime($registro['fecha_actualizacion']))
		$data = array(
			'monto'=> $this->input->post('monto') , 
			'fecha' => date('Y-m-d',strtotime($this->input->post('fecha'))) ,
			);

		$salida=$this->carga_m->ingreso($data);

		if ($salida>1) {
			echo 'Error al Guardar los Datos';

		} else {

			$this->load->index();
			//echo $data['monto'];echo $data['fecha'];
		}
		
		//echo '<pre>',print_r($_POST),'</pre>';die;
	
	}

}

/* End of file c_carga.php */
/* Location: ./application/controllers/c_carga.php */