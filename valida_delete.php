<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM cadastro WHERE id = '".$id."';";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar relizar uma exclusão.');
    if($res){
        echo 'Registro excluído com sucesso!';
    }else{
        echo 'Erro na exclusão de dados.';
    }
    mysqli_close($con);
    header('location: form_select.php');
?>