<?php
include "includes/conexao.php";

$nome = $_POST["nome"];
$Sobre_nome = $_POST["Sobre_nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$data_nascimento = $_POST["data_nascimento"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];

$sql = "
insert into t_usuarios
(nome,
Sobre_nome,
cpf,
telefone,
data_nascimento,
estado,
cidade)
values
('$nome',
'$Sobre_nome',
'$cpf',
'$telefone',
'$data_nascimento',
'$estado',
'$cidade')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php")

    ?>