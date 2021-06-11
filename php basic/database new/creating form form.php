<html>
    <head>
        <title>create html form in php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        </head>
<body>

<div class="container">

    <div class="col-sm-6">

        <form action="creating form form.php" method = "POST">
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



    ?>


</body>




</html>