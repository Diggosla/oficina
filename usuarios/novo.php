<?php
include "includes/cabecalho.php";
include "includes/menu.php";
?>

<center>
    <h1>|novo Usuario|</h1>
    <p>Vamos um novo Usuario no sistema.</p>
    <br>


    <div class="row ms-1 me-1">
        <div class="col">
            <form action="inserir.php" method="post">
                <div class="row">
                    <div class="col-6 mb-2">
                        <label class="form-label">seu nome:</label>
                        <input class="form-control" name="nome">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">sobrenome: </label>
                        <input class="form-control" name="Sobre_nome">
                    </div>

                    <div class="col-6 mb-2">
                        <label class="form-label">Seu cpf: </label>
                        <input class="form-control" name="cpf">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Seu telefone</label>
                        <input class="form-control" name="telefone">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Sua data de nascimento</label>
                        <input class="form-control" type="date" name="data_nascimento">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Seu estado</label>
                        <input class="form-control" name="estado">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Sua cidade</label>
                        <input class="form-control" name="cidade">
                    </div>
                </div>

        </div>
        <br>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-outline-secondary w-25" type="submit">Adicionar</button>
            </div>
        </div>
        </form>
    </div>

    <br>



</center>
<?php
include "includes/rodape.php";
?>