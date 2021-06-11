
<!DOCTYPE html>

<html>
    <head>
        <title>insert radio button value in database using php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <style>
            body{
                background-color:  #4c0000;
            }
            h1{
                color:white;
            }
            .text-center{
                color:white;
            }
            .form-group{
                color:white;
            }
        
        </style>

        </head>
<body>
<center>
    <h1>Insert Radio Button Value Into Database Using Php Mysql</h1>
</center>
    <div class="container">
        <div class="col-sm-3">
        
            <h4 class="text-center">Enter Radio Button Value</h4>
                <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="username">Username:-</label>
                    <input type="text" name="username" placeholder="Enter Username" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email">Email:-</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="radio button">Gender:- </label><br>
                    <input type="radio" name="gender" value="MALE"> male 
                    <input type="radio" name="gender" value="FEMALE"> female
                </div>
    
                <input type="submit" name="submit" value="Submit" class="btn-lg">
                
                </form>
        
        </div>
    </div>
    
    

    <?php

    $connection = mysqli_connect('localhost','root','','display_image');
    if(!$connection)
    {
        die('connection failed'.mysqli_error($connection));
    }
  /******************************************************************* */

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
       

        $query = "INSERT INTO radio_button_value (username,email,gender) VALUES ('$username','$email','$gender')";
        $radio = mysqli_query($connection,$query);
        if(!$radio)
        {
            die('query failed'.mysqli_error($connection));
        }
        else
        {
            echo '<script type = "text/javascript"> alert("data uploded sucessfully") </script>';
        }
    }    



    ?>


</body>




</html>