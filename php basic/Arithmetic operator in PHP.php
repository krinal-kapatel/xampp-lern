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
         # '+','-','*','','/'.'%'

         $a = 100;
         $b = 200;

         $c = $a+$b;

         echo "The sum of this two variable is =".$c."<br>";

         $c = $a-$b;

         echo "The Substracion of this two variable is =".$c."<br>";

         $c = $a*$b;

         echo "The Multiplication of this two variable is =".$c."<br>";

         $c = $a/$b;

         echo "The Divison of this two variable is =".$c."<br>";

         $c = $b%$a;

         echo "The reminder of this two variable is =".$c."<br>";

         $exp = 5+10/3*7;

         echo "the expression result is = " .$exp;



           
        ?>
        </h3>
        

    </body>
</html>