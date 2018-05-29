<?php
include_once('conexao.class.php');


/* Gerador de Classes de Marcio Dantas */
/* Arquivo gerado em: 29/05/2018 20:23:20 */


class Cargos{


public $cod_cargo;
public $nome;
public $descricao;
public $status;


public function setCod_cargo($cod_cargo) {
 $this->cod_cargo=$cod_cargo;
}

public function setNome($nome) {
 $this->nome=$nome;
}

public function setDescricao($descricao) {
 $this->descricao=$descricao;
}

public function setStatus($status) {
 $this->status=$status;
}

public function getCod_cargo() {
 return $this->cod_cargo;
}

public function getNome() {
 return $this->nome;
}

public function getDescricao() {
 return $this->descricao;
}

public function getStatus() {
 return $this->status;
}


public function inserirCargos(){
try{$pdo = Database::conexao();
$consulta = $pdo->prepare("INSERT into cargos(cod_cargo, nome, descricao, status) values (:cod_cargo, :nome, :descricao, :status);");
$consulta->bindParam(':cod_cargo', $this->cod_cargo);
$consulta->bindParam(':nome', $this->nome);
$consulta->bindParam(':descricao', $this->descricao);
$consulta->bindParam(':status', $this->status);

$consulta->execute();
header('Location: ../index.php');
}catch(PDOException $e) {echo "Ocorreu um erro: $e";}
}

public function alterarCargos(){
$pdo = Database::conexao();
try{$consulta = $pdo->prepare("UPDATE cargos SET cod_cargo = :cod_cargo, nome = :nome, descricao = :descricao, status = :status WHERE cod_cargo = :cod_cargo;");
$consulta->bindParam(':cod_cargo', $this->cod_cargo);
$consulta->bindParam(':nome', $this->nome);
$consulta->bindParam(':descricao', $this->descricao);
$consulta->bindParam(':status', $this->status);

$consulta->execute();
header('Location: ../index.php');
}catch(PDOException $e) {echo "Ocorreu um erro: $e";}
}

public function excluirCargos(){
$pdo = Database::conexao();
try{
$consulta = $pdo->prepare("DELETE FROM cargos WHERE cod_cargo = :cod_cargo;");
$consulta->bindParam(':cod_cargo', $this->cod_cargo);
$consulta->bindParam(':nome', $this->nome);
$consulta->bindParam(':descricao', $this->descricao);
$consulta->bindParam(':status', $this->status);

$consulta->execute();
header('Location: ../index.php');
}catch(PDOException $e) {echo "Ocorreu um erro: $e";}
}

public function exibirCargos(){
$pdo = Database::conexao();
$sql = "SELECT * FROM cargos order by cod_cargo DESC LIMIT 20";
$consulta = $pdo->prepare($sql);
$consulta->execute();
return $consulta;

}

public function exibirCargosCod($cod){
$pdo = Database::conexao();
$sql = "SELECT * FROM cargos where cod_cargo = '$cod'";
$consulta = $pdo->prepare($sql);
$consulta->execute();
return $consulta;

}

public function localizarCargos($nome){
$pdo = Database::conexao();
$sql = "SELECT * FROM cargos where  nome like '%$nome%'";
$consulta = $pdo->prepare($sql);
$consulta->execute();
return $consulta;

}
}
?>