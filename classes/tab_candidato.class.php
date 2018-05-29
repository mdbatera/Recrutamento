<?php
include_once('conexao.class.php');


/* Gerador de Classes de Marcio Dantas */
/* Arquivo gerado em: 29/05/2018 20:23:24 */


class Tab_candidato{


public $cod_candidato;
public $cpf;
public $nome;
public $email;
public $arquivo;


public function setCod_candidato($cod_candidato) {
 $this->cod_candidato=$cod_candidato;
}

public function setCpf($cpf) {
 $this->cpf=$cpf;
}

public function setNome($nome) {
 $this->nome=$nome;
}

public function setEmail($email) {
 $this->email=$email;
}

public function setArquivo($arquivo) {
 $this->arquivo=$arquivo;
}

public function getCod_candidato() {
 return $this->cod_candidato;
}

public function getCpf() {
 return $this->cpf;
}

public function getNome() {
 return $this->nome;
}

public function getEmail() {
 return $this->email;
}

public function getArquivo() {
 return $this->arquivo;
}


public function inserirTab_candidato(){
try{$pdo = Database::conexao();
$consulta = $pdo->prepare("INSERT into tab_candidato(cod_candidato, cpf, nome, email, arquivo) values (:cod_candidato, :cpf, :nome, :email, :arquivo);");
$consulta->bindParam(':cod_candidato', $this->cod_candidato);
$consulta->bindParam(':cpf', $this->cpf);
$consulta->bindParam(':nome', $this->nome);
$consulta->bindParam(':email', $this->email);
$consulta->bindParam(':arquivo', $this->arquivo);

$consulta->execute();
header('Location: ../index.php');
}catch(PDOException $e) {echo "Ocorreu um erro: $e";}
}

public function alterarTab_candidato(){
$pdo = Database::conexao();
try{$consulta = $pdo->prepare("UPDATE tab_candidato SET cod_candidato = :cod_candidato, cpf = :cpf, nome = :nome, email = :email, arquivo = :arquivo WHERE cod_candidato = :cod_candidato;");
$consulta->bindParam(':cod_candidato', $this->cod_candidato);
$consulta->bindParam(':cpf', $this->cpf);
$consulta->bindParam(':nome', $this->nome);
$consulta->bindParam(':email', $this->email);
$consulta->bindParam(':arquivo', $this->arquivo);

$consulta->execute();
header('Location: ../index.php');
}catch(PDOException $e) {echo "Ocorreu um erro: $e";}
}

public function excluirTab_candidato(){
$pdo = Database::conexao();
try{
$consulta = $pdo->prepare("DELETE FROM tab_candidato WHERE cod_candidato = :cod_candidato;");
$consulta->bindParam(':cod_candidato', $this->cod_candidato);
$consulta->bindParam(':cpf', $this->cpf);
$consulta->bindParam(':nome', $this->nome);
$consulta->bindParam(':email', $this->email);
$consulta->bindParam(':arquivo', $this->arquivo);

$consulta->execute();
header('Location: ../index.php');
}catch(PDOException $e) {echo "Ocorreu um erro: $e";}
}

public function exibirTab_candidato(){
$pdo = Database::conexao();
$sql = "SELECT * FROM tab_candidato order by cod_candidato DESC LIMIT 20";
$consulta = $pdo->prepare($sql);
$consulta->execute();
return $consulta;

}

public function exibirTab_candidatoCod($cod){
$pdo = Database::conexao();
$sql = "SELECT * FROM tab_candidato where cod_candidato = '$cod'";
$consulta = $pdo->prepare($sql);
$consulta->execute();
return $consulta;

}

public function localizarTab_candidato($nome){
$pdo = Database::conexao();
$sql = "SELECT * FROM tab_candidato where  cpf like '%$nome%'";
$consulta = $pdo->prepare($sql);
$consulta->execute();
return $consulta;

}
}
?>