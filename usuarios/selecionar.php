<?php
include"includes/cabecalho.php";
include"includes/menu.php";
include"includes/conexao.php";
?>

<p>
    <a href="novo.php"></a>
    
</p> 
<center>
<h1>Lista de usuarios</h1>
</center>
<br>
<table class="table table-bordered table-dark ">
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>cpf</td>
        <td>telefone</td>
        <td>data_nascimento</td>
        <td>estado</td>
        <td>cidade</td>
    </tr>

<!-- fim da linha titulo -->

    <?php
    $sql = "select * from t_usuarios";
    $todos_os_usuarios = mysqli_query($conexao,$sql);
    while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):        
    ?>
    <tr >
    <td><?php echo $um_usuario['nome'];?></td>
    <td><?php echo $um_usuario['sobre_nome']; ?></td>
    <td><?php echo $um_usuario['cpf'];?></td>
    <td><?php echo $um_usuario['telefone']; ?></td>
    <td><?php echo $um_usuario['data_nascimento']; ?></td>
    <td><?php echo $um_usuario['estado']; ?></td>
    <td><?php echo $um_usuario['cidade']; ?></td>

   
   
    <td>
        <a href="visualizar.php?id=<?php echo $um_usuario['id'];?>">Visualizar</a>
        <a href="editar.php?id=<?php echo $um_usuario['id'];?>">Editar</a>
        <a href="deletar.php?id=<?php echo $um_usuario['id'];?>">Excluir</a>
    </td>
 </tr>
    <?php
    endwhile;
    ?>

</table>

<?php
include"includes/rodape.php";
?>