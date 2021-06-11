<html>
    <head>
        <title>String Or Concatination Opearator in PHP</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        $var1 = "Krinal ";
        $var2 = "Manishkumar ";
        $var3 = "patel ";

        $fullname = $var1.$var2.$var3;
        print "<h4>Full Name : </h4>"."<h3>".$fullname."</h3>";

        $var4="hii ";
        $var5="krinal ";
        
        $var4 .= $var5;
        echo $var4;
        ?>
        

    </body>
</html>