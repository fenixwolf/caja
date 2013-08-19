<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gastos_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carga_m');
		$this->load->model('totales_m');
	}

	public function index()
	{
		
		$data=$this->carga_m->lista_rubros();
		//echo $descripcion;die;
		if ($data==0) {
				$valores_gastos['listado_rubros']='';
			} while ($descripcion != NULL) {
				echo $descripcion;
			}

		$valores_gastos['contenido']="contenidos/gastos_v"; /*Enviando los valores de vista*/	
		$valores_gastos['title']='Control de Gastos por Rubros | AVARO';	
		$this->load->view('principal',$valores_gastos);
		
	}

}

/* End of file gastos_c.php */
/* Location: ./application/controllers/gastos_c.php */