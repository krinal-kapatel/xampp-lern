<html>
    <head>
        <title>Single and Double Quotes Difference in php</title>
        </head>
<body>

    <form action=""></form>

    <?php
            $var1= "krinal";
            $Variable=20;
            $var_iable = "kina";
            $var_123 = 30.23;


    // using double quotes print the value of the variable 
        echo "using double quotes<br>";
        echo "value of var1 : $var1 <br>";
        echo "value of variable : $Variable  <br>";
        echo "value of var_iable : $var_iable <br>";
        echo "value of var_123 : $var_123 <br>";
    /***************************************************** */

        echo "<br><br><br>";

    // using single qutoes we are not able to print the value of the varible 
        echo "using single quotes<br>";
        echo 'value of var1 : $var1 <br>';
        echo 'value of variable : $Variable  <br>';
        echo 'value of var_iable : $var_iable <br>';
        echo 'value of var_123 : $var_123 <br>';
    /***************************************************** */
            



    ?>


</body>




</html>