<?php

session_start();

?>
<html>
    <head>
        <title> cookie view in php</title> 
    </head>
    <body>

    <?php

   $name = $_COOKIE['name'];
   $pass = $_COOKIE['password'];

   echo "the name is ".$name."<br>";
   echo "the password is ".$pass;

    ?>

    </body>
</html>


