<?php session_start(); ?>

<?php

    $connection = mysqli_connect('localhost','root','','php_solution_youtube');
    if(!$connection)
    {
        die('connection failed'.mysqli_error($connection));
    }
    
    if(isset($_POST['insert_data']))
    {
        $name = $_POST['name'];
        $time = $_POST['time'];
    }
        $query = "INSERT INTO newtime (name,time) VALUES ('$name','$time')";
        $insert = mysqli_query($connection,$query);
    
        if($insert)
    {
        $_SESSION['status'] = "Inserted Sucessfully";
        header("Location: insert time.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: insert time.php");
    }

?>

    
