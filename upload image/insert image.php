
<!DOCTYPE html>

<html>
    <head>
        <title>Insert image Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <style>
            body{
                background-color:#634257;
            }
            .h1Color{
                color:white;
            }
            .text-center{
                color:white;
            }
            .form-group{
                color:white;
                font-size:20px;
            }
        </style>

    </head>
<body>
    <center>
        <h1 class = "h1Color">INSERT IMAGE IN DATABASE USING PHP MYSQL</h1>
    </center>
    <div class="container">
        <div class="col-xs-5">
            <h1 class="text-center">upload image</h1>
                <form action="" method = "POST" enctype = "multipart/form-data">

                    <div class="form-group">
                        <label for="image">choose profile pic:-</label>
                        <input type="file" name = "image" class="form-control" id = "image">
                    </div>

                    <div class="form-group">
                        <label for="username">Username:-</label>
                        <input type="text" name = "username" class="form-control" placeholder= "Enter Username" id = "username">
                    </div>

                    

                    <input type="submit" name="submit" value = "Upload Image / Data" class="btn btn-success btn-lg">
                
                </form>
        </div>
    </div>
    

    <?php

    $connection = mysqli_connect('localhost','root','','display_image');
    if(!$connection)
    {
        die('query failed'.mysqli_error($connection));
    }
    else
    
    if(isset($_POST['submit']))
    {
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $username = $_POST['username'];

        $query = "INSERT INTO myway_uploadimg(username,image) VALUES ('$username','$file')";
    $upload = mysqli_query($connection,$query);
    if($query)
    {
        echo '<script type = "text/javascript"> alert("image upload sucessfully") </script>';
    }
    else
    {
        echo '<script type = "text/javascript"> alert("image not Uploded") </script>';
    }
        
    }


    


    ?>


</body>




</html>