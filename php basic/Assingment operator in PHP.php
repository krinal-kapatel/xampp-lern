<html>
    <head>
        <title> Arithmetic operator in PHP</title>

        <style>

            h3{
                color:blue;
            }

        </style>
    </head>
    <body>
        
        <h3>
        <?php
         # '=','+=','-=','*=','/=','%='
           
        $var1 = 20;
        $var2 = 30;
        
        echo "value of var1 is $var1 <br>";
        echo "value of var2 is $var2 <br><br>";

       $var1+=30; // 20=20+30  var1 = var1+30

        echo "the variavble1 is ".$var1."<br>";
    /**************************************************** */

        $var2 -= 50;  // 30=30-50 var2 = var2-50

        echo "the variable 2 value is ".$var2."<br>";

    //******************************************************** */

        $var1*= 40;  //50=50*40  now the variable1 is overriden form sumation  also same as variable 2 

        echo "the variable1 is ".$var1."<br>";

    /************************************************************ */

        $var2 /= 60;

        echo "the variable1 is ".$var2."<br>";


        



        ?>
        </h3>
        

    </body>
</html>