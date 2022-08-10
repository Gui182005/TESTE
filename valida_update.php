<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$genero = $_POST['genero'];
$sql = "UPDATE cadastro SET nome= '".$nome."',sobrenome= '".$sobrenome."',genero= '".$genero."' WHERE id='".$id."'";
$res = mysqli_query($con,$sql) or die('Erro ao tentar realizar uma atualização.');
if($res){
    echo 'Registro atualizado com sucesso!';
}else{
    echo 'Erro na atualização de dados.';
}    
mysqli_close($con);
header('location: form_select.php');
?>