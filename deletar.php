<?php

include 'conecta.php';
$id = $_GET['id'];

$qr = mysqli_query($conn,"DELETE FROM teste WHERE id='$id'");

if($qr){
    header('Location: query.php');
}else{
    echo "não foi atualizada";
}