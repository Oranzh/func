<?php
$lua = new Lua();
$lua->registerCallback("ddd", "array_sum");
$lua->registerCallback("rrr", "range");
$lua->eval(<<<CODE
	r = rrr(1,1000000);
    i = ddd(r);
	print(i);
CODE
);

