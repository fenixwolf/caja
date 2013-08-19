<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carga_m extends CI_Model {

    function __construct(){
         parent::__construct();
    }
    
    public function ingreso($data){ 	
    	
       
      	$salida=$this->db->insert('t_ingreso', $data);
        //echo '<pre>',print_r($data),'</pre>';

        //echo '<pre>',print_r($cargar),'</pre>';die;
        //$this->db->insert('t_operacion', $cod_operacion);
    	return $salida;

    }

    public function egreso($data){     
        
       
        $salida=$this->db->insert('t_rubros', $data);
        //echo '<pre>',print_r($data),'</pre>';

        //echo '<pre>',print_r($cargar),'</pre>';die;
        //$this->db->insert('t_operacion', $cod_operacion);
        return $salida;

    }
    public function lista_rubros(){

/** **//** **//** **//** **//** **//** **//** **//** **//** **//** **/
        /*Como Demonios envío la lista de rubros a la vista??*/

        $this->db->select('descripcion');
        $rubros=$this->db->get('t_rubros');
        //echo $rubros->num_rows();die;


        if ($rubros->num_rows()>0) {

          foreach ($rubros->result() as $dato) {
              $arraydato=$descripcion =$dato;
              return $arraydato;
          }

        }

        
        } 

    }