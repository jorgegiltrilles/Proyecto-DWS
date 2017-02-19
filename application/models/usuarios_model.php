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
    		$q = $this->db->get('usuarios');

    		if ($q->num_rows()>0)
    		{
    			return true;
          return $q->result();
    		}else
    		{
    			return false;
    		}
    	}

   	//la función de Select * en sql
    public function selPerfil(){
        $query = $this->db->query("Select * from perfil");
        //retornamos todo los registros de la tabla perfil
        return $query->result();
    }

  public function selPerfilHeader($perfil){
        $this->db->select('*');    
        $this->db->from('perfil');
        $this->db->where('per_id' , $perfil);
       
        $query = $this->db->get();
        return $query->result();


       
    }

   
    


    //funcion para listar usuarios
    public function listUsuario(){
        $this->db->select('*');    
        $this->db->from('usuarios');
        $this->db->join('perfil', 'usuarios.perfil = perfil.per_id');
        $this->db->join('cliente', 'usuarios.cod_cliente = cliente.codigo_cliente');
        
        $query = $this->db->get();
        return $query->result();


       
    }

 //funcion para insertar usuario
    public function insertUsuario($idper, $nombre, $apellidos, $email, $password, $dni){
        
        $arrayDatos = array(
            'perfil' => $idper,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'email' => $email,
            'password' => $password,
            'dni' => $dni
        );

        $this->db->insert('usuarios', $arrayDatos);
        
    }

     public function deleteUsuario($id){        
        $this->db->where('usu_id', $id);
        $this->db->delete('usuarios');
    }

         
     
    public function usuario_por_nombre_contrasena($email, $contrasena){
          $this->db->select('*');
          $this->db->from('usuarios');
          $this->db->where('email', $email);
          $this->db->where('password', $contrasena);
          
          $consulta = $this->db->get();
          $resultado = $consulta->row();
           return $resultado;
   }

    public function editUsuario($id){
       $consulta = $this->db->query("SELECT * FROM usuarios u inner join perfil p on u.perfil= p.per_id WHERE u.usu_id = $id");
            return $consulta->result();
    }


    public function updateUsuario($txtUsuid,$txtPerid, $txtNombre, $txtApellidos, $txtEmail, $txtPassword,$txtDNI){
        $array = array(
            'perfil' => $txtPerid,
            'nombre' => $txtNombre,
            'apellidos' => $txtApellidos,
            'email' => $txtEmail,
            'password' => $txtPassword,
            'dni' => $txtDNI           
        );
        $this->db->where('usu_id', $txtUsuid);
        $this->db->update('usuarios',$array);
    }


    
   
}