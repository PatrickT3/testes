<?php
include 'conecta.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$qr = mysqli_query($conn,"UPDATE teste SET nome = '$nome',idade = '$idade',email = '$email',cpf = '$cpf' WHERE id = $id ");

if($qr){

    header('Location: query.php');
}else{
    echo "informação não foi atualizada";
}
//UPDATE `teste` SET `cpf` = '8674443' WHERE `teste`.`id` = 12;