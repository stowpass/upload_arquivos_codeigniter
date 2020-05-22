<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Cardapios:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('cardapio/novo'); ?>" class="btn btn-primary mb-2">Novo Cardapio</a>
  <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            <th scope="col">Nome</th>
            <th scope="col"><center>Categoria</center></th>
            <th scope="col">Descrição</th>
            <th scope="col"><center>Valor</center></th>
            <th scope="col"><center>Foto</center></th>
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($cardapios as $cardapio) : ?>

            <tr>

                <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                 <?php echo $cardapio['nome'] ?>
                </td>
                <td class="auto">
                    <center><?php echo $cardapio['id_categoria'] ?></center>
                </td>
                <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $cardapio['descricao'] ?></td>
                <td class="auto">
                    <center><?php echo $cardapio['valor'] ?></center>
                </td>
                <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/imagens/'.$cardapio['foto']) ?>" alt=50" srcset="">
                </td>
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('cardapio/editar/' . $cardapio['id']); ?>"><i
                                    class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('cardapio/excluir/' . $cardapio['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse cardapio?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>