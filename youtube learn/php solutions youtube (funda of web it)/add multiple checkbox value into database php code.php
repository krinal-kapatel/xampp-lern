<?php

session_start();

$connection = mysqli_connect('localhost','root','','php_solution_youtube');
if(!$connection)
{
    die('connection error'.mysqli_error($connection));
}
else{
    echo "connect";
}

if(isset($_POST['insert_data']))
{
    $agree = $_POST['agree'];
   foreach($agree as $item)
   {
    //    echo $item ."<br>";

    $query = "INSERT INTO multiple_checkbox (checkbox_value) VALUES ('$agree')";
    $insert = mysqli_query($connection,$query);

   }

   if($insert)
   {
       $_SESSION['status'] = "inserted sucessfully";
       header("Location : add multiple checkbox value into database.php");
   }
   else
   {
    $_SESSION['status'] = "data not inserted sucessfully";
    header("Location : add multiple checkbox value into database.php");

   }
}
?>