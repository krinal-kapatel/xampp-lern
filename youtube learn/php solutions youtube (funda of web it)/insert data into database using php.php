
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
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How To Insert Data into Database in Php</h4>
                    </div>
                    <div class="card-body">
                    <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name :-</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number :-</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Your phone Number">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email :-</label>
                                <input type="Email" name="email" class="form-control" placeholder="Enter Your Email Adderess">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Designation :-</label>
                                <input type="text" name="designation" class="form-control" placeholder="Enter Your Designation">
                            </div>
                           
                            
                            <div class="form-group mb-3">
                                <label for="">Gender :-</label>
                                <input type="radio" name="gender"  value = "Male"> Male
                                <input type="radio" name="gender"  value = "Female"> Female
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hobby :-</label>
                                <select name="hobby" class="form-control">
                                    <option value="">--Select Hobby--</option>
                                    <option value="travelling"> Travelling </option>
                                    <option value="listingmusic"> Listing Music </option>
                                    <option value="playingcricket">Playing Cricket</option>
                                    <option value="reading">Reading</option>
                                </select>
                            </div>
                            
                            <div class="form-group mb-3">
                                <input type="checkbox" name="agree" value="i agree to it"> I Agree To This Terms and Conditions <br>
                                <input type="checkbox" name="agree" value="i am not agree to it"> I am not  Agree To This Terms and Conditions
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

        $connection= mysqli_connect('localhost','root','','php_solution_youtube');
        if(!$connection)
        {
            die('connection failed'.mysqli_error($connection));
        }
        
            if(isset($_POST['insert_data']))
            {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $designation = $_POST['designation'];
                $gender = $_POST['gender'];
                $hobby = $_POST['hobby'];
                $agree = $_POST['agree'];
                
                $query = "INSERT INTO employes (name,phone,email,designation,gender,hobby,agree) VALUES ('$name','$phone','$email','$designation','$gender','$hobby','$agree')";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo '<script type = "text/javascript"> alert("successfully Inserted data") </script>';
                    echo "<h1 class='text-center'> welcome ".$name."</h1>";
                    
                }
                else
                {
                    echo '<script type = "text/javascript"> alert("Registration Failed") </script>'; 
                }

            }
            


?>
  </body>
</html>