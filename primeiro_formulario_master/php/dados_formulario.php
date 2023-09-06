<?php
$_nome = $_POST["name"];
$_sobrenome = $_POST["sobrenome"];
$_email = $_POST["email"];
$_telefone = $_POST["telefone"];
$_genero = $_POST["genero"];
$_nascimento = $_POST["date"];

echo ("Boa noite:".$_nome." ".$_sobrenome."<br>");
echo ("Email:".$_email."<br>");
echo ("Seu telefone é: ".$_telefone."<br>");
echo ("Seu Genêro: ".$_genero."<br>");
echo ("Você nasceu em ".$_nascimento);
?>