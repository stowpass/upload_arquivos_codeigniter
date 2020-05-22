<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Aberturas:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('abertura/novo'); ?>" class="btn btn-primary mb-2">Nova Abertura</a>
  <hr>

    <table class="table  table-bordered">
        <thead>
        <tr>
            <th scope="col">Data</th>
            <th scope="col"><center>Status</center></th>
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($datas as$datax) : ?>
               
       
            <tr>

                <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <?php 
            
               echo date('d/m/Y', strtotime($datax['data'])); ?>
                   
               
                </td>
              
               <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <center><?php  if($datax['status'] == 1) echo "ABERTO" ?></center> 

                </td>
               
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('abertura/periodo/' .$datax['id']); ?>"><i
                                    class="fa fa-edit"></i>Inserir Periodo
                        </a> |
                        <a href="<?php echo site_url('abertura/excluir/' .$datax['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse mesa?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>