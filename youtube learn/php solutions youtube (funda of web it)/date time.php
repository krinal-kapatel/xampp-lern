<?php session_start(); ?>

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
        <div class="row">
            <div class="col-md-10">

                <?php

                    if(isset($_SESSION['status']))
                    {
                    
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey! </strong> <?php echo $_SESSION['status'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['status']);
                    }

                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>How To Insert Data into Database in Php</h4>
                    </div>
                    <div class="card-body">
                    <form action="date _time_code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name :-</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Date of Birth :-</label>
                                <input type="datetime-local" name="event_dt" class="form-control" placeholder="Enter Your Dob">
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

    
  </body>
</html>
