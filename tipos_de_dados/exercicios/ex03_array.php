<?php 

$pessoa = [
    'altura' => 1.77, 
    'raca'   => 'pardo', 
    'idade'  => 16, 
    'sexo'   => 'masculino'
];

$altura = $pessoa ['altura'];
$raca   = $pessoa ['raça'];
$idade  = $pessoa ['idade'];
$sexo   = $pessoa ['sexo'];

if($idade >= 18) {

    echo "Você é de maior!";

} else {
    
   echo "você é de menor!";

}

?>