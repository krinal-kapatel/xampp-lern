<html>
    <head>
        <title> Swaping Variables Value in PHP </title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        /* this method is used using third variable */ 

        $var1=10;
        $var2=20;

        echo "before swping"."<br>";
        echo "var1 = ".$var1."<br>";
        echo "var2 = ".$var2."<br>";

       $temp=$var1;
       $var1=$var2;
       $var2=$temp;

       echo "after swaping "."<br>";
       echo "var1 = ".$var1."<br>";
       echo "var2 = ".$var2."<br><br><br>";

       /*----------------------------------------*/

     /* we are swap the value without using third variable */ 
     /* at that time compiler used the $var1=20,$var2=10 " because of third variable swaping change the variable value*/ 

        
        echo "before swapping without third variable "."<br>";
        echo "var1 = ".$var1."<br>";
        echo "var2 = ".$var2."<br>";

        /*The list() function is used to assign values to a list of variables in one operation.*/
        
        list($var1, $var2) = array($var2, $var1); /* using this list method */

        echo "after swaping  without third variable "."<br>";
       echo "var1 = ".$var1."<br>";
       echo "var2 = ".$var2."<br>";

        
       
       


        
        ?>
        

    </body>
</html>