<?php
function calcularDesconto($valor, $categoria)
{
    switch ($categoria) {
        case 'eletrônicos':
            return $valor * 0.9;
        case 'vestuário':
            return $valor * 0.8;
        case 'alimentos':
            return $valor * 0.95;
        default:
            return $valor;
    }
}

echo calcularDesconto(100, 'eletrônicos')  . '<br>';

echo calcularDesconto(100, 'vestuário')    . '<br>';

echo calcularDesconto(100, 'alimentos')    . '<br>';

echo calcularDesconto(100, 'outros')       . '<br>';

echo calcularDesconto(100, 'desconhecida') . '<br>';

?>

