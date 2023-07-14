<?php
include "includes/cabecalho.php";
include "includes/menu.php";
?>

<center>
    <h1>|novo carro|</h1>
    <p>Vamos cadastrar um carro no novo sistema.</p>
    <br>


    <div class="row ms-1 me-1">
        <div class="col">
            <form action="inserir.php" method="post">
                <div class="row">
                    <div class="col-6 mb-2">
                        <label class="form-label">seu veículo:</label>
                        <input class="form-control" name="veicolo">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Cor do seu veículo: </label>
                        <input class="form-control" name="cor">
                    </div>

                    <div class="col-6 mb-2">
                        <label class="form-label">modelo do seu veículo: </label>
                        <input class="form-control" name="modelo">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Placa do seu veículo</label>
                        <input class="form-control" name="placa">
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