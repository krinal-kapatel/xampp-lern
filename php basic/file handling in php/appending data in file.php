<html>
    <head>
        <title>append a data into files</title>
        </head>
<body>

    <form action="appending data in file.php" method = "POST">
    
    username :- 
    <input type="text" name="uname" placeholder="Enter Username"/><br><br>

    <input type="submit" name="submit" value="submit">
    
    </form>

    <?php

    if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        $file = fopen("name.txt","a");

        fwrite($file,$name." ") or die("unable to write");
        echo "name inserted sucessfully";

        fclose($file);
    }


    ?>


</body>




</html>