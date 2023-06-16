<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    include "cabecalho.php"
        ?>
    <form method="POST"action="validar.php">
        <input name="usuario" placeholder="Nome" 
        require> 
        <input name="senha" type="password" placeholder="senha" 
        require maxlength="20">
        <br>
        <button type="subimit">Acessar Sistema</button>
    </form>
    <?php
include "rodape.php"
?>
</body>
</html>