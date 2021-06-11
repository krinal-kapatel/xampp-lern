<?php

session_start();

?>
<html>
    <head>
        <title> session view in php </title> 
    </head>
    <body>

    <?php

    $user = $_SESSION['user']."<br>";
    $pass = $_SESSION['password'];

    if($user!="" && $pass!=""){
        echo "username is : ".$user."password is : ".$pass."<br>";
    }
    else{
        echo "usename and password are unset ";
    }

    ?>

    </body>
</html>


