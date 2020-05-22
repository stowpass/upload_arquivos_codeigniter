<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesacontroller extends CI_Controller {

public function index ()
        {
                if (!$this->session->usuario) redirect('login');

                $this->load->view('layout/topo');
                $this->load->model('mesamodel');
                $lista['mesas'] = $this->mesamodel->listarMesa();
                $this->load->model('garconmodel');
                $lista['garcons'] = $this->garconmodel->listarGarcon();
                $this->load->view('mesas/listagem', $lista);
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        if (!$this->session->usuario) redirect('login');

        $this->load->view('layout/topo');
        $this->load->model('mesamodel');
        $lista['ver'] = $this->mesamodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->model('garconmodel');
        $lista['garcons'] = $this->garconmodel->listarGarcon();
        $this->load->view('mesas/formulario', $lista);
        $this->load->view('layout/rodape');
       
}


 public function salvar()
	{
                if (!$this->session->usuario) redirect('login');

		$this->load->model('mesamodel');
		$this->mesamodel->salvar();
		redirect('mesa');
        }
        

public function editar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('mesamodel');
        $lista['ver'] = $this->mesamodel->listarMesas_com_id($id);
        $this->load->model('garconmodel');
        $lista['garcons'] = $this->garconmodel->listarGarcon();
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('mesas/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('mesamodel');
        $this->mesamodel->atualizar($id);
        $lista['mesas'] = $this->mesamodel->listarmesa();
        redirect('mesa');

}

public function excluir($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('mesamodel');
        $this->mesamodel->excluir($id);
        redirect('mesa');

}

public function json()
{
        $this->load->model('mesamodel');
        $jax = $this->mesamodel->listarMesaEnomeGarcom();
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"Mesas":'.$json.'}';
        
       
}

public function jsonid($id)
{
        $this->load->model('mesamodel');
        $jax = $this->mesamodel->listarMesaEnomeGarcomComID($id);
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"Mesas":'.$json.'}';
        
       
}

public function jsonteste()
{
        $this->load->model('mesamodel');
        $jax = $this->mesamodel->listarMesaEnomeGarcom();
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo $json;
        
       
}


}