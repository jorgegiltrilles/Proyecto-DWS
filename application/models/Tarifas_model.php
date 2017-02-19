<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarifas_model extends CI_Model {
	

       public function __construct() 
       {
       	parent::__construct();
                  
    	}


//funcion para listar tarifas

    public function listaTarifas($id){
    	 
    	 $consulta = $this->db->query("SELECT * FROM cliente c,tarifas t,materiales where codigo_cliente = $id and patron=codigo_tarifa and (mat_cliente=$id or mat_cliente=0)");
     	
       return $consulta->result();
    }

     public function Tarifas(){
       $query = $this->db->query("SELECT * FROM tarifas");
       return $query->result();
    }

}