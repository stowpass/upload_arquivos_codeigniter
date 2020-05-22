<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {
    
    public function index (){
    if (!$this->session->usuario) redirect('login');

            $this->load->view('layout/topo');

         
           $this->load->view('layout/rodape');
    
       }      


}
