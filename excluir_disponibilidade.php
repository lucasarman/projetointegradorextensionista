<?php
require("conecta.php");


$id = $_GET['id'];


$sql = "DELETE FROM disponibilidade WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "<center><h1>Registro Excluído com Sucesso</h1>";
  echo "<a href='visualiza_disponibilidade.php'><input type='button' value='Voltar'></a></center>";
} else {
  echo "Erro ao excluir: " . $conn->error;
}
