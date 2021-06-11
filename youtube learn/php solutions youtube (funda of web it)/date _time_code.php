<?php

session_start();

$connection = mysqli_connect('localhost','root','','php_solution_youtube');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));
}


if(isset($_POST['insert_data']))
{
    $name = $_POST['name'];
    $datetime = $_POST['event_dt'];
    
}

    $query = "INSERT INTO new date_time (name,eventdt) VALUES ('$name','$datetime')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Sucessfully";
        header("Location: date time.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: date time.php");
    }
?>
