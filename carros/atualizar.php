<?php
include "../includes/conexao.php";

$id = $_GET ['id'];

$veicolo= $_POST ["veicolo"];
$cor= $_POST  ["cor"];
$modelo= $_POST  ["modelo"];
$placa= $_POST  ["placa"];


$sql = "update t_carros set veicolo = '$veicolo', cor = '$cor', modelo = '$modelo',  placa = '$placa' where id = '$id' ";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header ("location: selecionar.php");
?>