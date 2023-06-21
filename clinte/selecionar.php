<?php
include"../includes/cabecalho.php";
include"../includes/menu.php";
include"../includes/conexao.php";
?>

<p>
    <a href="novo.php"></a>
    
</p> 
<center>
<h1>Lista de carros</h1>
</center>
<br>
<table class="table table-bordered table-dark ">
    <tr>
        <td>Codigo</td>
        <td>nome</td>
        <td>Data</td>
        <td>CPF</td>
        <td>Telefone</td>
        <td>Cidade</td>
        <td>veículo</td>
        <td>Cor</td>
        <td>modelo</td>
        <td>Placa</td>
    </tr>

<!-- fim da linha titulo -->

    <?php
    $sql = "select * from t_carros";
    $todos_os_carros = mysqli_query($conexao,$sql);
    while($um_aluno = mysqli_fetch_assoc($todos_os_carros)):        
    ?>
    <tr >
    <td><?php echo $um_aluno['id']; ?></td>
    <td><?php echo $um_aluno['nome'];?></td>
    <td><?php echo $um_aluno['data_nacimento']; ?></td>
    <td><?php echo $um_aluno['cpf'];?></td>
    <td><?php echo $um_aluno['telefone'];?></td>
    <td><?php echo $um_aluno['cidade']; ?></td>
    <td><?php echo $um_aluno['veicolo'];?></td>
    <td><?php echo $um_aluno['cor']; ?></td>
    <td><?php echo $um_aluno['modelo'];?></td>
    <td><?php echo $um_aluno['placa']; ?></td>
   
    <td>
        <a href="#">Visualizar</a>
        <a href="#">Editar</a>
        <a href="deletar.php?id=<?php echo $um_aluno['id'];?>">Excluir</a>
    </td>
 </tr>
    <?php
    endwhile;
    ?>

</table>

<?php
include"../includes/rodape.php";
?>