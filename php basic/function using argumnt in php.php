<html>
    <head>
        <title>Function using argumnet in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php
        /* function without argument */ 

        function func(){
            echo "function without argument";
        }

        func();
        echo "<br><br>";

        function myfunction($a){
            echo "function with argument<br>";
            echo " hello  ".$a."<br><br>";
        }
        
        myfunction(" kina ");

        function returnFunction($a,$b){
            return $a+$b;
        }
       $sum = returnFunction(20,10);

       echo "function with retrun value<br>";
        echo "sum of this two number is :".$sum;
        
        ?>
        

    </body>
</html>