<html>
    <head>
        <title></title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        $fruits = array(
                        "orange" => "orange",
                        "yellow" => "mango",
                        "green" => "graps",
                        "red " => "apple" 
                       );   

        asort($fruits); // sort associative arrays in ascending order, according to the value
        print_r($fruits)."<br>";
        echo " using asort : <br>";


        arsort($fruits); //sort associative arrays in descending order, according to the value
        print_r($fruits)."<br>";
        echo " using arsort : <br>";


        ksort($fruits);//sort associative arrays in ascending order, according to the key
        print_r($fruits)."<br>";
        echo " using ksort : <br>";

        krsort($fruits);//sort associative arrays in descending order, according to 
        print_r($fruits);
        echo " using krsort : <br>";

        
        ?>
        

    </body>
</html>