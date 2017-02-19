<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiales_model extends CI_Model {
	

       public function __construct() 
       {
       	parent::__construct();
                  
    	}


//funcion para listar usuarios
    public function listMateriales($cliente){
    	 if ($this->session->userdata('perfil')==1){

        $this->db->select('*');    
        $this->db->from('materiales');
        $this->db->join('cliente', 'materiales.mat_cliente = cliente.codigo_cliente' , 'LEFT');
        $query = $this->db->get();
        return $query->result();


     		
     		  
 		  }
 		  else{
 			
 		  	$query = $this->db->query("SELECT * FROM materiales,cliente where codigo_cliente = $cliente and (mat_cliente=$cliente or mat_cliente=0)");
    		return $query->result();
 		  }
    }
}