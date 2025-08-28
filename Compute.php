<?php
$n1 = $_POST ['num1'];
$n2 = $_POST ['num2'];
$n3 = $_POST ['num3'];
$n4 = $_POST ['num4'];

$sum = $n1 + $n2;
$diff = $n4 - $n3;
$prd = $n1 * $n3;
$quo = $n2 / $n3;
$ave = ($n1+$n2+$n3+$n4)/ 4;

echo " The sum of $n1 and $n2 is $sum <br>";
echo " The diff of $n1 and $n2 is $diff <br>";
echo " The prod of $n1 and $n2 is $prd <br>";
echo " The quo of $n1 and $n2 is",round($quo, 2);
echo "<br> The average of $n1, $n2, $n3 and $n4 is $ave ";


?>