<!DOCTYPE html>

<html>
    <head>
        <title>insert Drop down list value in database using php</title>
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
            select{
                color:black;
            }
        
        </style>

        </head>
<body>
<center>
    <h1>Insert DropDown List Button Value Into Database Using Php Mysql</h1>
</center>
    <div class="container">
        <div class="col-sm-3">
        
            <h4 class="text-center">Enter form Value</h4>
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

                <div class="form-group">
                    <label for="dropdownlist">Hobby :-</label><br>
                    <select name="hobby">
                        <option value="">--Select--</option>
                        <option value="cricket">Cricket</option>
                        <option value="listing music">Listing Music</option>
                        <option value="singing">Singing</option>
                        <option value="traveling">Traveling</option>
                    </select>
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
      $hobby = $_POST['hobby'];

      $query = "INSERT INTO dropdown_list (username,email,gender,hobby) VALUES ('$username','$email','$gender','$hobby')";
      $dropdown = mysqli_query($connection,$query);
      if(!$dropdown)
      {
          die('query failed'.mysqli_error($connection));
      }
      else
      {
         echo '<script type="text/javascript"> alert("insert data sucessfully") </script>';
      } 
  }