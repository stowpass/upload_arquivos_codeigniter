<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Categoria:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('categoria/novo'); ?>" class="btn btn-primary mb-2">Nova Categoria</a>
    <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            
            <th scope="col">Nome</th>
            <th scope="col"><center>Foto</center></th>

            <th scope="col">
                <center> Ações</center>
            </th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($categorias as $categoria) : ?>

            <tr>

                <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8"><?php echo $categoria['nome'] ?></td>
                <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/imagens/'.$categoria['foto']) ?>" alt=50" srcset="">
                </td>
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('categoria/editar/' . $categoria['id']); ?>"><i
                        class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('categoria/excluir/' . $categoria['id']); ?>"
                        onclick='return confirm("Deseja realmente deletar esse categoria?");'><i
                        class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>