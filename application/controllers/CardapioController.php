<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapiocontroller extends CI_Controller {

        public function index (){    
                if (!$this->session->usuario) redirect('login');

                $this->load->view('layout/topo');
                $this->load->model('cardapiomodel');
                $lista['cardapios'] = $this->cardapiomodel->listarCardapio();
                $this->load->view('cardapios/listagem', $lista);
                $this->load->view('layout/rodape');

    }

public function novo(){
        
        
        if (!$this->session->usuario) redirect('login');
        $this->load->view('layout/topo');
        $this->load->model('categoriamodel');
        $lista['vercategoria'] = $this->categoriamodel->listarCategoria(); 
        $this->load->model('cardapiomodel');
        $lista['ver'] = $this->cardapiomodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('cardapios/formulario', $lista);
        $this->load->view('layout/rodape');
       
}


 public function salvar(){
               
                if (!$this->session->usuario) redirect('login');
              
                $this->load->model('cardapiomodel');
		$this->cardapiomodel->salvar();
		redirect('cardapio');
        }
        

public function editar($id){
        
        if (!$this->session->usuario) redirect('login');

        $this->load->model('cardapiomodel');
        $this->load->model('categoriamodel');
        $lista['vercategoria'] = $this->categoriamodel->listarCategoria();
        $lista['ver'] = $this->cardapiomodel->listarCardapios_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('cardapios/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('cardapiomodel');
        $this->cardapiomodel->atualizar($id);
        $lista['cardapios'] = $this->cardapiomodel->listarcardapio();
        redirect('cardapio');

}

public function excluir($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('cardapiomodel');
        $this->cardapiomodel->excluir($id);
        redirect('cardapio');

}

public function json()
{
        $this->load->model('cardapiomodel');
        $lista['cardapios'] = $this->cardapiomodel->listarCardapio();
        $jax = $this->cardapiomodel->listarCardapio();

       // $json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"cardapios":'.$json.'}';

}
//2()
//
//>model('cardapiomodel');
//>model('categoriamodel');
//>cardapiomodel->listarCardapio();
//->categoriamodel->listarCategoria();
//jax);
//ay(array($jax[]);
//tes); 
//code($jax, JSON_NUMERIC_CHECK);
//= json_encode($categoria);
//
        
       
}

