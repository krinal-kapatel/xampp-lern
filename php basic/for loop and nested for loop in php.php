<html>
    <head>
        <title>For loop and nested for loop  in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

            for($x=1; $x<=10; $x++)
            {
                echo "hello".$x. "<br><br>";

            }

            for($x1=10; $x1<=100; $x1+=10)
            {
                echo "hello".$x1. "<br>";

            }

            for($y=1; $y<=10; $y++)
            {
                for($y1=1; $y1<=$y; $y1++){
                    echo "k";

                }
                echo "<br>";
            }
        
        ?>
        

    </body>
</html>