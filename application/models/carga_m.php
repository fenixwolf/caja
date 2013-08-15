<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carga_m extends CI_Model {

    function __construct(){
         parent::__construct();
    }
    
    public function ingreso($data){
    	
    	$resultado=$data['monto']+$data['fecha'];
      	
    	return $resultado;

    }

    }