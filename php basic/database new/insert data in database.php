<!-------------database connection link-------------->
<?php include "university_connected_php.php"; ?>
<!---------------------------------------------------->


<html>
    <head>
        <title>Insert data in database from php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        </head>
<body>

<div class="container">

    <div class="col-sm-6">

        <form action="insert data in database.php" method = "POST">
            <div class="form-group">
                <label for="firstname">Firstname:-</label>
                <input type="text" name = "fname" placeholder= "Enter Firstname" class="form-control">
            </div>

            <div class="form-group">
                <label for="lasttname">Lasttname:-</label>
                <input type="text" name = "lname" placeholder= "Enter Lastname" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email:-</label>
                <input type="email" name = "email" placeholder= "Enter Email" class="form-control">
            </div>

            <input type="submit" class = "btn btn-primary btn-lg" value = "submit" name = "submit">
        </form>

    </div>

</div>

    <?php

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        $query = "INSERT INTO students (first_name,last_name,email) VALUES ('$fname','$lname','$email')";
        $insert = mysqli_query($connection,$query);
        if(!$insert)
        {
            die('query failed'.mysqli_error($connection));
        }
        else{
            echo "welcome ".$fname;
        }

    }



    ?>


</body>




</html>