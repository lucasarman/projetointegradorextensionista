<?php
require("conecta.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$status = $_POST['status'];
$experiencia = $_POST['experiencia'];
$area = $_POST['area'];


$sql = "INSERT INTO disponibilidade (nome, sobrenome, email, status, experiencia, area)
VALUES ('$nome', '$sobrenome', '$email', '$status', '$experiencia', '$area')";

if ($conn->query($sql) === TRUE) {
  echo "<center><h1>Registro Inserido com Sucesso</h1>";
  echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
} else {
  echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
}
