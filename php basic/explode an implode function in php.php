<html>
    <head>
        <title></title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        /* this is explode function */

        $array = explode(",","apple,orange,graps");

            foreach($array as $value)
            {
                echo $value."<br>";
            }

        /*------------------------*/

        /* this is implode function*/

        $string = implode(" , ",$array);

        echo "implode is : ".$string;

        /*---------------------------*/

        
        ?>
        

    </body>
</html>