<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Totales_m extends CI_Model {

	public function index(){

	}	

	public function saldo(){
		$this->db->select_sum('monto');
		$consulta = $this->db->get('t_ingreso');
		if ($consulta->num_rows() > 0)
			{
   			foreach ($consulta->result() as $row)
   			{
      		$saldo=$row->monto;
      		return $saldo;      
   			}
			}
		} 
	public function egreso(){
		$this->db->select_sum('gasto');
		$consulta = $this->db->get('t_gastos');
		if ($consulta->num_rows() > 0)
			{
   			foreach ($consulta->result() as $row)
   			{
      		$egreso=$row->gasto;
      		return $egreso;      
   			}
			} 		
	}


}

/* End of file totales_m.php */
/* Location: ./application/models/totales_m.php */