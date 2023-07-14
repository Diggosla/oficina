<?php
include"includes/cabecalho.php";
include"includes/menu.php";
include"includes/conexao.php";
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
        <td>veículo</td>
        <td>Cor</td>
        <td>modelo</td>
        <td>Placa</td>
        <td></td>
    </tr>

<!-- fim da linha titulo -->

    <?php
    $sql = "select * from t_carros";
    $todos_os_carros = mysqli_query($conexao,$sql);
    while($um_carro = mysqli_fetch_assoc($todos_os_carros)):        
    ?>
    <tr >
    <td><?php echo $um_carro['veicolo'];?></td>
    <td><?php echo $um_carro['cor']; ?></td>
    <td><?php echo $um_carro['modelo'];?></td>
    <td><?php echo $um_carro['placa']; ?></td>
   
   
    <td>
        <a href="visualizar.php?id=<?php echo $um_carro['id'];?>">Visualizar</a>
        <a href="editar.php?id=<?php echo $um_carro['id'];?>">Editar</a>
        <a href="deletar.php?id=<?php echo $um_carro['id'];?>">Excluir</a>
    </td>
 </tr>
    <?php
    endwhile;
    ?>

</table>

<?php
include"includes/rodape.php";
?>