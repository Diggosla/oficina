<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";


$id = $_GET['id'];

$veicolo = "";
$cor = "";
$modelo = "";
$placa = "";


$sql = "select * from t_carros where id = $id";
$todos_os_carros = mysqli_query($conexao, $sql);
while ($um_carro = mysqli_fetch_assoc($todos_os_carros)):

    $veicolo = $um_carro["veicolo"];
    $cor = $um_carro["cor"];
    $modelo = $um_carro["modelo"];
    $placa = $um_carro["placa"];

endwhile;
?>
<h1>Editar carro
    <?php echo $id; ?>
</h1>

<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    <div class="row ms-1 me-1">
        <div class="col">
            <div class="row">
                <div class="col-6 mb-2">
                    <label class="form-label">seu veículo:</label>
                    <input class="form-control" name="veicolo" value="<?php echo $veicolo; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">cor</label>
                    <input class="form-control" name="cor" value="<?php echo $cor; ?>">
                </div>

                <div class="col-6 mb-2">
                    <label class="form-label">modelo</label>
                    <input class="form-control" name="modelo" value="<?php echo $modelo; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Placa do seu veículo</label>
                    <input class="form-control" name="placa" value="<?php echo $placa; ?>">
                </div>
            </div>
        </div>
    </div>
    <br>
    <center>
<button type="submit" class="btn btn-secondary w-25 ">atualizar</button>
</center>
</form>


<br>
<?php
mysqli_close($conexao);
include "../includes/rodape.php"
    ?>