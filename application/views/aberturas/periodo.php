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
  <label class="col-md-4 control-label" for="textinput">Aberto em</label>  
 
 <div class="col-md-3">
 <?php foreach ($datas as $data) {
 ?>
  <input name="data" type="text" class="text-center" value="<?php 
 echo date('d/m/Y', strtotime($data['data']));?>">
 <?php 
 
} 
?>
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
