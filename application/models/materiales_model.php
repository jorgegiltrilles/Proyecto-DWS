<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiales_model extends CI_Model {
	

       public function __construct() 
       {
       	parent::__construct();
                  
    	}


//funcion para listar usuarios
    public function listMateriales(){
       $query = $this->db->query("SELECT * FROM materiales");
       return $query->result();
    }
}