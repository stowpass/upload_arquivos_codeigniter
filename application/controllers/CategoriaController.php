<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoriacontroller extends CI_Controller {

public function index ()
        {
                if (!$this->session->usuario) redirect('login');

                $this->load->view('layout/topo');
                $this->load->model('categoriamodel');
                $lista['categorias'] = $this->categoriamodel->listarCategoria();
                $this->load->view('categorias/listagem', $lista);
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        if (!$this->session->usuario) redirect('login');
        $this->load->view('layout/topo');
        $this->load->model('categoriamodel');
        $lista['ver'] = $this->categoriamodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('categorias/formulario', $lista);
        $this->load->view('layout/rodape');
       
}
public function json2()
{
        $this->load->model('categoriamodel');
        $jax= $this->categoriamodel->listarCategorias_com_cadapios();
        //var_dump($jax);
        
foreach( $jax as $cliente){
        $clientes[ array_shift( $cliente ) ][] = $cliente;
    }
    print_r($clientes); 
    //$json= json_encode($jax, JSON_NUMERIC_CHECK);
       $clientes= json_encode($clientes);
       //echo $json;
        
       
}

 public function salvar()
	{
                if (!$this->session->usuario) redirect('login');

                $this->load->model('categoriamodel');
		$this->categoriamodel->salvar();
		redirect('categoria');
        }
        

public function editar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('categoriamodel');
        $lista['ver'] = $this->categoriamodel->listarCategorias_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('categorias/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('categoriamodel');
        $this->categoriamodel->atualizar($id);
        $lista['categorias'] = $this->categoriamodel->listarCategoria();
        redirect('categoria');

}

public function excluir($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('categoriamodel');
        $this->categoriamodel->excluir($id);
        redirect('categoria');

}

public function json()
{
        $this->load->model('categoriamodel');
        $jax = $this->categoriamodel->listarCategoria();
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"categorias":'.$json.'}';
        
       
}



}