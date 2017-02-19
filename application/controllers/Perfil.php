<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	

    public function index() {
     
     $data['email'] = $this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['dni'] =$this->session->userdata('dni');
     $data['fecha_alta'] =$this->session->userdata('fecha_alta');
     $data['perfil'] =$this->session->userdata('perfil');
     $data['per_nombre'] =$this->session->userdata('per_nombre');
     $data['titulo'] = 'Bienvenido';
     
     
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('perfil',$data);
     $this->load->view('plantilla/foother');
         
      	
		}
	}