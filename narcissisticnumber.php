<?php
    $sum = 0;

	$n = 153;
	$n2 = 111;

	$sum = (pow(1,4) + pow(6,4)+ pow(3,4)+ pow(4,4));
	$sum2 = (pow(1,3) + pow(5,3)+ pow(3,3));


	if($sum || $sum2 == $n) {
		echo "true";
	} else if ($sum || $sum2 == $n2) {
		echo "false";
	}
?>