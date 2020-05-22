<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arquivocontroller extends CI_Controller {

      
        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                
        }


public function index ()
        {
                if (!$this->session->usuario) redirect('login');

                $this->load->view('layout/topo');
                $this->load->model('arquivomodel');
                $lista['arquivos'] = $this->arquivomodel->listararquivo();
              

                $this->load->view('arquivos/listagem', $lista);

               
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        if (!$this->session->usuario) redirect('login');

        $this->load->view('layout/topo');
        $this->load->view('arquivos/formulario');
        $this->load->view('layout/rodape');
       
}


 public function salvar()
	{
                if (!$this->session->usuario) redirect('login');
        
		$this->load->model('arquivomodel');
		$this->arquivomodel->salvar();
                redirect('arquivo');
        
        }
        

public function editar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('arquivomodel');
        $lista['arquivos'] = $this->arquivomodel->listararquivos_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('arquivos/formulario_editar',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('arquivomodel');
        $this->arquivomodel->atualizar($id);
        $lista['arquivos'] = $this->arquivomodel->listararquivo();
        redirect('arquivo');

        //$this->load->view('arquivos/listagem', $lista);

}

public function excluir($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('arquivomodel');
        $arquivos = $this->arquivomodel->listararquivos_com_id($id);

        foreach ($arquivos as $arquivo)
        {
                
               $filename = 'assets/arquivos/'.$arquivo['nome_arquivo'];
        };
        unlink($filename);
        
        $this->arquivomodel->excluir($id);
        redirect('arquivo');

}

public function baixar($id)
{
        if (!$this->session->usuario) redirect('login');
        $this->load->helper('download');
        $this->load->model('arquivomodel');
        $arquivos = $this->arquivomodel->listararquivos_com_id($id);

        foreach ($arquivos as $arquivo)
        {
                
               $filename = 'assets/arquivos/'.$arquivo['nome_arquivo'];
        };
       

        force_download($filename, NULL);

}

public function json()
{
        $this->load->model('arquivomodel');
        $jax = $this->arquivomodel->listararquivoEnomeGarcom();
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"arquivos":'.$json.'}';
        
       
}

public function jsonid($id)
{
        $this->load->model('arquivomodel');
        $jax = $this->arquivomodel->listararquivoEnomeGarcomComID($id);
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"arquivos":'.$json.'}';
        
       
}

public function jsonteste()
{
        $this->load->model('arquivomodel');
        $jax = $this->arquivomodel->listararquivoEnomeGarcom();
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo $json;
        
       
}


}