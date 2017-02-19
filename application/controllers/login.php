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
       
      if($this->input->post()){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $usuario = $this->usuarios_model->usuario_por_nombre_contrasena($email, $password);
       
          if($usuario){
              $data = array(
                   'email'    =>    $usuario->email,
                   'logeado' => true,
                   'id_usuario'  =>    $usuario->usu_id,
                   'apellidos'    =>    $usuario->apellidos,
                   'fecha_alta'    =>    $usuario->fecha_alta,
                   'perfil'=> $usuario->perfil,
                    'dni'    =>    $usuario->dni,
                    'cod_cliente'    =>    $usuario->cod_cliente,
                   'nombre'    =>    $usuario->nombre

                );    
               

          $this->session->set_userdata($data);
             if ($this->session->userdata('perfil')=='1'){
                 redirect('escritorio');


           }else{
              redirect('escritorio_cliente');

           }

            	
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