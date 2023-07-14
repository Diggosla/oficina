<?php
include "includes/conexao.php";

$id = $_GET ['id'];


$nome= $_POST ["nome"];
$sobre_nome= $_POST ["sobre_nome"];
$cpf= $_POST ["cpf"];
$telefone= $_POST ["telefone"];
$data_nascimento= $_POST ["data_nascimento"];
$estado= $_POST ["estado"];
$cidade= $_POST ["cidade"];


$sql = "update t_usuarios set nome = '$nome', sobre_nome = '$sobre_nome', cpf = '$cpf',  telefone = '$telefone' , data_nascimento = '$data_nascimento', estado = '$estado', cidade = '$cidade' where id = '$id' ";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

header ("location: selecionar.php");
?>