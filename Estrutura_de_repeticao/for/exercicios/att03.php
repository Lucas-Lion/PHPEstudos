<?php 

$arr = [];

for( $i = 0; $i < 0; $i++ ) {
    array_push( $arr, $i );

    for($i; $arr[$i] % 2 == 0; $i++ ) {
        echo $arr[$i] ."\n";
    }
}