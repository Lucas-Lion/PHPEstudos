<?php
echo "Digite o primeiro valor: ";
$valor1 = fgets(STDIN);

echo "Digite o segundo valor: ";
$valor2 = fgets(STDIN);

// Removendo possíveis quebras de linha das entradas
$valor1 = trim($valor1);
$valor2 = trim($valor2);

$resultado = $valor1 + $valor2;

echo "A soma de $valor1 e $valor2 é igual a $resultado";
?>
