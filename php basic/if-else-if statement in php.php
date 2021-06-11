<html>
    <head>
        <title>If-else-if in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        <h1>
        <?php

        $marks = 20;

       if($marks>=90){
           echo "Grade is A <br>";
       }elseif ($marks>=80) {
            echo "Grade is B <br>";
       }elseif ($marks>=70) {
            echo "Grade is C <br>";
       }elseif ($marks>=60) {
            echo "Grade is D <br>";
       }elseif ($marks>=50) {
            echo "Grade is E <br>";
       }else {
           echo "you are fail";
       }

        ?>
        </h1>

    </body>
</html>