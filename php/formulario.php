<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.html">
  <link rel="stylesheet" href="php/index.php">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--icone do formulario que aparecerá na aba do navegador 16x16/.ico-->
  <link rel="shortcut icon" href="imagens/formulario-de-contato.ico" type="image/x-icon">
  <title>Formulário</title>
</head>
<body>
<?php 
   include_once('formulario.php')
  ?>
<!-- Parte das box Nome,Sobrenome,E-mail,Número-->
  <div class="box-form">
    <form action="dados_formulario.php" method="post">
      <fieldset>
        <legend><b>Cadastre-se</b></legend><br>

        <div class="inputbox">
          <input type="text" name="name" id="name" class="user" value="name" required>
          <label for="name" class="labelinput">Nome</label>
        </div><br><br>

        <div class="inputbox">
          <input type="text" name="sobrenome" id="sobrenome" class="user" value="sobrenome" required>
          <label for="sobrenome" class="labelinput">Sobrenome</label>
        </div><br><br>

        <div class="inputbox">
          <input type="email" name="email" id="email" class="user" required>
          <label for="email" class="labelinput">E-mail</label>
        </div><br><br>

        <div class="inputbox">
          <input type="tel" name="telefone" id="telefone" class="user" value="telefone" required>
          <label for="telefone" class="labelinput">Número de Telefone</label>
        </div>
<!--Seleção do genero, só pode marcar uma alternativa-->
        <p>Gênero</p>
        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="feminino" name="genero" value="feminino" required>
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">Outros</label><br><br>
        <!--Seleção de Data de nascimento-->
        <label for="date"><b>Data de Nascimento: </b></label><br><br>
        <input type="date" name="date" id="date" class="date" required>
       <br><br>
       <!--Botao para enviar o arquivo-->
        <input type="submit" name="button" id="button">
      </fieldset>

    </form>

  </div>

  </form>
</body>

</html>