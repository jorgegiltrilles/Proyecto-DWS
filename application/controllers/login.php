<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
	}


    public function index() {
       $data= "";
       if(isset($_POST['password'])){

       $this->load->model('usuarios_model');

          if($this->usuarios_model->login($_POST['email'], $_POST['password'])){
              $data = array(
              'email' => $this->input->post('email')
               );
          $this->session->set_userdata($data);
            	redirect('welcome');
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