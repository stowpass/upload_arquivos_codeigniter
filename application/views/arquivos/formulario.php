<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12 ">
  <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
    <h3 class="box-title ">Cadastro de arquivo</h3>

  </div>
  <hr>
  <!-- /.box-header -->

  <!-- form start -->
  <form role="form" action="salvar" method="post" enctype="multipart/form-data">

    <fieldset>

      <!-- Form Name -->
      <legend>Processo</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="numero_processo">Número</label>
        <div class="col-md-4">
          <input id="numero_processo" name="numero_processo" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>
      <br>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="autor">Autor</label>
        <div class="col-md-4">
          <input id="autor" name="autor" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>
      <br>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="reu">Reu</label>
        <div class="col-md-4">
          <input 
          id="reu" 
          name="reu" 
          type="text" 
          placeholder="" 
          
          class="form-control input-md">

        </div>
      </div>
      <br>
      <div class="form-group">
        <label class="col-md-4 control-label" for="descricao">Descrição</label>
        <div class="col-md-4">
          <input id="descricao" name="descricao" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>
      <br>
      <!-- File Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nome_arquivo"></label>
        <div class="col-md-4">
          <input
           required
           id="nome_arquivo" 
           name="nome_arquivo" 
           class="input-file" 
           type="file">
        </div>
      </div>
      <br>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
          <button id="singlebutton" name="singlebutton" class="btn btn-primary">ENVIAR</button>
        </div>
      </div>
      <br>
    </fieldset>
    <br>
  </form>