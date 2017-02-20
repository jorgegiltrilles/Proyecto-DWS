<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
        $this->load->model('usuarios_model');
        $this->load->model('usuarios_model');
            if (!$this->session->userdata("login")){
                 redirect(base_url());
                }
	}


    public function index() {

      $data['email'] =$this->session->userdata('email');
      $data['titulo'] = 'Usuarios';
      $data['nombre'] =$this->session->userdata('nombre');
      $data['apellidos'] =$this->session->userdata('apellidos');
      $data['selPerfil'] = $this->usuarios_model->selPerfil();
      $data['selCliente'] = $this->usuarios_model->selCliente();
      $data['listaUsuario'] = $this->usuarios_model->listUsuario();
      
      $this->load->view('plantilla/header',$data);
      $this->load->view('plantilla/navbar');
      $this->load->view('usuarios/usuarios');
      $this->load->view('plantilla/foother');
     }
 public function insert(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtId = $datos['txtIdper'];
            $txtNombre = $datos['txtNombre'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCorreo = $datos['txtEmail'];
            $txtPassword = $datos['txtPassword'];
            $txtDNI = $datos['txtDNI'];
            $txtCliente = $datos['txtCliente'];
            $this->usuarios_model->insertUsuario($txtId, $txtNombre, $txtApellidos, $txtCorreo, $txtPassword,$txtDNI,$txtCliente);

            redirect('usuarios');
        }        
    }    
    public function delete($id){

       if($id != NULL && $id !=1){
            $this->usuarios_model->deleteUsuario($id);
            redirect('usuarios');
        }
                 
           redirect('errordelete');
        
    }
    public function edit($id){
        if($id != NULL){
            //mostrar datos
            $data['datosUsuario'] = $this->usuarios_model->editUsuario($id);
            $data['selPerfil'] = $this->usuarios_model->selPerfil();
            $data['selCliente'] = $this->usuarios_model->selCliente();
            $data['email'] =$this->session->userdata('email');
            $data['nombre'] =$this->session->userdata('nombre');
            $data['apellidos'] =$this->session->userdata('apellidos');

            $this->load->view('plantilla/header',$data);
            $this->load->view('plantilla/navbar');
            $this->load->view('usuarios/edita');
            $this->load->view('plantilla/foother');
            
        }else{
            //regresar a index enviar parametro
            redirect('usuarios');
        }
        
    }

    public function updateUsuario($txtUsuid,$txtPerid, $txtNombre, $txtApellidos, $txtEmail,$txtPassword ,$txtDNI,$txtCliente){
        $array = array(
            'per_id' => $txtPerid,
            'nombre' => $txtNombre,
            'apellidos' => $txtApellidos,
            'email' => $txtEmail,
            'password' => $txtPassword,
            'codigo_cliente' => $txtCliente,
            'dni' => $txtDNI           
        );
        $this->db->where('usu_id', $txtUsuid);
        $this->db->update('usuarios',$array);
    }

    public function update(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtUsuid = $datos['txtUsuid'];
            $txtPerid = $datos['txtPerid'];
            $txtNombre = $datos['txtNombre'];
            $txtApellidos = $datos['txtApellidos'];
            $txtEmail = $datos['txtEmail'];
            $txtCliente = $datos['txtCliente'];
            $txtPassword = $datos['txtPassword'];
            $txtDNI= $datos['txtDNI'];
            $this->usuarios_model->updateUsuario($txtUsuid,$txtPerid, $txtNombre, $txtApellidos, $txtEmail, $txtPassword,$txtDNI,$txtCliente);
            redirect('usuarios');
        }

    }



}