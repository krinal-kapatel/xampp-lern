<?php



$connection= mysqli_connect('localhost','root','','php_solution_youtube');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));
}
else
{
    echo "connect";
}



if(isset($_POST['insert_data']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $gender = $_POST['gender'];
    $dob = date('Y-m-d',strtotime($_POST['dob']));
    $hobby = $_POST['hobby'];
    $agree = $_POST['agree'];
    echo $agree;
}

    // $query = "INSERT INTO employes (name,phone,email,designation,gender,'dob',hobby,agree) VALUES ('$name','$phone','$email','$designation','$gender','$dob','$hobby','$agree')";
    // $query_run = mysqli_query($connection,$query);

    // if($query_run)
    // {
    //     $_SESSION['status'] = "Inserted Sucessfully";
    //     header("Location: insert data into database using php.php");
    // }
    // else
    // {
    //     $_SESSION['status'] = "Data Not Inserted";
    //     header("Location: insert data into database using php.php");
    // }
?>
