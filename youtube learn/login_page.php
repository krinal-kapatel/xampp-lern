<html>
    <head>
        <title>login page using html, css, php </title>
        <link href="login_page.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
<body class="bg">
    
    <div class="start">
        <form action="" method="POST">
            <center>
                <h1>Login Page</h1>
                <img src="../upload image/1.png" alt="Paris" class = "img" >
            </center>
            <input type="email" name="email" placeholder="Enter Email" class="txtbox" required><br><br>
            <input type="password" name="password" placeholder="Enter Password" class="txtbox" required><br><br>

            <input type="submit" name="login" class="btn" value="Login"><br><br>
            <input type="submit" name="login" class="btn" value="Back">
        
        </form>
    </div>

    <?php

    $connection = mysqli_connect('localhost','root','','display_image');
    if(!$connection)
    {
        die('connection failed'.mysqli_error($connection));
    }
    
    if($_POST['login'])
    {
        $email = $_POST['email'];
        $passwod = $_POST['password'];

        $query="SELECT * FROM password_match_cpassword WHERE email = '$email' AND password = '$passwod'";
        $login = mysqli_query($connection,$query);

        if(mysqli_fetch_assoc($login)>0)
        {
           echo '<script type = "text/javascript"> alert("Logeed In Sucessfully")</script>';
           echo "<h1 class = 'text-center'> Welcome To Our Website </h1>";
        }
        else
        {
            echo '<script type = "text/javascript"> alert("Logeed In Failed")</script>';
        }
    }

    ?>

</body>
</html>