<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>
    <h1>Inserção dos dados</h1>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="form_insert.php">Inserir</a></li>
    <li><a href="form_select.php">Visualizar</a></li>
</ul>
    <h3>Formulário de Cadastro</h3><br>
    <form name="cadastro" action="valida_insert.php" method="POST">
    <label>Nome: </label><input type="text" name="nome" size="30" required><br>
    <label>Sobrenome: </label><input type="text" name="sobrenome" size="45" required><br>
    <input type="radio" name="genero" id="" value="f" required><label>Feminino</label>
    <input type="radio" name="genero" id="" value="m"><label>Masculino</label><br>
    <input type="submit" name="salvar" id="" value="Salvar">
    <input type="reset" name="limpar" id="" value="Limpar">
    </form>
</body>
</html>