<?php 
include('classes/tab_candidato.class.php');
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
$c = new Tab_candidato();

//Exibir as informações do banco por específico ou todos.
if(!isset($_GET["localizar"])) {	
$result = $c->exibirTab_candidato();
$total_registros = $result->rowCount(PDO::FETCH_ASSOC);
}else{
$result = $c->localizarTab_candidato($_GET["localizar"]);
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
<a href="forms/inserir_tab_candidato.php" data-toggle="modal" data-target="#myModal" class="btn btn-primary" >Adicionar</a>
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
      <th>Cod_candidato</th>
      <th>Cpf</th>
      <th>Nome</th>
      <th>Email</th>
	 <th>Cargo</th>
      <th>Arquivo</th>		
      <th>Ação</th>
	  </tr>
    </thead>
    <tbody>
       <?php while($row_tab_candidato = $result->fetch(PDO::FETCH_ASSOC)){ ?>
         <tr> 
<td><?php echo $row_tab_candidato["cod_candidato"]; ?></td>
			 <td><?php echo $row_tab_candidato["cpf"]; ?></td>
<td><?php echo $row_tab_candidato["nome"]; ?></td> 
<td><?php echo $row_tab_candidato["email"]; ?></td> 
<td><?php echo $row_tab_candidato["cod_cargo"]; ?></td> 
<td><?php echo $row_tab_candidato["arquivo"]; ?></td> 
<td><a data-toggle="modal" data-target="#myModal" href="forms/alterar_tab_candidato.php?cod_candidato=<?php echo $row_tab_candidato['cod_candidato']; ?>"> <span class="glyphicon glyphicon-pencil"></span> </a><a data-toggle="modal" data-target="#myModal" href="forms/excluir_tab_candidato.php?cod_candidato=<?php echo $row_tab_candidato["cod_candidato"]; ?>"> <span class="glyphicon glyphicon-trash"></span> </a></td>
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