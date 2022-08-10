<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>
<h1>Exclusão dos dados</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="form_insert.php">Inserir</a></li>
    <li><a href="form_select.php">Visualizar</a></li>
    <li><a href="form_delete.php">Excluir</a></li>
</ul>
    <h3>Exclusão por nome</h3><br>
    <form name="cadastro" action="valida_delete_nome.php" method="post">
    <label>Nome: </label><input type="text" name="nome" size="30" required><br>
    <input type="submit" name="excluir" value="Excluir">
    <input type="reset" name="limpar" value="Limpar"><br>
    </form>
</body>
</html>