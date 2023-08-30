<?php 

$a = 20;
$b = "Lucas";

if(is_int($a) || is_float($a)) {
    
  $val = $a;

  $resultado = $val * 2;

  if($resultado > 100) {
    echo "O valor é maior que 100.";
  } else {
    echo "Valor é menor que 100.";
  }

} else {
    echo "Valor não é Int.";
}

?>