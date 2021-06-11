<?php

    $connection = mysqli_connect("localhost","root","","university");

    if(!$connection){
        echo "connection error".mysqli_connect_error();
    }

?>