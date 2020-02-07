<?php

$array = array(2,4,0,100,4,11,2602,36);
$odds = array();
$even = array();
foreach($array as $val) {
    if($val % 2 == 0) {
        $even[] = $val;
    } else {
        $odds[] = $val;
    }
}

print_r($odds[0]);

echo "<br>";

$array2 = array(160,3,1719,19,11,13,-21);
$odds2 = array();
$even2 = array();
foreach($array2 as $val2) {
    if($val2 % 2 == 0) {
        $even2[] = $val2;
    } else {
        $odds2[] = $val2;
    }
}

print_r($even2[0]);

?>