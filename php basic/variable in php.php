<html>
    <head>
        <title>varibale in php</title>
        </head>
<body>

    <form action=""></form>

    <h2>
    <?php

    /* in php variable are in text , number, date,time,array etc... */
    /*  valid way to define a variable in php */

    $var1= "krinal";
    $Variable=20;
    $var_iable = "kina";
    $var_123 = 30.23;

    echo "value of var1 : ".$var1."<br>";
    echo "value of variable : ".$Variable."<br>";
    echo "value of var_iable : ".$var_iable."<br>";
    echo "value of var_123 : ".$var_123."<br>";

    /* we are reintialize the variable value than overide the old value to new */

    $var_iable = "hii kinu";
    echo "new value of var_iable : ".$var_iable."<br>"; 



    /* invalid way to define a variable in php 

    $var 1 = 50;
    $var-234 = "krinal";
    $123_var = 20.2;
 
    */

    ?>
    </h2>

</body>




</html>