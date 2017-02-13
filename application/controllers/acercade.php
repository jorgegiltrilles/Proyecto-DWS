<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acercade extends CI_Controller {
	

    public function index() {
    
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['titulo'] = 'Acerca de';
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('acercade');
     $this->load->view('plantilla/foother');
         
      	
		}
	}