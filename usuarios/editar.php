<?php
include "includes/cabecalho.php";
include "includes/menu.php";
include "includes/conexao.php";


$id = $_GET['id'];


$nome = "";
$sobre_nome = "";
$cpf = "";
$telefone = "";
$data_nascimento = "";
$estado = "";
$cidade = "";




$sql = "select * from t_usuarios where id = $id";
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
<h1>Editar usuarios
    <?php echo $id; ?>
</h1>

<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    <div class="row ms-1 me-1">
        <div class="col">
            <div class="row">
                <div class="col-6 mb-2">
                    <label class="form-label">Seu nome:</label>
                    <input class="form-control" name="nome" value="<?php echo $nome; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Seu sobrenome:</label>
                    <input class="form-control" name="sobre_nome" value="<?php echo $sobre_nome; ?>">
                </div>

                <div class="col-6 mb-2">
                    <label class="form-label">Seu cpf</label>
                    <input class="form-control" name="cpf" value="<?php echo $cpf; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Seu telefone</label>
                    <input class="form-control" name="telefone" value="<?php echo $telefone; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">sua data de nascimento</label>
                    <input class="form-control" type="date" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Seu estado</label>
                    <input class="form-control" name="estado" value="<?php echo $estado; ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Sua cidade</label>
                    <input class="form-control" name="cidade" value="<?php echo $cidade; ?>">
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
include "includes/rodape.php"
    ?>