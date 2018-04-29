<?php

$command = [];
$command[] = 'cd /home/lee/func';
$command[] = 'php tt.php';
$exec = implode(';',$command);

exec($exec,$output,$status);
var_dump($output);
var_dump($status);
