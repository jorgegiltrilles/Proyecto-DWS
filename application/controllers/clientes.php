<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('clientes_model');
  }
	

    public function index() {
    	
     $data['email'] =$this->session->userdata('email');
     $data['titulo'] = 'Clientes';
     $data['listaClientes'] = $this->clientes_model->listClientes();
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
      $this->load->view('clientes',$data);
     $this->load->view('plantilla/foother');
         
      	
		}

	}