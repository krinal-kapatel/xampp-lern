<?php
include "dbcon.php"; 

function sendemail_verify($name,$email,$verify_token)
{
    
}

if(isset($_POST['register_btn']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());
    

    // email exist or not check 
    $check_email_query = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $check_email_query_run = mysqli_query($connection,$check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0)
    {
        $_SESSION['status'] = "email id already register";
        header("Location : register.php");
    }
    else
    {
        //insert users / register data
        $query = "INSERT INTO users (name,phone,email,password,verify_token) VALUES ('$name','$phone','$email','$password','$verify_token')"; 
       $query_run = mysqli_query($connection,$query);
       
       if($query_run)
       {
           sendemail_verify("$name","$email","$verify_token");
            $_SESSION['status'] = "Registration Sucessfull.! Please Verify Your Email Adderess";
            header("Location : register.php");
       }
       else
       {
            $_SESSION['status'] = "Registration Failed";
            header("Location : register.php");
       }
    }
}

?>