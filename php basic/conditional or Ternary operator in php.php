<html>
    <head>
        <title> Conditional Or Ternary Operator in PHP</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        /* syntax of conditional operator 

        $variable = (condition) ? "statment" : "statment";

        */

        $result = (5>2) ? "greter " : "less" ;
        echo $result ."<br>";


        $number = 2;
        $checker = ($number%3 == 0) ? "number is even" : "number is odd";
        echo  $checker;


        
        ?>
        

    </body>
</html>