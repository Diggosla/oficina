<?php
include "includes/cabecalho.php";
include "includes/menu.php";
include "includes/conexao.php";

$id = $_GET["id"];

$nome = "";
$sobre_nome = "";
$cpf = "";
$telefone = "";
$data_nascimento = "";
$estado = "";
$cidade = "";



$sql = "select * from t_usuarios where id= $id";
$todos_os_usuarios = mysqli_query($conexao, $sql);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):

  $nome = $um_usuario["nome"];
  $sobre_nome = $um_usuario["sobre_nome"];
  $cpf = $um_usuario["cpf"];
  $telefone = $um_usuario["telefone"];
  $data_nascimento = $um_usuario["data_nascimento"];
  $estado = $um_usuario["estado"];
  $cidade = $um_usuario["cidade"];

endwhile;
?>

<center>
  <h1>
    |ficha de usuarios
  </h1>
</center>


<style>
  body {
    color: black;
  }
</style>

<div class="container-fluid">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>cpf</th>
        <th>telefone</th>
        <th>data_nascimento</th>
        <th>estado</th>
        <th>cidade</th>
      </tr>
    </thead>


    <tbody class="border-while">
      <tr>
        <td>
          <?php echo $nome; ?>
        </td>
        <td>
          <?php echo $sobre_nome; ?>
        </td>
        <td>
          <?php echo $cpf; ?>
        </td>
        <td>
          <?php echo $telefone; ?>
        </td>
        <td>
          <?php echo $data_nascimento; ?>
        </td>
        <td>
          <?php echo $estado; ?>
        </td>
        <td>
          <?php echo $cidade; ?>
        </td>
      </tr>
    </tbody>
  </table>





  <div class="row">
    <div class="col text-center">
      <a href="../usuarios/selecionar.php">
        <button class="btn btn-secondary w-25">Voltar</button></a>
    </div>
  </div>

</div>
<br>

<?php
include "includes/rodape.php";
?>