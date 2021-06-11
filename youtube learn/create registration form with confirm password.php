<html>
        <head>
            <title>create registration form with conform password</title>
            <style>
                body{
                    background: linear-gradient(to bottom, #33ccff 0%, #0033cc 100%);
                }
                .start{
                    width:500px;
                    height:350px;
                    text-align:center;
                    margin:0 auto;
                    background:black;
                    border-radius:04px;
                    margin-top:50px;
                    background: linear-gradient(to bottom, #ccccff 0%, #66ff33 100%);
                }

                    
                
                .txtbox
                {
                    margin-top:0px;
                    background:white;
                    text-align:start;
                    font-size:15px;
                    font-family:sans-serif;
                    height:30px;
                    width:300px;
                    padding:15px;
                    border:none;
                    border-radius:15px;
                    box-shadow:0 3px 0 blue;
                }
                .btn{
                    width:300px;
                    height:40px;
                    border-radius:10px;
                    font-size:20px;
                    background-color:#993333;
                }
            </style>
        </head>
<body>

    <div class="bg">
        <div class="start">
            <form action="" method="POST">
            
            <h1>Sign Up Or Registration</h1>
                <input type="text" name="fname" placeholder="Enter firstname" class="txtbox" required><br><br>
                <input type="text" name="lname" placeholder="Enter Lastname" class="txtbox" required><br><br>
                <input type="email" name="email" placeholder="Enter Email" class="txtbox" required><br><br>
                <input type="password" name="password" placeholder="Enter password" class="txtbox" required><br><br>
                <input type="password" name="cpassword" placeholder="Confirm password" class="txtbox" required><br><br>

                <input type="submit" name="login" class="btn">

            </form>
        </div>
    </div>

    <?php

    /*****connection with database*****/

    $connection = mysqli_connect('localhost','root','','display_image');
    if(!$connection)
    {
        die('connection failed'.mysqli_error($connection));
    }
    
    /**********************************/

    /***********fetch / Insert data into database************ */

    if(isset($_POST['login']))
    {
        $fname = $_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password==$cpassword)
        {
            $query="SELECT * FROM password_match_cpassword WHERE email = '$email'";
            $select = mysqli_query($connection,$query);

            if(mysqli_num_rows($select)>0)
            {
                echo '<script type = "text/javascript"> alert("Email already exits...Try another Email ID") </script>';
            }
            else
            {

                $query="INSERT INTO password_match_cpassword (firstname,lastname,email,password,cpassword) VALUES ('$fname','$lname','$email','$password','$cpassword')";
                $insert = mysqli_query($connection,$query);

                if($insert)
                {
                    echo '<script type = "text/javascript"> alert("successfully sign up") </script>';
                    echo "<h1 class='text-center'> welcome ".$fname." ".$lname."</h1>";
                    
                }
                else
                {
                    echo '<script type = "text/javascript"> alert("Registration Failed") </script>'; 
                }
            }
        }
            else
            {
                echo '<script type = "text/javascript"> alert("password and confirm password does not match") </script>';
            }
    }
    

    /******************************************************** */
    ?>
</body>
</html>