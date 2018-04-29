<?php
$pwd = "123456";
$hash = password_hash($pwd, PASSWORD_BCRYPT);
echo $hash;

// mysql中就只需要存储这个hash值就行了。建议把数据库该字段值设置为255

if (password_verify($pwd, $hash)) { 
    echo "密码正确";
} else {  
    echo "密码错误";
}
