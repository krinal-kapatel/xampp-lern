<?php

$var1 = 20;
$var2 = 30;

function func(){
$GLOBALS['var3'] = $GLOBALS['var1'] + $GLOBALS['var2'];
global $var3;
echo "sum is ".$var3."<br>";
}
func();
echo "sum is ".$var3;

?>