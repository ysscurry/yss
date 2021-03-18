<?php 
$wo = 'baidu';
$ba = &$wo;  //引用赋值，变量$ba引用了变量$wo的值。
$ba = 'Website is $ba';
echo $wo;		//输出：Website is $ba
echo $ba;		//输出：Website is $ba
?>