<html>
    <head>
        <title>write a data into files</title>
        </head>
<body>

    <form action="write data into file.php" method = "POST">
    
    username :- 
    <input type="text" name="uname" placeholder="Enter Username"/><br><br>

    <input type="submit" name="submit" value="submit">
    
    </form>

    <?php

    if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        $file = fopen("name.txt","w");

        fwrite($file,$name) or die("unable to write");
        echo "<br>";
        echo "name inserted sucessfully";

        fclose($file);
    }


    ?>


</body>




</html>