

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Insert data into database using php</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

            <?php 
            if(isset($_SESSION['status']))
            {

            
                echo "<h4>".$_SESSION['status']."<h4>";
                unset($_SESSION['status']);
            }
            ?>

            <div class="card mt-5">
                    <div class="card-header">
                        <h4>How To Insert Data into Database in Php</h4>
                    </div>
                    <div class="card-body">
                    <form action="add multiple checkbox value into database.php" method="POST">
                    <div class="form-group mb-3">
                                <input type="checkbox" name="agree[]" value="football"> football <br>
                                <input type="checkbox" name="agree[]" value="cricket"> cricket <br>
                                <input type="checkbox" name="agree[]" value="hockey"> hockey <br>
                                <input type="checkbox" name="agree[]" value="kabbadi"> kabbadi <br>
                                <input type="checkbox" name="agree[]" value="video games"> video games <br>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" name="insert_data" class="btn btn-primary"> SAVE DATA </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<?php

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
    if($insert)
    {
        echo '<script type = "text/javascript"> alert("sucess") </script>';
        echo $item;
    }
    else
    {
        echo '<script type = "text/javascript"> alert(" not sucess") </script>';
    }

   }

}
?>

    
  </body>
</html>