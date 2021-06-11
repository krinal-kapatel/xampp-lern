<html>
    <head>
        <title>Global and Local Scope in php</title>
        </head>
<body>

    <form action=""></form>

    <?php

/* this method is local scope in function */
    function localScope(){
        $name = "kina"; // local variable
        echo "my name is : ".$name."<br>";
    }

    localScope(); // call the function

    /***********************************/

    $number = 20; // global variable
    function globalScope(){
         global $number;
         echo "number is :".$number."<br>";
    }
    
    globalScope(); // call the function
         


    ?>

<?php



echo " number is :".$number;

?>
</body>




</html>