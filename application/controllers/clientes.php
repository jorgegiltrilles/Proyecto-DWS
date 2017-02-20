<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('clientes_model');
    $this->load->model('tarifas_model');
    $this->load->model('usuarios_model');
        if (!$this->session->userdata("login")){
             redirect(base_url());
            }
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

    public function mantenerClientes() {
      
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
     $data['titulo'] = 'Clientes';
     $data['listaClientes'] = $this->clientes_model->listClientes();
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
      $this->load->view('clientes/editar_clientes',$data);
     $this->load->view('plantilla/foother');
         
        
    }


    public function insertarCliente() {
      
     $data['email'] =$this->session->userdata('email');
     $data['nombre'] =$this->session->userdata('nombre');
     $data['apellidos'] =$this->session->userdata('apellidos');
   
    
     $this->load->view('plantilla/header',$data);
     $this->load->view('plantilla/navbar');
     $this->load->view('clientes/insert_clientes');
     $this->load->view('plantilla/foother');
         
        
    }


    public function insert(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtRazonSocial = $datos['txtRazonSocial'];
            $txtDireccion = $datos['txtDireccion'];
            $txtCif= $datos['txtCif'];
            $txtPoblacion = $datos['txtPoblacion'];
            $txtProvincia = $datos['txtProvincia'];
            $txtCodigoPostal = $datos['txtCodigoPostal'];
            $txtTarifa = $datos['txtTarifa'];
                      
            $this->clientes_model->insertCliente($txtRazonSocial, $txtDireccion, $txtCif, $txtPoblacion, $txtProvincia,$txtCodigoPostal,$txtTarifa);

            redirect('clientes');
        }        
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

    public function delete($id){

       if($id != NULL){
            $this->clientes_model->deleteCliente($id);
            redirect('clientes');
        }
                 
    }

     public function edit($id){
        if($id != NULL){
            //mostrar datos
            $data['datosCliente'] = $this->clientes_model->editCliente($id);
            $data['email'] =$this->session->userdata('email');
            $data['nombre'] =$this->session->userdata('nombre');
            $data['apellidos'] =$this->session->userdata('apellidos');

            $this->load->view('plantilla/header',$data);
            $this->load->view('plantilla/navbar');
            $this->load->view('clientes/edita');
            $this->load->view('plantilla/foother');
            
        }else{
            //regresar a index enviar parametro
            redirect('clientes');
        }
        
    }

    public function update(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtIdCliente = $datos['txtIdCliente'];
            $txtRazonSocial = $datos['txtRazonSocial'];
            $txtDireccion = $datos['txtDireccion'];
            $txtCif = $datos['txtCif'];
            $txtPoblacion = $datos['txtPoblacion'];
            $txtProvincia = $datos['txtProvincia'];
            $txtCodigoPostal = $datos['txtCodigoPostal'];
            $txtTarifa = $datos['txtTarifa'];
        
            $this->clientes_model->updateCliente($txtIdCliente,$txtRazonSocial, $txtDireccion,$txtCif, $txtPoblacion, $txtProvincia, $txtCodigoPostal,$txtTarifa);
            redirect('clientes/mantenerClientes');
        }

	}
}