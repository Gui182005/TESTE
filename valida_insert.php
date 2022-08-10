<?php
    include 'conexao.php';
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $genero = $_POST['genero'];
    $sql = "INSERT INTO cadastro (nome,sobrenome,genero) VALUES ('".$nome."','".$sobrenome."','".$genero."')";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar realizar uma inserção');
    if($res){
        echo 'Registro cadastro com sucesso!';
    }else{
        echo 'Erro na inserção de dados.';
    }    
    mysqli_close($con);
    header('location: form_select.php');
?>