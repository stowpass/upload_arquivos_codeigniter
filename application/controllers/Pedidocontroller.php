<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidocontroller extends CI_Controller {

        public function index (){    
                if (!$this->session->usuario) redirect('login');

                $this->load->view('layout/topo');
                $this->load->model('pedidomodel');
                $lista['pedidos'] = $this->pedidomodel->listarpedido();
                $this->load->view('pedidos/listagem', $lista);
                $this->load->view('layout/rodape');

    }

public function novo(){
                
        if (!$this->session->usuario) redirect('login');

        $this->load->view('layout/topo');
        $this->load->model('pedidomodel');
        $lista['verpedido'] = $this->pedidomodel->listarpedido(); 
        $this->load->model('cardapiomodel');
        $lista['ver'] = $this->cardapiomodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('pedidos/formulario', $lista);
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
        $this->load->model('pedidomodel');
        $lista['verpedido'] = $this->pedidomodel->listarpedido();
        $lista['ver'] = $this->cardapiomodel->listarpedido_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('pedido/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('cardapiomodel');
        $this->cardapiomodel->atualizar($id);
        $lista['pedido'] = $this->cardapiomodel->listarcardapio();
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
        $lista['pedido'] = $this->cardapiomodel->listarCardapio();
        $jax = $this->cardapiomodel->listarCardapio();
        echo "<pre>";
       echo json_encode($jax);
        print_r($jax);
        echo "</pre>";


}




}