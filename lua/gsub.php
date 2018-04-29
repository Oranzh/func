<?php
$lua = new Lua();
$str = 'Lua is good';
$pattern  = array('Lua','good');
$replacement = '***';
$lua->assign("str",$str); 
$lua->assign("pattern",$pattern); 

/**
$lua->assign("replacement",$replacement); 
$lua->registerCallback("gsub", "str_replace");
//$lua->registerCallback("replace","str_replace");
$lua->eval(<<<CODE
res = gsub(str,pattern,replacement);
print(res);
CODE	
);
$lua->eval(<<<CODE
	for k,v in ipairs(pattern)
	do 
		print(v);
	end
CODE
);
**/
$lua->eval(<<<CODE
	print(pattern)
CODE
);

