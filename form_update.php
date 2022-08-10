<?php
    include "conexao.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM cadastro WHERE id = ".$id.";";
    $result = mysqli_query($con,$sql) or die("Erro ao retornar dados");

    while($res = mysqli_fetch_array($result))
    {
        $id = $res['id'];
        $nome = $res['nome'];
        $sobrenome = $res['sobrenome'];
        $genero = $res['genero'];
    }
    if($genero == 'f'){
        $fem = 'checked';
        $mas = '';
    }else{
        $fem = '';
        $mas = 'checked';
    }
    mysqli_close($con);
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CRUD</title>
    </head>
    <body>
        <h1>Atualização dos dados</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="form_insert.php">Inserir</a></li>
    <li><a href="form_select.php">Visualizar</a></li>
    <li><a href="form_delete.php">Excluir</a></li>
</ul>
<h3>Edição de dados</h3><br>
    <form name="cadastro" action="valida_update.php" method="post">
    <input type="hidden" name="id" size="30" value="<?php echo $id;?>">
    <label>Nome: </label><input type="text" name="nome" size="30" required value="<?php echo $nome;?>"><br>
    <label>Sobrenome: </label><input type="text" name="sobrenome" size="45" required value="<?php echo $sobrenome;?>"><br>
    <input type="radio" name="genero" id="" value="f" <?php echo $fem;?>><label>Feminino</label>
    <input type="radio" name="genero" id="" value="m" <?php echo $mas;?>><label>Masculino</label><br>
    <input type="submit" name="editar" value="Editar">
    <input type="reset" name="limpar" value="Limpar"><br>
    </form>
    </body>
    </html>
