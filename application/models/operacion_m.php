<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operacion_m extends CI_Model {
	function __construct(){
         parent::__construct();
   	 }
	public function ingreso($data){ 	
    	
       
      	$salida=$this->db->insert('t_operacion', $data);
        //echo '<pre>',print_r($data),'</pre>';

        //echo '<pre>',print_r($cargar),'</pre>';die;
        //$this->db->insert('t_operacion', $cod_operacion);
    	return $salida;

}
}

/* End of file operacion_m.php */
/* Location: ./application/models/operacion_m.php */