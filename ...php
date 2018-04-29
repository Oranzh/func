<?php

function tt(...$a){
	$b = 0;
	foreach($a as $n) {
		$b += $n;
	}
	return $b;
}

echo tt(1,2,4);
