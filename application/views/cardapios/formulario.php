<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12 ">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Cadastro de cardapio</h3>

    </div>
    <hr>
    <!-- /.box-header -->

    <!-- form start -->
    <form role="form" action="<?php echo site_url('cardapio/') . $acao; ?>" method="post" enctype="multipart/form-data">
        <?php foreach ($ver as $registro) : ?>

            <div class="box-body fluid border border-primary center">

                <div class="row col-lg-12">
                    <div class="form-group col-lg-8">
                        <label for="exampleInputEmail1">Nome do Cardapio:</label>
                        <input type="text" class="form-control"
                               id="nome"
                               name="nome"
                               placeholder="Insira o nome de uma nova cardapio"
                               value="<?= $registro['nome']; ?>"
                               required>
                    </div>

                </div>

                <div class="row col-lg-12">
                    <div class="form-group col-lg-4">
                        <label for="id_categoria">Categoria</label>
                        <select class="form-control" name="id_categoria" id="id_categoria" required>
                            <option value="">Selecione Categoria</option>
                            <?php 
                            
                            foreach ($vercategoria as $verregistro): 
                                
                                
                                //$selecionar = ($verregistro['id'] == $registro['id_categoria'] ? 'selected="selected"' : "");
                                
                                
                                if ($verregistro['id'] == $registro['id_categoria'])
                                     {
                                         $selecionar='selected="selected"';
                                    } 
                                else {
                                    
                                    $selecionar = "";
                                }

                                
                                ?>
                                <option <?=$selecionar;?> value="<?php echo $verregistro['id'] ?>"><?php echo $verregistro['nome']; ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>




                <div class="form-group col-lg-8">
                    <label class="control-label" for="textarea">Descrição</label>

                    <textarea class="form-control"
                              id="descricao"
                              name="descricao"><?= $registro['descricao']; ?></textarea>


                </div>

             

                <div class="row col-lg-12">
                    <div class="form-group col-lg-8">
                        <label for="exampleInputEmail1">Valor
                            <input type="text" class="form-control"
                                   id="nome"
                                   name="valor"

                                   value="<?= $registro['valor']; ?>"
                                   required>
                    </div>

                </div>

                <div class="row col-lg-12">
                    <div class="form-group col-lg-8">
                        
                        <img class="img-thumbnail col-xs-2 col-sm-2 col-md-2 col-lg-2" src="<?php
                         if ($registro['foto'] != ""){
                            echo base_url('assets/imagens/'.$registro['foto']);
                        }else{
                            echo base_url('assets/imagens/'."default.png");
                        } ?>">
                     
                    </div>

                </div>


                <div class="row col-lg-12">
                    <div class="form-group col-lg-8">
                        <label for="exampleInputEmail1">Foto
                            <input type="file" class="form-control"
                                   id="foto"
                                   name="foto"

                                   value=""
                            >
                    </div>

                </div>



            </div>
            <!-- /.box-body -->
            <div class="form-group col-lg-4">
                <div class="box-footer mb-2 p-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="box-footer mb-2 p-3 col-lg-5">
                    <a href="<?php echo site_url('cardapio') ?>">Voltar</a>
                </div>
            </div>

        <?php endforeach ?>
    </form>

