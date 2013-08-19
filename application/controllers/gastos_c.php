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
		
		$data['rubros']=$this->carga_m->lista_rubros();
		$data['montos']=$this->carga_m->lista_montos();			
		$data['contenido']="contenidos/gastos_v"; /*Enviando los valores de vista*/	
		$data['title']='Control de Gastos por Rubros | AVARO';
		//echo '<pre>',print_r($data),'</pre>';	
		$this->load->view('principal',$data);
		
	}

}

/* End of file gastos_c.php */
/* Location: ./application/controllers/gastos_c.php */