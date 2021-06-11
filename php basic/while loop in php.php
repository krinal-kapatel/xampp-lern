<html>
    <head>
        <title>While Loop in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php
        /* syntax of while loop

        Intialize
        while(condition)
        {
            statement 1;
            statement 2;
            statement 3;
            statement 4;
            .
            .
            .
            statement n;
            increment/decrement 
            
         }
        
         */

         $count=1;

         while($count<=100)
         {
             echo "hello count : ".$count."<br>";
             $count+=10;
         }

         $count1=1;
         $num=5;

         while($count1<=30)
         {
             echo $num. " * " .$count1. " = " .($num*$count1). "<br>";
             $count1++;
         }

        ?>
        

    </body>
</html>