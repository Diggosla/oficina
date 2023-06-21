<?php
include"../includes/conexao.php";

$nome = $_POST["nome"];
$data = $_POST["data"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$veicolo = $_POST["veicolo"];

$sql = "insert into t_carros(nome,data_nacimento,cpf,telefone,cidade,veicolo) values ('$nome','$data','$cpf','$telefone','$cidade-SP','$veicolo')";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
 
header("location: selecionar.php")



// <td><?php echo $um_aluno['cor']; ?></td>
// <td><?php echo $um_aluno['modelo'];?></td>
// <td><?php echo $um_aluno['placa']; ?></td>


?>
