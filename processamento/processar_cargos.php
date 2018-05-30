<?php
include_once('../classes/cargos.class.php');


//Cria o Objeto
$c = new Cargos();

//Popula o objeto
$MM_action = $_POST["MM_action"];
if(isset($_POST['cod_cargo'])){
	
	$c->setCod_cargo($_POST['cod_cargo']);
	}else{$c->setCod_cargo(0);} $c->setNome($_POST['nome']); 
$c->setDescricao($_POST['descricao']); 
$c->setStatus($_POST['status']);


//Verifica o tipo da ação e salva no banco.
if(isset($_POST["MM_action"])) {	

if($MM_action == 1) {
$c->inserirCargos();
}
if($MM_action == 2) {
$c->alterarCargos();
}
if($MM_action == 3) {
$c->excluirCargos();
}

}

?>

