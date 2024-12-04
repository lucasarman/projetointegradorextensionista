<?php
require("conecta.php");


$id = $_POST['id'];
$status = $_POST['status'];
$area = $_POST['area'];


$sql = "UPDATE disponibilidade SET status = '$status', area = '$area' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Registro Atualizado com Sucesso</h1>";
    echo "<a href='visualiza_disponibilidade.php'><input type='button' value='Voltar'></a></center>";
} else {
    echo "Erro ao atualizar: " . $conn->error;
}
?>
