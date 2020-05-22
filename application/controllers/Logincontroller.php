<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {
    public function index (){

      $this->load->view('login/login');

    }

    public function verificar (){
        $this->load->model('loginmodel');
        if($this->loginmodel->verificar_login()){
         redirect('inicial');
            
        }else{
            
          redirect('login');
        }
      }
       public function logout(){
          $this->load->model('loginmodel');
          $this->loginmodel->sair();
          redirect('login');
          

        }

}
    

