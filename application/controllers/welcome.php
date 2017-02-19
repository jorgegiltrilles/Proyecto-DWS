<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	

    public function index() {
     $data['error']='';
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['perfil'] =$this->session->userdata('perfil');
     $data['titulo'] = 'Bienvenido';
     
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('escritorio',$data);
     $this->load->view('plantilla/foother');
         
      	
		}
	}