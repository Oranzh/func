<?php
// filename: /tmp/a.php

class A {
	static public function a_test($str)
	{
		echo "\nHi: $str";
		print_r(debug_backtrace());
	}

}
A::a_test('friend');
A::a_test('hello');

