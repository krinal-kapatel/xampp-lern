<?php

$ip = $_SERVER['REMOTE_ADDR'];

$block_list = array("localhost","10.10.10.1");
foreach($block_list as $block_ip){
    if($ip == $block_ip){
        echo "sorry this ip adderess is blocked! you can't access this site";
        break;
    }
}

?>