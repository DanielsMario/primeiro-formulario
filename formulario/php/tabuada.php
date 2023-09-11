<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<?php
include_once('dashboard.php')
?>
<form action="resultadotabuada.php" method="post">
<div class="caixa">
    <h1>Escolha qualquer número e veja a sua Tabuada até 10!</h1>
        <label for="numero"></label>
        <input type="text" name="numero" id="numero">
        <button type="submit" id="botao">Tabuada</button>
</div>
</form>

</body>
</html>