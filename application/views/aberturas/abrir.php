<div class="box box-primary col-lg-12 ">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Abertura de Estabelecimento</h3>

    </div>
    <hr>
<br>
<form class="form-horizontal" action="<?php echo site_url('abertura/') . $acao; ?>" method="POST">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Data Abertura</label>  
 
 <div class="col-md-3">
  <input name="data" type="date" class="form-control date" required="" value="Teste">
     

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
    <button id="" name="" type="submit" class="btn btn-primary">Salvar</button>
    <a class="btn btn-danger"href="<?php echo site_url('abertura')?>">Cancelar</a>
  </div>
</div>

</fieldset>
</form>
