<?php

function encode($buffer)
{
	$package_length_type = 'N';
	$package_length_type_length = 4;
	$package_length_offset = 0;
	$package_body_offset = 0;
	$total_length = $package_length_type_length + strlen($buffer) - $package_body_offset;
	return pack($package_length_type, $total_length) . $buffer;
}
$buffer = '{"controller_name":"AppController","method_name":"ws","params":[1]}';
var_dump(encode($buffer));
