<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
	

       public function __construct() 
       {
       	parent::__construct();
                  
    	}


//funcion para listar usuarios
    public function listClientes(){
       $query = $this->db->query("SELECT * FROM cliente");
       return $query->result();
    }
}