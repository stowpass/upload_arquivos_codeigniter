<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesamodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function listarMesa(){

        $this->db->from('mesas')->where('status = 1');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('empresas')->order_by('id', 'desc')->result_array();
	    ///
    }

    public function listarMesaEnomeGarcom(){
        
       
       $this->db->select('m.id, m.nome, m.status,g.id AS idGarcom, g.nome AS nomeGarcom, g.foto');

      $this->db->from('mesas AS m');
      $this->db->join('garcons AS g', 'm.id_garcon = g.id');
      $query = $this->db->get();
        return $query->result_array();
        
    }

    public function listarMesaEnomeGarcomComID($id){
        
       
        $this->db->select('m.id, m.nome, m.status,g.id AS idGarcom, g.nome AS nomeGarcom, g.foto');
 
       $this->db->from('mesas AS m');
       $this->db->join('garcons AS g', "m.id_garcon = g.id AND m.id = $id");
       $query = $this->db->get();
         return $query->result_array();
         
     }

    public  function vazio(){
        
        return array (0=>array(
            
            "nome"=>"",
    

        ));

    }

    public function salvar()
    {
 
            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            
            return $this->db->insert('mesas', $this);

    }
//==============================================================
    public function atualizar($id)
    {
           
          foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

            return $this->db->update('mesas', $this, "id = $id");
         

    }

    
    public function excluir($id)
    {
        $data = array(
            'status'           => '0'     
        );
        
        return $this->db->update('mesas', $data, "id = $id");
        
    }
   
    
    public function listarMesas_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('mesas')->where('id', $id)->get()->result_array();
    }       




}