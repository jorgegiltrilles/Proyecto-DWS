<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiales extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('materiales_model');
    $this->load->model('usuarios_model');
        if (!$this->session->userdata("login")){
             redirect(base_url());
            }
  }
	

  

    public function index() {
    	
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $cliente =$this->session->userdata('cod_cliente');
     $data['titulo'] = 'Clientes';
     $data['listaMateriales'] = $this->materiales_model->listMateriales($cliente);
         if ($this->session->userdata('perfil')==1){
              $this->load->view('plantilla/header',$data);
              $this->load->view('plantilla/navbar');
              $this->load->view('materiales/materiales',$data);
              $this->load->view('plantilla/foother');

           }
         else{
              $this->load->view('plantilla/header',$data);
              $this->load->view('plantilla/navbar_cliente');
              $this->load->view('materiales/materiales',$data);
              $this->load->view('plantilla/foother');


           }
     
         
      	
		}

	}