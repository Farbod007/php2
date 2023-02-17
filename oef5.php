<?php
$getallen = array(1,2,3,4,5,6,7,8,9,10);

echo getMax($getallen);

function getMax($getallen){
    $max = max($getallen);
    return $max;
}
?>
