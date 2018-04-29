<?php

$input = array("a", "b", "c", "d", "e");

print_r(array_slice($input, 2));      // returns "c", "d", and "e"
print_r(array_slice($input, -2, 1));  // returns "d"
print_r(array_slice($input, 0, 3));   
