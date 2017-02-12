<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
    $this->load->model('usuarios_model');
	}


    public function index() {
      $data['email'] =$this->session->userdata('email');
      $data['titulo'] = 'Usuarios';
      $data['selPerfil'] = $this->usuarios_model->selPerfil();
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
            $txtDNI = $datos['txtDNI'];
            $this->usuarios_model->insertUsuario($txtId, $txtNombre, $txtApellidos, $txtCorreo, $txtDNI);

            redirect('usuarios');
        }        
    }    
    public function delete($id = NULL){
        if($id != NULL){
            $this->usuarios_model->deleteUsuario($id);
            redirect('usuarios');
        }
    }
    public function edit($id = NULL){
        if($id != NULL){
            //mostrar datos
            $data['datosUsuario'] = $this->usuarios_model->editUsuario($id);
            $data['selPerfil'] = $this->usuarios_model->selPerfil();
            $data['email'] =$this->session->userdata('email');

            $this->load->view('plantilla/header',$data);
            $this->load->view('plantilla/navbar');
            $this->load->view('usuarios/edita');
            $this->load->view('plantilla/foother');
            
        }else{
            //regresar a index enviar parametro
            redirect('usuarios');
        }
        
    }

    public function updateUsuario($txtUsuid,$txtPerid, $txtNombre, $txtApellidos, $txtEmail, $txtDNI){
        $array = array(
            'per_id' => $txtPerid,
            'nombre' => $txtNombre,
            'apellidos' => $txtApellidos,
            'email' => $txtEmail,
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
            $txtDNI= $datos['txtDNI'];
            $this->usuarios_model->updateUsuario($txtUsuid,$txtPerid, $txtNombre, $txtApellidos, $txtEmail, $txtDNI);
            redirect('usuarios');
        }

    }



}