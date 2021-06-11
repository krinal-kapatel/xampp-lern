<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Update_data_php_curd</title>
</head>
<body>

 <?php

    $connection = mysqli_connect('localhost','root','','curd_op');
    if(!$connection)
    {
        die('connection failed'.mysqli_error($connection));
    }

    $id = $_POST['id'];

    $query = "SELECT * FROM student WHERE id = '$id'";
    $select = mysqli_query($connection,$query);

if($select)
{
    while($row = mysqli_fetch_array($select))
    {
        ?>
    <div class="container">
        <div class="jumbotron">
            <h2>PHP - CURD : Update Data IN PHP</h2>
            <hr>
                <form action="" method="POST">
                <input type="hidden" name="id" value=" <?php echo $row['id']; ?> ">
                <div class="form-group">
                    <lable for=""> First Name : </lable>
                    <input type="text" name="fname" class="form-control" value=" <?php echo $row['fname']; ?> " placeholder="enter first name" required>
                </div>
                <div class="form-group">
                    <lable for=""> Last Name : </lable>
                    <input type="text" name="lname" class="form-control" value=" <?php echo $row['lname']; ?> " placeholder="enter last name" required>
                </div>
                <div class="form-group">
                    <lable for=""> Contact : </lable>
                    <input type="text" name="contact" class="form-control" value=" <?php echo $row['contact']; ?> " placeholder="enter contact" required>
                </div>

                <button type="submit" name="update" class="btn btn-primary">UPDATE DATA </button>

                <a href="display_data.php" class="btn btn-danger"> CANCLE </a>
            </form>

            <?php

                if(isset($_POST['update'])) 
                {
                    $fname = $_POST['fname'];
                    $lname= $_POST['lname'];
                    $contact = $_POST['contact'];

                    $query = "UPDATE student SET fname = '$fname', lname = '$lname', contact = '$contact' WHERE id = '$id'";
                    $update = mysqli_query($connection,$query);
                    if($update)
                    {
                        echo '<script type="text/javascript"> alert("data updated sucessfully") </script>';
                        header("location:display_data.php");
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("data not updated sucessfully") </script>';
                    }
                }   


            ?>
        </div>
    </div>

        <?php
    }
}
else
{
    echo '<script type="text/javascript"> alert("NO Record Found") </script>';
}

?>
    
</body>
</html>