<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">pedidos:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('pedido/novo'); ?>" class="btn btn-primary mb-2">Novo pedido</a>
  <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col"><center>Diaria</center></th>
            <th scope="col"><center>Status</center></th>
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($pedidos as $pedido) : ?>

            <tr>

                <td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                 <?php echo $pedido['id'] ?>
                </td>
                <td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <center><?php echo $pedido['id_diaria_prof_mesa'] ?></center>
                </td>
                <td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <center>
                <?php echo $pedido['status'] ?> </center>
                </td>

               
                
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('pedido/editar/' . $pedido['id']); ?>"><i
                                    class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('pedido/excluir/' . $pedido['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse pedido?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>