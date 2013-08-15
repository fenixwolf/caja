<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operacion_c extends CI_Controller {
	public function __construct()
			{
				parent::__construct();
				$this->load->model('operacion_m');
			}		
	public function index()
	{	
		$this->load->view('contenidos/carga_operacion_v');
		}
	public function carga()
	{
		//Imprime arreglos enviados//
	 	//date("d-m-Y, h:m:A", strtotime($registro['fecha_actualizacion']))
		$data = array(
			
			);

		$salida=$this->Operacion_m->ingreso($data);

		if ($salida>1) {
			echo 'Error al Guardar los Datos';

		} else {

			$this->load->index();
			//echo $data['monto'];echo $data['fecha'];
	}

}
}

/* End of file operacion_c.php */
/* Location: ./application/controllers/operacion_c.php */