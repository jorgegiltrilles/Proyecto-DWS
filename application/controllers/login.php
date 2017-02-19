<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
    $this->load->model('usuarios_model');
	}


    public function index() {
    
      $data = array();
       
       if(isset($_POST['password'])){

          if($this->usuarios_model->login($_POST['email'], $_POST['password'])){
               $email = $this->input->post('email');
               $datos = $this->usuarios_model->datos_sesion($email);
               $data = array(
                   'email'    =>    $datos->email,
                   'logeado' => true,
                   'id_usuario'  =>    $datos->usu_id,
                   'perfil'    =>    $datos->perfil,
                   'apellidos'    =>    $datos->apellidos,
                   'fecha_alta'    =>    $datos->fecha_alta,
                    'dni'    =>    $datos->dni,
                     'per_nombre'    =>    $datos->per_nombre,
                   'nombre'    =>    $datos->nombre
                );    
               

          $this->session->set_userdata($data);
            	redirect('escritorio');
		        }
                            
          else{   //   Si no logró validar
               $data['error']="E-mail o password incorrecto, por favor vuelva a intentarlo";

            }
          }
        
         $this->load->view('login',$data);
     }

     

 function logout() {
    $this->session->sess_destroy();
    header('Location:' . base_url());
  }


}