<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rubro_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('carga_m');
	}

	public function index()
	{		
			$contenido = array(
			'title' =>'Ingreso de Rubro de Egresos' ,
			'contenido'=>'contenidos/rubro_v',
			'rubros'=>$this->carga_m->lista_rubros(),			
			);
			//echo '<pre>',print_r($contenido),'</pre>';die;

		$this->load->view('principal', $contenido);
	}
	public function _carga()
	{
		
		$this->load->model('carga_m');		
		//Imprime arreglos enviados//
	 	
		$data = array(
			'abreviacion'=> $this->input->post('abreviacion') , 
			'descripcion'=> $this->input->post('rubro'),
			);

		$salida=$this->carga_m->egreso($data);/*Esta operacion dará 1 o 0 para $salida*/

		if ($salida>1) {
			echo 'Error al Guardar los Datos';

		} else {

			redirect('rubro_c'); /*La redirección permite cargar la página sin los datos anteriores por el
									"set_value()"*/	
		}
		
		//echo '<pre>',print_r($_POST),'</pre>';die;
	
	}
	public function validar(){
		//echo "prueba de Validar";
		$this->form_validation->set_rules('abreviacion', 'Abreviación del Rubro', 'trim|required|xss_clean');
		$this->form_validation->set_message("required","Debe asignar un valor para <strong>%s</strong>");
		$this->form_validation->set_rules('rubro', 'Tipo de rubro', 'trim|required|xss_clean');
		
		if ($this->form_validation->run()==FALSE) {
			$this->index();/*Si la validacion da FALSA se dirije al index en donde
							se cargan los contenidos incluyendo el set_value	*/
		} 
		else {

			$this->_carga(); /*Si la validacion da TRUE continua en la funcion "_carga" */

		}

	}
}

/* End of file rubro_c.php */
/* Location: ./application/controllers/rubro_c.php */