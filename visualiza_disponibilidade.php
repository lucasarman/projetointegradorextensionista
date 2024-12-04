<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles/visualiza.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disponibilidade Cadastrada</title>
</head>

<body>
  <center>
    <h1>Disponibilidade dos Trabalhadores</h1>

    <table border="4">
      <tr>
        <td>NOME</td>
        <td>SOBRENOME</td>
        <td>EMAIL</td>
        <td>STATUS</td>
        <td>EXPERIÊNCIA</td>
        <td>ÁREA</td>
        <td>AÇÕES</td>
      </tr>
      <?php
      require("conecta.php");


      $dados_select = mysqli_query($conn, "SELECT id, nome, sobrenome, email, status, experiencia, area FROM disponibilidade");


      while ($dado = mysqli_fetch_array($dados_select)) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($dado['nome']) . '</td>';
        echo '<td>' . htmlspecialchars($dado['sobrenome']) . '</td>';
        echo '<td>' . htmlspecialchars($dado['email']) . '</td>';
        echo '<td>' . htmlspecialchars($dado['status']) . '</td>';
        echo '<td>' . htmlspecialchars($dado['experiencia']) . '</td>';
        echo '<td>' . htmlspecialchars($dado['area']) . '</td>';
        echo '<td>
            <a href="atualiza_disponibilidade.php?id=' . htmlspecialchars($dado['id']) . '"><button>Editar</button></a>
            <a href="excluir_disponibilidade.php?id=' . htmlspecialchars($dado['id']) . '" onclick="return confirm(\'Tem certeza que deseja excluir?\')"><button>Excluir</button></a>
          </td>';
        echo '</tr>';
      }
      ?>
    </table>

    <br />
    <a href="index.html"><input type="button" value="Voltar"></a>
  </center>
</body>

</html>