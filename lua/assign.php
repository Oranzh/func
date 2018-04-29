<?php

$lua = new Lua();
$pattern  = array('123','good');
$lua->assign("var", array('Lua','good')); 
$lua->eval(<<<CODE
    print(var);
CODE
);
