<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function verificar_login()
    {
        $parametros = [
            
            $this->input->post('usuario'),
            md5($this->input->post('senha'))
        ];
        $resultado = $this->db->query('SELECT * FROM usuarios WHERE usuario = ? AND senha = ?', $parametros);

        if ($resultado->num_rows()==0) {
            return false;
        } else {   
            
            //Nessa parte eu fiz as SESSION
            $dados = $resultado->row();
            //depois disso vou colocar os dados na Session
            $this->session->set_userdata('id', $dados->id);
            //$this->session->set_userdata('nome', $dados->nome);
            $this->session->set_userdata('usuario', $dados->usuario);
            //restorno para o controler que deu certo o login
            return true;
            
        }
        
    }
    public function sair()
    {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("usuario");
    }

   

}