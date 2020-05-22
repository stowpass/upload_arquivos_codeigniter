<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Garcons:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('garcon/novo'); ?>" class="btn btn-primary mb-2">Novo Garçon</a>
  <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            <th scope="col">Nome do Garçon</th>
            <th scope="col"><center>Foto</center></th>
            
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($garcons as $garcon) : ?>

            <tr>

                <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                 <?php echo $garcon['nome'] ?>
                </td>
                <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/imagens/'.$garcon['foto']) ?>" alt=50" srcset="">
                </td>
               
                
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('garcon/editar/' . $garcon['id']); ?>"><i
                                    class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('garcon/excluir/' . $garcon['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse garcon?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>