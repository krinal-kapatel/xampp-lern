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
    $dob = date('y-m-d',strtotime($_POST['dateofbirth']));
    $time = $_POST['time'];
}

    $query = "INSERT INTO newdate (name,dob,time) VALUES ('$name','$dob','$time')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Sucessfully";
        header("Location: dob inserted in database.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: dob inserted in database.php");
    }
?>
