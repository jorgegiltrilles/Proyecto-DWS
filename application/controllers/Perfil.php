<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
    $this->load->model('usuarios_model');
    }
	

    public function index() {
     
     $data['email'] = $this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['dni'] =$this->session->userdata('dni');
     $data['per_id'] =$this->session->userdata('perfil');
     $perfil = $this->session->userdata('perfil');
     $data['selPerfilHeader'] = $this->usuarios_model->selPerfilHeader($perfil);
     $data['fecha_alta'] =$this->session->userdata('fecha_alta');

    
     if ($this->session->userdata('perfil')==1){
        $this->load->view('plantilla/header',$data);
        $this->load->view('plantilla/navbar');
        $this->load->view('perfil',$data);
        $this->load->view('plantilla/foother');
         }
    else{
        $this->load->view('plantilla/header',$data);
        $this->load->view('plantilla/navbar_cliente');
        $this->load->view('perfil',$data);
        $this->load->view('plantilla/foother');
        }
      	
		}
	}