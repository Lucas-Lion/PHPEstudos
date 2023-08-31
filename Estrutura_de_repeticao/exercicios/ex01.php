<?php 

$arr = [5, "Lucas", "Leonardo", "Olá", false, true, [], 5.43];

$x = count($arr);
$y = 0;

while($y < $x) {

    if(is_string($arr[$y])) {

        echo $arr[$y] . "<br>";

    }

    $y++;
}

?>