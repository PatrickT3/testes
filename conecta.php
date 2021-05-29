<?php 
$servido = 'localhost';
$banco = 'bsi2018';
$usuario = 'root';
$senha = '';

$conn = mysqli_connect($servido,$usuario,$senha);
$db = mysqli_select_db($conn,$banco);

if(!$db){
    echo "falha na conxao!!!";
}else{
    header('location: query.php');
}
?>