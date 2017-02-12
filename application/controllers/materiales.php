<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiales extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('materiales_model');
  }
	

    public function index() {
    	
     $data['email'] =$this->session->userdata('email');
     $data['titulo'] = 'Clientes';
     $data['listaMateriales'] = $this->materiales_model->listMateriales();
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
      $this->load->view('materiales',$data);
     $this->load->view('plantilla/foother');
         
      	
		}

	}