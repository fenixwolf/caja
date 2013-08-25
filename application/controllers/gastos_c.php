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
		
		$data['lista_rubros_gastos']=$this->carga_m->lista_rubros_gastos();
		$data['rubros']=$this->carga_m->lista_rubros();
		$data['fecha']=$this->carga_m->lista_montos();			
		$data['contenido']="contenidos/gastos_v"; /*Enviando los valores de vista*/	
		$data['title']='Control de Gastos por Rubros | AVARO';
		//echo '<pre>',print_r($data),'</pre>';	
		$this->load->view('principal',$data);
		
	}

	public function carga()
	{
		//Imprime arreglos enviados//
	 	//date("d-m-Y, h:m:A", strtotime($registro['fecha_actualizacion']))
		$data = array(
			'gasto'=> $this->input->post('monto') ,
			'cod_rubros'=> $this->input->post('rubros') ,
			'cod_ingreso'=> $this->input->post('mes_monto') ,
			'descripcion'=> $this->input->post('detalles') ,
			);

		$salida=$this->carga_m->gastos($data);

		if ($salida>1) {
			echo 'Error al Guardar los Datos';

		} else {

			$this->index();
			//echo $data['monto'];echo $data['fecha'];
		}
		
		//echo '<pre>',print_r($_POST),'</pre>';die;
	
	}

}

/* End of file gastos_c.php */
/* Location: ./application/controllers/gastos_c.php */