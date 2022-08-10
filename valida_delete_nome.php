<?php
    include 'conexao.php';
    $nome = $_POST['nome'];
    $sql = "DELETE FROM cadastro WHERE nome = '".$nome."';";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar relizar uma exclusão.');
    if($res){
        echo 'Registro excluído com sucesso!';
    }else{
        echo 'Erro na exclusão de dados.';
    }
    mysqli_close($con);
    header('location: form_select.php');
    ?>