<html>
    <head>
        <title>php embeded with html tag structure</title>
        </head>
<body>

    <form action=""></form>

    <?php

    $file_name = "name.txt";
    $file = fopen($file_name,"r");
    $name = fread($file , filesize($file_name));    
    echo $name;
    fclose($file);


    ?>


</body>




</html>