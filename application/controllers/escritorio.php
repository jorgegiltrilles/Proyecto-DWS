<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {

	 public function __construct()
    {
        parent:: __construct();
        $this->load->model('usuarios_model');
        if (!$this->session->userdata("login")){
             redirect(base_url());
            }
    }
    

    public function index() {
     $data['mensaje']='';
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['titulo'] = 'Escritorio';
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('escritorio',$data);
     $this->load->view('plantilla/foother');


         
      	}
		
	}