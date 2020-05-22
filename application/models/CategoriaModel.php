<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoriamodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function listarCategoria(){

        $this->db->from('categorias')->where('status = 1');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('empresas')->order_by('id', 'desc')->result_array();
	    ///
    }

    public  function vazio(){
        
        return array (0=>array(
            
            "nome"=>"",
            "foto"=>"",
        

        ));

    }

    public function salvar()
    {
 
           //oreach(array_keys($_POST) as $chave){
           //   eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
           //
           $fotografias = array();
           foreach ($_FILES as $foto) {

               if($foto['name'] !=''){
                   $novo_nome = uniqid().'_'.$foto['name'];
                   array_push($fotografias,$novo_nome);
                   move_uploaded_file($foto['tmp_name'],'assets/imagens/' .$novo_nome);
               }else{
                   $novo_nome = "default.png";
               }
           }

           $data = array(
               'nome'           => $_POST['nome'],
               
               'foto'          => $novo_nome

       );
            return $this->db->insert('categorias', $data);

    }
//==============================================================
    public function atualizar($id)
    {
           
       // foreach(array_keys($_POST) as $chave){
       //       eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
       //   }


       $fotografias = array();
       foreach ($_FILES as $foto) {

           if($foto['name'] !=''){
               $novo_nome = uniqid().'_'.$foto['name'];
               array_push($fotografias,$novo_nome);
               move_uploaded_file($foto['tmp_name'],'assets/imagens/' .$novo_nome);
           }else{
               $novo_nome = "";
           }
           
                  }
       if ($novo_nome == "") {
            
       $data = array(
           'nome'           => $_POST['nome'],
         
       );
       } else {
           $data = array(
               'nome'           => $_POST['nome'],
               'foto'          => $novo_nome       
           );
        }

            return $this->db->update('categorias', $data, "id = $id");
         

    }

    
    public function excluir($id)
    {
        $data = array(
            'status'           => '0'     
        );
        
        return $this->db->update('categorias', $data, "id = $id");
        
    }
   
    
    public function listarCategorias_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('categorias')->where('id', $id)->get()->result_array();
        
    }       
    public function listarCategorias_com_cadapios(){
        $this->db->select('*');
$this->db->from('cardapios');
$this->db->join('categorias', 'cardapios.id_categoria = categorias.id');
$sql = $this->db->get();
        return $sql->result_array();
    }  



}