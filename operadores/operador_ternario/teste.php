<?php 
// ALISTAMENTO MILITAR INDIANO

$idade = (int) "29";
$sexo  = "masculino";

$idade_permitida = 18;
$sexo_permitido = "masculino";

echo $idade >= $idade_permitida && $sexo === $sexo_permitido ? "Você foi classificado." : "Você não foi classificado.";

?>
