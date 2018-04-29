<?php

$json = '{
  "0": 4,
  "1": 3,
  "2": 2,
  "3": 4,
  "4": 4,
  "5": 3,
  "6": 2,
  "7": 3,
  "8": 1,
  "9": 4
} '; 
$json = json_decode($json,true);
print_r($json);
asort($json);
print_r($json);
