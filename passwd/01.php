<?php

$pass = 123123123;
$res = password_hash($pass,PASSWORD_BCRYPT );
if(password_verify($pass,$res)) echo "正确\r\n";
$pass = 123123123;
$res = password_hash($pass,PASSWORD_BCRYPT );
if(password_verify($pass,$res)) echo "正确\r\n";
$pass = 123123123;
$res = password_hash($pass,PASSWORD_BCRYPT );
if(password_verify($pass,$res)) echo "正确\r\n";
