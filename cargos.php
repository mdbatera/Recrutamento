<?php 
include('classes/cargos.class.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modulo</title>
<!-- Bootstrap e dependências -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/formValidation.css">
<link rel="stylesheet" href="css/loading.css">
<link rel="stylesheet" href="css/bootstrap-combobox.css">

 
 </head>
 <body>
<div class="container">
<?php

//Cria o Objeto
$c = new Cargos();

//Exibir as informações do banco por específico ou todos.
if(!isset($_GET["localizar"])) {	
$result = $c->exibirCargos();
$total_registros = $result->rowCount(PDO::FETCH_ASSOC);
}else{
$result = $c->localizarCargos($_GET["localizar"]);
}

?>
<?php include("menu.php"); ?>
   <h3>Localizar</h3>
   <form role="form" name="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-toggle="validator">
    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
       <input id="localizar" type="text" maxlength="7" class="form-control" name="localizar" style="text-transform:uppercase;" placeholder="Nome">
     </div>
  </form>
   <div class="input-group" style="margin-top:5px;"> <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
    <!-- Trigger the modal with a button -->
<a href="forms/inserir_cargos.php" data-toggle="modal" data-target="#myModal" class="btn btn-primary" >Adicionar</a>
  </div>
  <br>
  <?php 
  
  if(isset($_GET['msg'])) {
	  $msg = $_GET['msg']; ?>
      <?php if($msg == 1) { ?>
	 <div class="alert alert-success">
  <strong>Sucesso!</strong> Operação concluída.
</div> 
<?php } ?>
 <?php if($msg == 2) { ?>
	 <div class="alert alert-danger">
  <strong>Erro!</strong> Operação não pode ser concluída.
</div>
<?php } ?>
	 
	 <?php } ?>
   
	 
  <table class="table table-striped table-bordered" style="margin-top:10px;">
<thead>
<tr>
      <th>Cod_cargo</th>
      <th>Nome</th>
      <th>Descricao</th>
      <th>Status</th>		
      <th>Ação</th>
	  </tr>
    </thead>
    <tbody>
       <?php while($row_cargos = $result->fetch(PDO::FETCH_ASSOC)){ ?>
         <tr><td><?php echo $row_cargos["cod_cargo"]; ?></td> 
<td><?php echo $row_cargos["nome"]; ?></td> 
<td><?php echo $row_cargos["descricao"]; ?></td> 
<td><?php echo $row_cargos["status"]; ?></td> 
<td><a data-toggle="modal" data-target="#myModal" href="forms/alterar_cargos.php?cod_cargos=<?php echo $row_cargos['cod_cargos']; ?>"> <span class="glyphicon glyphicon-pencil"></span> </a><a data-toggle="modal" data-target="#myModal" href="forms/excluir_cargos.php?cod_cargos=<?php echo $row_cargos["cod_cargos"]; ?>"> <span class="glyphicon glyphicon-trash"></span> </a></td>
        </tr>
         <?php } ?>
     </tbody>
  </table>
   <hr>
<?php include("footer.php"); ?>
 </div>
<!-- Modal  -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <!-- Modal content-->
<div class="modal-content">
</div>

  </div>
 </div>
<!-- Final Modal inserir--> 







<!-- Scripts Extras -->
<?php include("scripts.php"); ?>

</body>
</html>