<?php 
include('../../classes/tab_candidato.class.php');
//Cria o Objeto
$c = new Tab_candidato();
$result_excluir = $c->exibirTab_candidatoCod($_GET['cod_tab_candidato']);
$row_tab_candidato = $result_excluir->fetch(PDO::FETCH_ASSOC);
$cod_tab_candidato = $_GET['cod_tab_candidato'];
?>
<!-- Modal content-->
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Excluir Carreta</h4>
</div>
<div class="modal-body">
  <div class="alert alert-danger"> <strong>Perigo!</strong> Você está prestes a apagar o registro.</div>
  <form method="POST" name="form" action="processamento/processar_tab_candidato.php?cod_tab_candidato=$cod_tab_candidato" role="form" ><div class="form-group">
      <label for="Cod_candidato">Cod_candidato:</label>
      <input type="text"  id="cod_candidato" class="form-control" name="cod_candidato" required readonly value="<?php echo $row_tab_candidato["cod_candidato"]; ?>">
    </div><div class="form-group">
      <label for="Cpf">Cpf:</label>
      <input type="text"  id="cpf" class="form-control" name="cpf" required readonly value="<?php echo $row_tab_candidato["cpf"]; ?>">
    </div><div class="form-group">
      <label for="Nome">Nome:</label>
      <input type="text"  id="nome" class="form-control" name="nome" required readonly value="<?php echo $row_tab_candidato["nome"]; ?>">
    </div><div class="form-group">
      <label for="Email">Email:</label>
      <input type="text"  id="email" class="form-control" name="email" required readonly value="<?php echo $row_tab_candidato["email"]; ?>">
    </div><div class="form-group">
      <label for="Arquivo">Arquivo:</label>
      <input type="text"  id="arquivo" class="form-control" name="arquivo" required readonly value="<?php echo $row_tab_candidato["arquivo"]; ?>">
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


