<?php
	$a = 10;
	$b = 5;
	echo "A=".$a."<br>"."B=".$b."<br>";
	if($a > $b){
		$temp = $a;
		$a = $b;
		$b = $temp;
	}
	echo "A=".$a."<br>"."B=".$b."<br>";
?>