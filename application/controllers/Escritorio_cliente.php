<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio_cliente extends CI_Controller {
	

    public function index() {
     $data['mensaje']='';
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['titulo'] = 'Escritorio';
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar_cliente');
     $this->load->view('escritorio',$data);
     $this->load->view('plantilla/foother');


         
      	}
		
	}