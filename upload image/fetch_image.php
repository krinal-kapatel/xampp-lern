
<!DOCTYPE html>

<html>
    <head>
        <title>fetch image  test from database in php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        </head>
<body>


    <center>
    <form action="" method = "POST" enctype = "multipart/form-data">
    
        <table border ="1" width = "50%">
            <thead>
                <tr>
                    <td>IMAGE</td>
                    <td>USERNAME</td>
                </tr>
            </thead>

            <?php

            $_connection = mysqli_connect('localhost','root','','display_image');
            if(!$_connection)
            {
                die('connection failed'.mysqli_error($_connection));
            }
           

            $query = "SELECT * FROM myway_uploadimg";
            $select = mysqli_query($_connection,$query);
            if(!$select)
            {
               die('query failed'.mysqli_error($_connection)); 
            }
            else
            {
                while($row = mysqli_fetch_array($select))
                {
                    ?>
                    <tr>
                       
                        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt = "image" style = "width:100px height:100px;">' ?></td>
                        <td><?php echo $row['username']; ?></td>
                    </tr>
                    

                    <?php
                }

            }




            ?>


        </table>


    </form>
    </center>

    


</body>




</html>