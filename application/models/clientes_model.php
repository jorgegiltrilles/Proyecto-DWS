<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
	

       public function __construct() 
       {
       	parent::__construct();
                  
    	}


//funcion para listar clientes
    public function listClientes(){
       $query = $this->db->query("SELECT * FROM cliente");
       return $query->result();
    }



    //funcion para insertar clientes
    public function insertCliente($txtRazonSocial, $txtDireccion, $txtCif, $txtPoblacion, $txtProvincia,$txtCodigoPostal,$txtTarifa){
        
        $arrayDatos = array(
            'razonsocial' => $txtRazonSocial,
            'direccion' => $txtDireccion,
            'cif' => $txtCif,
            'poblacion' => $txtPoblacion,
            'provincia' => $txtProvincia,
            'codigopostal' => $txtCodigoPostal,
            'patron' => $txtTarifa
           
        );

        $this->db->insert('cliente', $arrayDatos);
        
    }

    public function deleteCliente($id){        
        $this->db->where('codigo_cliente', $id);
        $this->db->delete('cliente');
    }

     public function editCliente($id){
       $consulta = $this->db->query("SELECT * FROM cliente WHERE codigo_cliente = $id");
            return $consulta->result();
    }

     public function updateCliente($txtIdCliente, $txtRazonSocial,  $txtDireccion, $txtCif, $txtPoblacion,$txtProvincia,$txtCodigoPostal,$txtTarifa){
        $array = array(
            'codigo_cliente' => $txtIdCliente,
            'razonsocial' => $txtRazonSocial,
            'direccion' => $txtDireccion,
            'cif' => $txtCif,
            'poblacion' => $txtPoblacion,
            'provincia' => $txtProvincia,
            'codigopostal' => $txtCodigoPostal,
            'patron' => $txtTarifa           
        );
        $this->db->where('codigo_cliente', $txtIdCliente);
        $this->db->update('cliente',$array);
    }
}