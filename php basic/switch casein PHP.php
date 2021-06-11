<html>
    <head>
        <title>Switch case in PHP</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        /* syntax of switch case

        switch(condition){
            case1 :
                statement;
                break;
            case2 :
                statement;
                break;
            case3 :
                statement;
                break;
            case4 :
                statement;
                break;

            defult:
                statment;
        }

        */
        
        $choice = "sum";

        $var1  = 10;
        $var2 = 200;
        
        switch($choice)
        {
            case "sum":
                echo "sum is ".($var1+$var2)."<br>";
                break;

            case 2:
                echo "substraction is ".($var1-$var2)."<br>";
                break;

            case 3:
                echo "multiplication is ".($var1*$var2)."<br>";
                break;

            case 4:
               echo "Division is ".($var1/$var2)."<br>";
                break;

            case 5:
                echo "Reminder is ".($var1%$var2)."<br>";
                break;

            default: 
                echo "do not match with the choice";
        }

        
        ?>
        

    </body>
</html>