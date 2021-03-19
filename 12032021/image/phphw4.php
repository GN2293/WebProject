<?php
$t = true;
$f = false;
echo "\$t 值 : $t 数字 : (int)$t"."\n";
echo "\$f 值 : ".$f."数字 : (int)$f"."\n";

$x[0] = "Hello";
echo $x[0];

$pi = 3.141592;
echo "\$pi 转换整数 :".(int)$pi."\n";
$input = "3.141592pi";
echo "pi 转成浮点数 :".(float)$input."\n";

$pi = 3.141592;
settype($pi,"integer");
echo "\$pi 转换整数 :".$pi."\n";
$piString = "3.141592circle";
echo "是否有转成功".settype($piString,"float")."\n";
echo "\$piString 是 :".$piString."\n";
?>