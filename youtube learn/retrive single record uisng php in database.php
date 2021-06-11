<html>
    <head>
        <title>Search by using ID</title>
        <style>
             body{
                background-color:lightgreen;
            }
            table,th,td{
                border:1px solid black;
                width:1100px;
                background-color:lightblue;
                text-align:center;
            }
            .btn{
                width:20%;
                height:5%;
                font-weight:bold;
                padding:0px;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Retrive Single reocrd from database using php mysql</h1>
            <h2>Retrive fetch record form database</h2>

            <div class="container">
                <form action="" method="POST">
                    <input type="text" name="id" placeholder="Enter student ID">
                    <input type="submit" name="submit" value="SEARCH BY ID">
                </form>
                <table>
                    <tr>
                        <th> firstname </th>
                        <th> lastname </th>
                        <th> Email </th>
                        <th> password </th>
                        <th> cpassword </th>
                    </tr>

                        <?php
                            $connection = mysqli_connect('localhost','root','','display_image');
                            if(!$connection)
                            {
                                die('connection failed'.mysqli_error($connection));
                            }
                            if(isset($_POST['submit']))
                            {
                                $id=$_POST['id'];
                                $query ="SELECT * FROM password_match_cpassword WHERE id='$id'";
                                $select = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_array($select))
                                {
                                    ?>

                                    <tr>
                                        <td><?php echo $row['firstname'] ?></td>
                                        <td><?php echo $row['lastname'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><?php echo $row['cpassword'] ?></td>
                                    </tr>

                                    <?php
                                }
                            }
                        ?>


                </table>
            </div>
        </center>    
    </body>
</html>