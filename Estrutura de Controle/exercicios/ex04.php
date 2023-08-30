<?php 
// esse script é para imprimir uma mensagem para o motorista tomar cuidado com a velocidade
// se a velocidade for maior que 40km/h, imprimir a mensagem "Você está acima da velocidade permitida. MULTADO!"
// se a velocidade for menor que 40km/h, imprimir a mensagem "Você está dentro da velocidade permitida. Dirija com cuidado."
// se a velocidade for igual a 40km/h, imprimir a mensagem "Você está na velocidade permitida. Dirija com cuidado."

$velocidade = 60;

if ($velocidade > 40) {
    echo "Você está acima da velocidade permitida. MULTADO!";
} else if ($velocidade < 40) {
    echo "Você está dentro da velocidade permitida. Dirija com cuidado.";
} else {
    echo "Você está na velocidade permitida. Dirija com cuidado.";
}

?>