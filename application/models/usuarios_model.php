<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	

       public function __construct() 
       {
       	parent::__construct();
                  
    	}

    	public function login($email,$password)
    	{
    		/*nos devuelve una fila si existe*/
    		$this->db-> where('email',$email);
    		$this->db-> where('password',$password);
    		$q = $this->db-> get('usuarios');

    		if ($q->num_rows()>0)
    		{
    			return true;
          return $q->result();
    		}else
    		{
    			return false;
    		}
    	}
   	

   
}