<?php
include 'conecta.php';
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$insere = "INSERT INTO teste values(null,'{$nome}','{$idade}','{$email}','{$cpf}')";

$qr = mysqli_query($conn,$insere);

if ($qr){
    header('location: query.php');
}else{
    echo "Dados não inseridos";
}
?>