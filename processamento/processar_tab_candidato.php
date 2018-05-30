<?php
include_once('../classes/tab_candidato.class.php');


//Cria o Objeto
$c = new Tab_candidato();

//Popula o objeto
$MM_action = $_POST["MM_action"];
if(isset($_POST['cod_candidato'])){
	
	$c->setCod_candidato($_POST['cod_candidato']);
	}else{$c->setCod_candidato(0);} 
$c->setCpf($_POST['cpf']); 
$c->setNome($_POST['nome']); 
$c->setEmail($_POST['email']);
$c->setCod_cargo($_POST['cod_cargo']);
$c->setArquivo($_POST['arquivo']); 


//Verifica o tipo da ação e salva no banco.
if(isset($_POST["MM_action"])) {	

if($MM_action == 1) {
$c->inserirTab_candidato();
}
if($MM_action == 2) {
$c->alterarTab_candidato();
}
if($MM_action == 3) {
$c->excluirTab_candidato();
}

}

?>

