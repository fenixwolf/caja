<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal_c extends CI_Controller {

	public function index()
	{
		$valor_vista['contenido']="contenidos/principal_v"; /*Enviando los valores de vista*/	
		$valor_vista['title']='Sistema de Control de Caja Chica | AVARO';	
		$this->load->view('principal',$valor_vista);
	}

}

/* End of file principal_c.php */
/* Location: ./application/controllers/principal_c.php */