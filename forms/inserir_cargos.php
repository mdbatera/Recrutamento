<?php include('../classes/cargos.class.php');?>
<script type="text/javascript">
      //<![CDATA[
        $(document).ready(function(){
          $('.combobox').combobox()
        });
      //]]>
	  
    </script>
    <link rel="stylesheet" href="../css/bootstrap-combobox.css">
<!-- Modal content-->
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Carreta</h4>
      </div>
       <div class="modal-body">
        <form method="POST" name="form" action="processamento/processar_cargos.php" data-toggle="validator" role="form" >
		

	<div class="form-group">
       <label for="cod_cargo">Cod_cargo</label>
       <input type="text" id="cod_cargo" class="form-control" name="cod_cargo" required>
    </div>
	<div class="form-group">
       <label for="nome">Nome</label>
       <input type="text" id="nome" class="form-control" name="nome" required>
    </div>
	<div class="form-group">
       <label for="descricao">Descricao</label>
       <input type="text" id="descricao" class="form-control" name="descricao" required>
    </div>
	<div class="form-group">
       <label for="status">Status</label>
       <input type="text" id="status" class="form-control" name="status" required>
    </div><input  type="submit"  class="btn btn-success" >
           <input type="hidden" name="MM_action" value="1">
         </form>
      </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
     </div>