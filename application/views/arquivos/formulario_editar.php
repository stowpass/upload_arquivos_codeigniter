<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    <form role="form" action="<?php echo site_url('arquivo/') . $acao; ?>" method="post" enctype="multipart/form-data">
      
    <fieldset>
<?php foreach ($arquivos as $arquivo): ?> 

<!-- Form Name -->
<legend>Processo</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numero_processo">Número</label>  
  <div class="col-md-4">
  <input 
          id="numero_processo" 
          name="numero_processo" 
          type="text" 
          placeholder="" 
          value="<?=$arquivo['numero_processo']; ?>"
          class="form-control input-md">
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="autor">Autor</label>  
  <div class="col-md-4">
  <input 
          id="autor" 
          name="autor" 
          type="text" 
          placeholder="" 
          value="<?=$arquivo['autor']; ?>"
          class="form-control input-md">
          
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reu">Reu</label>  
  <div class="col-md-4">
  <input id="reu" 
         name="reu" 
         type="text" 
         placeholder="" 
         value="<?=$arquivo['reu']; ?>"
         class="form-control input-md">
    
  </div>
</div>
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição</label>  
  <div class="col-md-4">
  <input   id="descricao" 
          name="descricao" 
          type="text" 
          placeholder="" 
          value="<?=$arquivo['descricao']; ?>"
          class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Nome Arquivo</label>  
  <div class="col-md-4">
  <input   id="descricao" 
          name="descricao" 
          type="text" 
          disabled
          value="<?=$arquivo['nome_arquivo']; ?>"
          class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ATUALIZAR</button>
  </div>
</div>
<br>
</fieldset>
<br>
<?php endforeach ?>
    </form>

