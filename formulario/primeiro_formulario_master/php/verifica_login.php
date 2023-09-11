<?php

$_login = "adm";
$_senha =  "123";
$_loginform = $_POST["login"];
$_senha_form = $_POST["senha"];

if(($_login == $_loginform) and ($_senha == $_senha_form)){
    echo("bem vindo");
}else{
    echo("Acesso Negado!");
    header("refresh:5; url=acessonegado.php");
}


#if(($_login != $_loginform) or ($_senha != $_senha_form)){
 #   echo("Acesso Negado!");

?>