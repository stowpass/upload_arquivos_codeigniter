<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Mesas:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('mesa/novo'); ?>" class="btn btn-primary mb-2">Nova Mesa</a>
  <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            <th scope="col">Nome</th>
             <th scope="col">
             <center>
                Garçon que atende
            </center>
            </th>
         
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($mesas as $mesa) : ?>

            <tr>

                <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                 <?php echo $mesa['nome'] ?>
                </td>
                <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                 <center>
                     <?php                         
                            foreach ($garcons as $garcon): 
                                
                                
                                //$selecionar = ($verregistro['id'] == $registro['id_categoria'] ? 'selected="selected"' : "");
                                
                                
                                if ($garcon['id'] == $mesa['id_garcon'])
                                     {
                                      
                                      echo $garcon['nome'];       
                                                                  } 
                                else {
                                    
                                
                                }

                            

                            endforeach; ?>
                        
                
                 </center>
                 </td>
               
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('mesa/editar/' . $mesa['id']); ?>"><i
                                    class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('mesa/excluir/' . $mesa['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse mesa?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>