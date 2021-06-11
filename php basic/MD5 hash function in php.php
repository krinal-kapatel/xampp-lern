<html>
    <head>
        <title> Md5 Hash Function in PHP </title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php
        // md5(string);

        echo md5 ('password')."<br>";
        echo md5 ('krinal')."<br>";
        
        echo "TRUE - Raw 16 character binary format: ".md5('krinal', TRUE)."<br>"; 

        ?>
        

    </body>
</html>