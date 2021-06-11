<html>
    <head>
        <title>Search Data Using Textbox in php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            body{
                background-color:whitesmoke;
            }
            input{
                width: 40%;
                height: 5%;
                margin:10px 0px 15px 0px;
                font-family: sans-serif;
                padding: 8px 15px 8px 15px;
                border-radius: 05px;
                border: 1px;
                box-shadow:1px 1px 2px 2px grey;
}
        </style>
    </head>
    <body>
        <center>
            <h1>Search Data From Database Using Textbox in php</h1>
            <div class="container">
                <form action="" method = "POST">
                    <input type="text" name="searchbox" placeholder="Enter ID for Search" class="txtbox"><br>
                    <input type="submit" name="submit" class="btn">
                </form>
            </div>
        </center>

        <?php

            $connection = mysqli_connect('localhost','root','','display_image');
            if(!$connection)
            {
                die('connection failed'.mysqli_error($connection));

            }

            if(isset($_POST['submit']))
            {
                $searchbox=$_POST['searchbox'];

                $query =  $query="SELECT * FROM password_match_cpassword WHERE id='$searchbox'";
                $select = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($select))
                {
                    ?>
                    <center>
                    <form action="" method="POST">
                        <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"><br>
                        <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"><br>
                        <input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
                        <input type="text" name="password" value="<?php echo $row['password'] ?>"><br>
                        <input type="text" name="cpassword" value="<?php echo $row['cpassword'] ?>">
                    </form>
                </center>
                    <?php
                }
                
               
            }
            

        ?>

    </body>
</html>