<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arquivomodel extends CI_Model
{
   
    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }


    public function listararquivo(){

        $this->db->from('arquivos');
        $this->db->order_by('numero_processo', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo aaulssim
        /// return $this->db->get('empresas')->order_by('id', 'desc')->result_array();
	    ///
    }

      public function salvar()
    {


       //$this->load->library('upload');
       
       
       // Defina aqui onde esta a pasta para armazenar seus aquivos
       $config['upload_path']      = FCPATH .'assets/arquivos';
       //Defina aqui a extensões que serão permitidas a serem enviadas
       $config['allowed_types']    = 'doc|docx|xls|xlsx|pdf|mp3|mpeg|mpeg4|jpeg|txt|osx|gif|jpg|png|odg';
       //Essa linha dar nomes aleatorios aos arquivos
      // $config['encrypt_name']    = TRUE;
       $this->load->library('upload', $config);
     
        if (  $this->upload->do_upload('nome_arquivo'))
        {
                
                echo "ok";
        }
        else
        {
                echo "Arquivo ou extensão não permitidos";
                die;
        }

       $infoArquivo = $this->upload->data();
       $nomeArquivo = $infoArquivo["file_name"];

       $data = array(
                'numero_processo'    => $_POST['numero_processo'],
                'autor'              => $_POST['autor'],
                'reu'                => $_POST['reu'],
                'descricao'          => $_POST['descricao'],
               'nome_arquivo'        => $nomeArquivo,

        );
      
            return $this->db->insert('arquivos', $data);


    }

//==============================================================
    public function atualizar($id)
    {
      
            $data = array(
                'numero_processo'    => $_POST['numero_processo'],
                'autor'              => $_POST['autor'],
                'reu'                => $_POST['reu'],
                'descricao'          => $_POST['descricao'],
              
            );
                
            return $this->db->update('arquivos', $data, "id = $id");
         
    }

    
    public function excluir($id)

    {
       
        return $this->db->delete('arquivos', array('id' => $id));  
    }
   
    
    public function listararquivos_com_id($id){
       

        return $this->db->from('arquivos')->where('id', $id)->get()->result_array();
    }       




}