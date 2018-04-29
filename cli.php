<?php
function cli() {
	if($argc < 2) {
		exit(1);
	}
	print_r("hello $argv[2]");
}
cli();
