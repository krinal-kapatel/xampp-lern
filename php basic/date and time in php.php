<html>
    <head>
        <title>Date and time in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        $time = time();

        echo "date is ".date("D-M-Y")."<br>";
        echo "Date is : "."<b>".date("d-m-y l")."</b>"."<br>";

        echo "<B>Time is : </B>"."<b>".date("h:i:s a",$time)."</b>"."<br>";

        
        ?>
        

    </body>
</html>