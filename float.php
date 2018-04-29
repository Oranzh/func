<?php

function filterFloat($var, $length = null){                                                                                                            
		if(null === $var){
			return null;
		}
		$lStr = '';
		if(null !== $length && $length > 0){
			$lStr = '.' . $length;
		}

		return floatval(sprintf("%{$lStr}f", $var));
}   

echo filterFloat(0,2),"\r\n";
