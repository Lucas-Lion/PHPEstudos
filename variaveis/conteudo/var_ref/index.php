<?php 

 $x = 10;

 $y =& $x;

 echo $x;
 echo "<br>";
 echo $y;

 $y = 15;

 echo "<br>";
 echo "Atribuição após ref";
 echo "<br>";
 echo $x;
 echo "<br>";
 echo $y;
 echo "<br>";

 $nome = "Lucas";

 $nome2 &= $nome;

 echo $nome;
 echo "<br>";
 echo $nome2;
 echo "<br>";

?>