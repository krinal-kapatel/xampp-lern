<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Display_data_php_curd</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2> PHP - CURD: Display Data in php </h2>
            <hr>
    <div class="row">
        <a href="insert_data.php" class="btn btn-success" style="margin-left:80%;">ADD DATA</a>
    </div>
    <br>

<?php

$connection = mysqli_connect('localhost','root','','curd_op');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));
}

$query = "SELECT * FROM student";
$select = mysqli_query($connection,$query);
?>

<table class="table table-bordered" style="background-color:white;">
    <thead class="table-dark">
        <tr>
            <th> ID </th>
            <th> First name</th>
            <th> Last name </th>
            <th> Contact </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
    </thead>

<?php

    if($select)
    {

        while($row = mysqli_fetch_array($select))
        {
            ?>
                <tbody>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <th><?php echo $row['fname']; ?></th>
                    <th><?php echo $row['lname']; ?></th>
                    <th><?php echo $row['contact']; ?></th>

                <form action="update_data.php" method="POST">
                    <input type="hidden" name="id" value=" <?php echo $row['id']; ?> ">
                    <th><input type="submit" name="edit" class="btn btn-primary" value="EDIT"></th>
                 </form>

                 <form action="delete_data.php" method="POST">
                    <input type="hidden" name="id" value=" <?php echo $row['id']; ?> ">
                    <th><input type="submit" name="delete" class="btn btn-danger" value="DELETE"></th>
                </form>

                </tr>
                </tbody>

            <?php

        }
        
    }
   

?>
            </table>
        </div>
    </div>
</body>
</html>