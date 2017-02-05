<?php >
defined('BASEPATH') OR exit('No direct script access allowed');

 public function index()
 {
  $data['contenido']='home/index';
  $this->load->view('template',$data);
 }
