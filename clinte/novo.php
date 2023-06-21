<?php
include"../includes/cabecalho.php";
include"../includes/menu.php";
?>

<center >
<h1>novo carro</h1>
<p>Vamos cadastrar um carro no novo sistema.</p>
<br>
<form action="inserir.php" method="post">
    nome : <input name="nome" require maxlength="50">
    <br>
    Data do seu aniversario: <input name="data" type="date" require maxlength="50">
     <br>
     CPF : <input name="cpf" require maxlength="50">
     <br>
    Seu telefone: <input name="telefone"  require maxlength="50">
     <br>
     Sua cidade : <input name="cidade">
     <br>
     seu veículo : <input name="veicolo">
<br>
    <button type="submit">SALVAR</button>
</form>
</center>
<?php
include"../includes/rodape.php";
?>