<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>
<h1>Visualização dos dados</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="form_insert.php">Inserir</a></li>
    <li><a href="form_select.php">Visualizar</a></li>
    <li><a href="form_delete.php">Excluir</a></li>
</ul>
    <?php
    include "conexao.php";

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>NOME</th>";
    echo "<th>SOBRENOME</th>";
    echo "<th>GENERO</th>";
    echo "<th>AÇÕES</th>";
    echo "</tr>";

    $sql = "SELECT * FROM cadastro";
    $result = mysqli_query($con,$sql) or die("Erro ao retornar dados");

    while ($res = mysqli_fetch_array($result))
    {
        $id = $res['id'];
        echo "<tr>";
        echo "<td>".$res['nome']."</td>";
        echo "<td>".$res['sobrenome']."</td>";
        echo "<td>".$res['genero']."</td>";
        echo "<td><a href= 'form_insert.php'>Novo</a> -- <a href= 'form_update.php?id=$id'>Editar</a> -- <a href='valida_delete.php?id=$id'>Excluir</a> </td>";
        echo "</tr>";
    }
    mysqli_close($con);
    echo "</table>";
    ?>  
</body>
</html>