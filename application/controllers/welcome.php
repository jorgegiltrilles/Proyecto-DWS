<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	

    public function index() {
    
     $data['email'] =$this->session->userdata('email');
     $data['titulo'] = 'Bienvenido';
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('charts');
     $this->load->view('plantilla/foother');
         
      	
		}
	}