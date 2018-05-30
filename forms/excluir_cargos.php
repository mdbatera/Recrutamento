<?php 
include('../classes/cargos.class.php');
//Cria o Objeto
$c = new Cargos();
$result_excluir = $c->exibirCargosCod($_GET['cod_cargo']);
$row_cargos = $result_excluir->fetch(PDO::FETCH_ASSOC);
$cod_cargos = $_GET['cod_cargo'];
?>
<!-- Modal content-->
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Excluir Carreta</h4>
</div>
<div class="modal-body">
  <div class="alert alert-danger"> <strong>Perigo!</strong> Você está prestes a apagar o registro.</div>
  <form method="POST" name="form" action="processamento/processar_cargos.php?cod_cargos=$cod_cargos" role="form" ><div class="form-group">
      <label for="Cod_cargo">Cod_cargo:</label>
      <input type="text"  id="cod_cargo" class="form-control" name="cod_cargo" required readonly value="<?php echo $row_cargos["cod_cargo"]; ?>">
    </div><div class="form-group">
      <label for="Nome">Nome:</label>
      <input type="text"  id="nome" class="form-control" name="nome" required readonly value="<?php echo $row_cargos["nome"]; ?>">
    </div><div class="form-group">
      <label for="Descricao">Descricao:</label>
      <input type="text"  id="descricao" class="form-control" name="descricao" required readonly value="<?php echo $row_cargos["descricao"]; ?>">
    </div><div class="form-group">
      <label for="Status">Status:</label>
      <input type="text"  id="status" class="form-control" name="status" required readonly value="<?php echo $row_cargos["status"]; ?>">
    </div><input type="submit"  class="btn btn-danger" value="Apagar"  >
    <input type="hidden" name="MM_action" value="3">
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
</div> 	
   
    <input type="hidden" name="MM_action" value="3">
  </form>
</div>


