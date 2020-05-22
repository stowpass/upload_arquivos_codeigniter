<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aberturamodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function salvar(){


        $data = array(
            'data'           => $_POST['data'],
             );

        return $this->db->insert('diarias', $data);
       
    }
    public function listarDiarias(){

        $this->db->from('diarias')->where('status = 1');
        $this->db->order_by('data', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listarDiariasID($id){

        $this->db->from('diarias')->where('id=', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}