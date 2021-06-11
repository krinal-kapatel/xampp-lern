<html>

<head>
    <title>upload image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <style>
    body{
        background-color:lightblue;
    }
    input{
        height:10%;
        border:1px;
        border-radius:05px;
        padding:8px 15px 8px 15px;
        
        box-shadow: 2px 2px 3px 2px black;
        font-weight:bold;
    }
    
    </style>

</head>

<body>
    <center>
        <h1>Upload / Insert image into database uisng php mysql</h1>
    </center>

    <div class="container">
        <div class="col-sm-3">
            <h1 class="text-center">Upload image</h1>
            <form action="" method = "POST" enctype = "multipart/form-data">
                <div class="form-group">
                    <label for="chooes an profile pic">chooes an profile pic</label>
                    <input type="file" name = "image" id = "image" class = "form-control">
                </div>

                <div class="form-group">
                    <label for="username">Enter Username:</label>
                    <input type="text" name = "username" placeholder = "Enter Username"  class = "form-control">
                </div>

                <div class="form-group">
                    <label for="designation">Enter Designation</label>
                    <input type="text" name = "designation" placeholder = "Enter Designation" class = "form-control">
                </div>

                <input type="submit" name="submit" value = "Upload Image / Data" class = "btn btn-primary btn-lg">

            </form>
        </div>
    </div>
    
    
 <!--start php coding part and databas connection part-->

 <?php

 $connection = mysqli_connect('localhost','root','','display_image');
 if(!$connection)
 {
     die('connection failed'.mysqli_error($connection));
 }

/* database connection part over*/ 

/* start query part to insert image in database */

if(isset($_POST['submit']))
{
    $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $username = $_POST['username'];
    $designation = $_POST['designation'];


    $query = "INSERT INTO employee (image,username,designation) VALUES ('$file','$username','$designation')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Image Upload Sucessfully") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Something went wrong in image uplodation") </script>';
    }
}









?>





</body>















</html>