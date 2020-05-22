<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garconcontroller extends CI_Controller {

        public function index ()
        {
                if (!$this->session->usuario) redirect('login');

                $this->load->view('layout/topo');
                $this->load->model('garconmodel');
                $lista['garcons'] = $this->garconmodel->listarGarcon();
                $this->load->view('garcons/listagem', $lista);
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        if (!$this->session->usuario) redirect('login');

        $this->load->view('layout/topo');
        $this->load->model('mesamodel');
        $lista['vermesa'] = $this->mesamodel->listarmesa(); 
        $this->load->model('garconmodel');
        $lista['ver'] = $this->garconmodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('garcons/formulario', $lista);
        $this->load->view('layout/rodape');
       
}


 public function salvar()
	{
               
                if (!$this->session->usuario) redirect('login');
               
                $this->load->model('garconmodel');
		$this->garconmodel->salvar();
		redirect('garcon');
        }
        

public function editar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('garconmodel');
        $this->load->model('mesamodel');
        $lista['vermesa'] = $this->mesamodel->listarmesa();
        $lista['ver'] = $this->garconmodel->listargarcons_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('garcons/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('garconmodel');
        $this->garconmodel->atualizar($id);
        $lista['garcons'] = $this->garconmodel->listargarcon();
        redirect('garcon');

}

public function excluir($id)
{
        if (!$this->session->usuario) redirect('login');

        $this->load->model('garconmodel');
        $this->garconmodel->excluir($id);
        redirect('garcon');

}

public function json()
{
        $this->load->model('garconmodel');
        $jax = $this->garconmodel->listarGarcon();
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"Garcons":'.$json.'}';
        
       
}

public function jsonid($id)
{
        $this->load->model('garconmodel');
        $jax = $this->garconmodel->listarGarcons_com_id($id);
        //$json= json_encode($jax, JSON_NUMERIC_CHECK);
        $json= json_encode($jax);
        echo '{"Garcons":'.$json.'}';
        
       
}

public function avaliacao(){
       
        
        $json = file_get_contents('https://fastmeal-af5e8.firebaseio.com/avaliacao.json'); 
        $obj = json_decode($json, true);
     
        $this->load->model('garconmodel');
        //$jax = $this->garconmodel->listarGarcons_com_id($id);

 

        $idd = array();
        $notaa = array();
        $sei = array();
        foreach($obj as $key => $value) {
                $idd[$value['nomeGarcom']][] = $value['nota'];	
        foreach($idd as $keyP => $valueP) {

           $notaa[$keyP]= array_sum($idd[$keyP]);
          
	}

}
$this->load->view('layout/topo');
$lista['notasEnomes'] = $notaa;
$this->load->view('garcons/avaliacao',$lista);
$this->load->view('layout/rodape');
}


}

/**
$etapas = array();
$pontos = array();
foreach($arrModelo as $key => $value) {
	
	$etapas[$value['match_id']][] = $value['total_points'];

	foreach($etapas as $keyP => $valueP) {
		$pontos[$keyP] = array_sum($etapas[$keyP]);
	}

}

echo '<pre>';
	var_dump($pontos);
echo '<pre>'; 


*/