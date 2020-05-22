<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">arquivos:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('arquivo/novo'); ?>" class="btn btn-primary mb-2">Novo arquivo</a>
  <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            <th scope="col">Nº</th>
            <th scope="col"><center>Autor</center></th>
            <th scope="col">Reu</th>
            <th scope="col"><center>Data Inclusao</center></th>
            <th scope="col"><center>Descrição Arquivo</center></th>
            <th scope="col"><center>Arquivo</center></th>
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($arquivos as $arquivo) : ?>

            <tr>

                <td class="auto">
                 <?php echo $arquivo['numero_processo'] ?>
                </td>
                <td class="auto">
                    <center><?php echo $arquivo['autor'] ?></center>
                </td>
                <td class="auto">
                    <?php echo $arquivo['reu'] ?></td>
                <td class="auto">
                    <center><?php echo $arquivo['data'] ?></center>
                </td>
                <td class="auto">
                    <center><?php echo $arquivo['descricao'] ?></center>
                </td>
                <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <?php echo $arquivo['nome_arquivo']?>
                </td>
                <td class="auto">
                    <center>
                    <a href="<?php echo base_url('arquivo/baixar/'.$arquivo['id']);
                     ?>"><i
                                    class="fa fa-save"></i> Baixar
                        </a> |
                        <a href="<?php echo base_url('arquivo/editar/' . $arquivo['id']); ?>"><i
                                    class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('arquivo/excluir/' . $arquivo['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse arquivo?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>

base_url('assets/arquivos/'.$arquivo['nome_arquivo'])