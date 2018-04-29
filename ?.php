<?php

/**
$b = $a ? : $a : 1;
$b = $a ?: 1;
$b = $a ?? 1;
$a1 = true;
$b1 = $a1 ?: 1;
var_dump( $b1 );

echo "<br><br><br>===================<br><br><br>";

$a2 = true;
$b2 = $a2 ?? 1;
var_dump( $b2 );

echo "<br><br><br>===================<br><br><br>";

$a3 = true;
$b3 = $a3 ? $a3 : 1;
var_dump( $b3 );
**/
$a = ['name' => 'lee'];
$a = null;
$b = ['age' => 26];
$b = null;
var_dump($a??$b??['c'=>1]);
