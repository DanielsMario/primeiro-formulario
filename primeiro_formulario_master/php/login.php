<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once('dashboard.php')
    ?>
<div class="box-form">
    <form action="verifica_login.php" method="post">
      <fieldset>
        <legend><b>Cadastre-se</b></legend><br>

        <div class="inputbox">
          <input type="text" name="login" id="login" class="user" value="adm" required>
          <label for="login" class="labelinput">Nome</label>
        </div><br><br>

        <div class="inputbox">
          <input type="password" name="senha" id="senha" class="user" value="123" required>
          <label for="senha" class="labelinput">Senha</label>
        </div><br><br>
        <input type="submit" name="button" id="button">
</fieldset>
</form>
</body>
</html>