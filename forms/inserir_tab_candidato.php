<?php include('../classes/tab_candidato.class.php');?>
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
        <form method="POST" name="form" action="processamento/processar_tab_candidato.php" data-toggle="validator" role="form" >
		

	<div class="form-group">
       <label for="cod_candidato">Cod_candidato</label>
       <input type="text" id="cod_candidato" class="form-control" name="cod_candidato" required>
    </div>
	<div class="form-group">
       <label for="cpf">Cpf</label>
       <input type="text" id="cpf" class="form-control" name="cpf" required>
    </div>
	<div class="form-group">
       <label for="nome">Nome</label>
       <input type="text" id="nome" class="form-control" name="nome" required>
    </div>
	<div class="form-group">
       <label for="email">Email</label>
       <input type="text" id="email" class="form-control" name="email" required>
    </div>
	<div class="form-group">
       <label for="arquivo">Arquivo</label>
       <input type="text" id="arquivo" class="form-control" name="arquivo" required>
    </div><input  type="submit"  class="btn btn-success" >
           <input type="hidden" name="MM_action" value="1">
         </form>
      </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
     </div>