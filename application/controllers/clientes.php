<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('clientes_model');
     $this->load->model('tarifas_model');
  }
	

    public function index() {
    	
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['titulo'] = 'Clientes';
     $data['listaClientes'] = $this->clientes_model->listClientes();
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
      $this->load->view('clientes/clientes',$data);
     $this->load->view('plantilla/foother');
         
      	
		}

    public function tarifas($id_cliente){
        if($id_cliente != NULL){
            //mostrar datos
           
            $data['listaTarifas'] = $this->tarifas_model->listaTarifas($id_cliente);
            $data['email'] =$this->session->userdata('email');
            $data['nombre'] =$this->session->userdata('nombre');
            $data['apellidos'] =$this->session->userdata('apellidos');

            $this->load->view('plantilla/header',$data);
            $this->load->view('plantilla/navbar');
            $this->load->view('clientes/tarifas',$data);
            $this->load->view('plantilla/foother');
            
        }else{
            //regresar a index enviar parametro
            redirect('clientes/clientes');
        }
        
    }

	}