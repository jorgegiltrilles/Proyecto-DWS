<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errordelete extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
    $this->load->model('usuarios_model');
    }
	

    public function index() {
 
      $data['email'] =$this->session->userdata('email');
      $data['nombre'] =$this->session->userdata('nombre');
      $data['apellidos'] =$this->session->userdata('apellidos');
      $data['selPerfil'] = $this->usuarios_model->selPerfil();
      $data['listaUsuario'] = $this->usuarios_model->listUsuario();
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('usuarios/usuarios');
     $this->load->view('alertDelete');
     $this->load->view('plantilla/foother');


         
      	}
		
	}