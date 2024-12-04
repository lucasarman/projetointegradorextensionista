<?php
require("conecta.php");


$id = $_GET['id'];


$sql = "SELECT * FROM disponibilidade WHERE id = $id";
$result = $conn->query($sql);
$dado = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Disponibilidade</title>
</head>

<body>
    <center>
        <h1>Atualizar Disponibilidade</h1>
        <form method="POST" action="salvar_atualizacao.php">
            <input type="hidden" name="id" value="<?= $dado['id'] ?>">
            <div>
                <label for="status"><strong>Status de Trabalho</strong></label>
                <select name="status" id="status" required>
                    <option value="Disponível" <?= $dado['status'] == 'Disponível' ? 'selected' : '' ?>>Disponível</option>
                    <option value="Trabalhando" <?= $dado['status'] == 'Trabalhando' ? 'selected' : '' ?>>Trabalhando</option>
                    <option value="Em Pausa" <?= $dado['status'] == 'Em Pausa' ? 'selected' : '' ?>>Em Pausa</option>
                    <option value="Fora do Horário" <?= $dado['status'] == 'Fora do Horário' ? 'selected' : '' ?>>Fora do Horário</option>
                </select>
            </div>
            <div>
                <label for="area"><strong>Área</strong></label>
                <select name="area" id="area" required>
                    <option value="FRONTEND" <?= $dado['area'] == 'FRONTEND' ? 'selected' : '' ?>>FRONTEND</option>
                    <option value="BACKEND" <?= $dado['area'] == 'BACKEND' ? 'selected' : '' ?>>BACKEND</option>
                    <option value="FULLSTACK" <?= $dado['area'] == 'FULLSTACK' ? 'selected' : '' ?>>FULLSTACK</option>
                </select>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </center>
</body>

</html>
