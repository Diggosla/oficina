<?php
include "includes/cabecalho.php";
include "includes/menu.php";
include "includes/conexao.php";

$id = $_GET["id"];

$veicolo = "";
$cor = "";
$modelo = "";
$placa = "";


$sql = "select * from t_carros where id= $id";
$todos_os_carros = mysqli_query($conexao, $sql);
while ($um_carro = mysqli_fetch_assoc($todos_os_carros)):

  $veicolo = $um_carro["veicolo"];
  $cor = $um_carro["cor"];
  $modelo = $um_carro["modelo"];
  $placa = $um_carro["placa"];


endwhile;
?>

<center>
<h1>|ficha de carros|</h1>
</center>


<style>
    body{
        color: black;
    }
</style>

<div class="container-fluid">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>veículo</th>
        <th>Cor</th>
        <th>modelo</th>
        <th>Placa</th>
      </tr>
    </thead>


    <tbody class="border-while">
      <tr>
        <td>
          <?php echo $veicolo; ?>
        </td>
        <td>
          <?php echo $cor; ?>
        </td>
        <td>
          <?php echo $modelo; ?>
        </td>
        <td>
          <?php echo $placa; ?>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="col text-center">
      <a href="../carros/selecionar.php">
        <button class="btn btn-secondary w-25">Voltar</button></a>
    </div>
  </div>

</div>
<br>

<?php
include "includes/rodape.php";
?>