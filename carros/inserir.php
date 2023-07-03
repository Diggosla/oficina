<?php
include"../includes/conexao.php";


$veicolo = $_POST["veicolo"];
$cor = $_POST["cor"];
$modelo = $_POST["modelo"];
$placa = $_POST["placa"];

$sql = "insert into t_carros(veicolo,cor,modelo,placa) values ('$veicolo','$cor','$modelo','$placa')";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
 
header("location: selecionar.php")

?>
