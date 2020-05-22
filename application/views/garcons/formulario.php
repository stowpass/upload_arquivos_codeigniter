<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12 ">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Cadastro de Garçons</h3>

    </div>
    <hr>
    <!-- /.box-header -->

    <!-- form start -->
    <form role="form" action="<?php echo site_url('garcon/') . $acao; ?>" method="post" enctype="multipart/form-data">
        <?php foreach ($ver as $registro) : ?>

            <div class="box-body fluid border border-primary center">

                <div class="row col-lg-12">
                    <div class="form-group col-lg-8">
                        <label for="exampleInputEmail1">Nome do garcon:</label>
                        <input type="text" class="form-control"
                               id="nome"
                               name="nome"
                               placeholder="Insira o nome de uma nova garcon"
                               value="<?= $registro['nome']; ?>"
                               required>
                    </div>

                </div>

               


            </div>
            <div class="row col-lg-12">
                    <div class="form-group col-lg-8">
                        <label for="exampleInputEmail1">Foto da Categoria
                            <input type="file" class="form-control"
                                   id="foto"
                                   name="foto"

                                   value=""
                            >
                    </div>

                </div>
            <!-- /.box-body -->
            <div class="form-group col-lg-4">
                <div class="box-footer mb-2 p-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="box-footer mb-2 p-3 col-lg-5">
                    <a href="<?php echo site_url('garcon') ?>">Voltar</a>
                </div>
            </div>

        <?php endforeach ?>
    </form>

