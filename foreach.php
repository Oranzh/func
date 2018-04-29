<?php
$rulePrefixes = ['Respect\\Validation\\Rules'];
$ruleName = 'intVal';

foreach ($rulePrefixes as $prefix) {
	var_dump($prefix);
	$className = $prefix.ucfirst($ruleName);
}


$arr = [];
foreach($arr as $k => $v) {
	var_dump('come here');
}
