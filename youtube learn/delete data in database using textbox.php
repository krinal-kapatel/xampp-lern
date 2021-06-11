<html>
    <head>
        <style>
            body{
                background-color:whitesmoke;
            }
            input{
                width:20%;
                height:5%;
                text-align:center; 
                border-radius:05px;
            
            }
            .btn{
                background-color:lightblue;
            }
        </style>
    </head>
        <body>
            
            <center>
            <h1>Delete data in database using textbox in php mysql</h1>
            <h2>Delete Record</h2>
                <div class="container">
                    <form action="" method="POST">
                        <input type="text" name="id" class="txtbox" placeholder="Enter Id to delete"><br><br>
                        <input type="submit" name="submit" value="Delete Data" class="btn">
                    </form>
                </div>
            </center>

        <?php

            $connection=mysqli_connect('localhost','root','','display_image');
            if(!$connection)
            {
                die('connection failed'.mysqli_error($connection));
            }

            if(isset($_POST['submit']))
            {
                $id=$_POST['id'];

                $query = "DELETE FROM password_match_cpassword WHERE id='$id'";
                $delete=mysqli_query($connection,$query);
                if($delete)
                {
                    echo '<script type="text/javascript"> alert("data deleted sucessfully") </script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Enter Valid Id") </script>';
                }
            }

        ?>

        </body>
    
</html>