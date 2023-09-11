<?php

$_num1 = $_POST["num1"];
$_num2 = $_POST["num2"];
$_soma = ($_num1+$_num2);
$_subtracao = ($_num1-$_num2);
$_multiplicacao = ($_num1*$_num2);
$_divisao = ($_num1/$_num2);

echo ("<h1> Operadores Matemáticos </h1>");
echo ("A soma de $_num1 + $_num2 = <b> ".$_soma. "</b>"."<br>");
echo ("A subtração de $_num1 - $_num2 =  <b> ".$_subtracao."</b>"."<br>");
echo ("A multiplicação de $_num1 * $_num2 =  <b> ".$_multiplicacao."</b>". "<br>");
echo ("A divisão de $_num1 + $_num2 = <b> ".$_divisao. "</b>"."<br>");
?>  
