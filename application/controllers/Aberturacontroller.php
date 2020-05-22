<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aberturacontroller extends CI_Controller {

        public function index (){    
                if (!$this->session->usuario) return;

                $this->load->view('layout/topo');
                $this->load->model('aberturamodel');
                $lista['datas'] = $this->aberturamodel->listarDiarias();
                $this->load->view('aberturas/listagem',$lista);              
                $this->load->view('layout/rodape');

    }

public function novo(){
        
        
        if (!$this->session->usuario) redirect('login');

        $this->load->view('layout/topo'); 
        $lista['acao'] = "salvar";
        $this->load->view('aberturas/abrir',$lista);              
        $this->load->view('layout/rodape');

       
}

public function periodoAbrir($id){
        
        
        if (!$this->session->usuario) redirect('login');

        $this->load->view('layout/topo'); 
        $lista['acao'] = "salvar";
        $this->load->model('aberturamodel');
        $lista['datas'] =  $this->aberturamodel->listarDiariasID($id);
        $this->load->view('aberturas/periodo',$lista);              
        $this->load->view('layout/rodape');

       
}

 public function salvar(){
               
                if (!$this->session->usuario) redirect('login');
              
                $this->load->model('aberturamodel');
		$this->aberturamodel->salvar();
		redirect('abertura');
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
        echo "<pre>";
       echo json_encode($jax);
        print_r($jax);
        echo "</pre>";


}




}