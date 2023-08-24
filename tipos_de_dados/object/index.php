<?php 

    class Pessoas {
        function falar() {
            echo "Olá, Pessoas!";
        }
    }

    $lucas = new Pessoas();
    
    $lucas->nome = "Lucas";

    echo $lucas->nome;

    echo "<br>";

    $lucas->falar();

?>