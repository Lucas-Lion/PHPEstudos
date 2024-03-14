<?php 

$j = 0;
$nome = "Lucas";

for($i = 0; $i < 10; $i++) {

    if($i == 5) {
        echo "$nome \n";
    }

    if($i == 7) {
        break;
    }

    echo "Contador: $i \n";

}


