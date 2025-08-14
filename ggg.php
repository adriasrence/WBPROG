<?php

$a = 550;
$b = 3;
$c = 4;
$d = 5;

$ai = $b + $c + $d;
$gg = $a * $ai;

if ($gg >= 5000) {
    $discount = 0.05;
}
elseif ($gg >= 9999) {
    $discount = 0.10;
}
elseif ($gg >= 10000) {
    $discount = 0.15;
}
else {
    
}
$tots = $gg * $discount;
$toti = $gg - $tots;
echo "<br>Total unit: P $ai" ;
echo "<br>Total tuition: P $gg" ;
echo "<br>Discount: P $tots" ;
echo "<br>Final tuition: P $toti" ;





?>