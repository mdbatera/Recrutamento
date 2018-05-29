<?php include('../../classes/cargos.class.php');
//Cria o Objeto
$c = new Cargos();
$result_alterar = $c->exibirCargosCod($_GET['cod_cargos']);
$row_cargos = $result_alterar->fetch(PDO::FETCH_ASSOC); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar Cargos</title>
</head>
<body>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Alterar Carreta</h4>
</div>
<div class="modal-body">
  <div class="alert alert-info"> <strong>Atenção!</strong> Você está prestes a modificar o registro. </div>
  <form method="POST" name="form" action="processamento/processar_cargos.php" role="form" >	
	
 <div class="form-group">
      <label for="Cod_cargo">Cod_cargo:</label>
      <input type="text" id="cod_cargo" class="form-control" name="cod_cargo" required  value="<?php echo $row_cargos["cod_cargo"]; ?>">
    </div><div class="form-group">
      <label for="Nome">Nome:</label>
      <input type="text" id="nome" class="form-control" name="nome" required  value="<?php echo $row_cargos["nome"]; ?>">
    </div><div class="form-group">
      <label for="Descricao">Descricao:</label>
      <input type="text" id="descricao" class="form-control" name="descricao" required  value="<?php echo $row_cargos["descricao"]; ?>">
    </div><div class="form-group">
      <label for="Status">Status:</label>
      <input type="text" id="status" class="form-control" name="status" required  value="<?php echo $row_cargos["status"]; ?>">
    </div> 	
    <input type="submit"  class="btn btn-primary" value="Alterar"  >
    <input type="hidden" name="MM_action" value="2">
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
</div>

</body>
</html>

