
<!DOCTYPE html>

<html>
    <head>
        <title>display_image in php</title>
        <style>
            body{
                background-color:lightblue;
            }
        </style>
    </head>
<body>

    <center>
    <h1>Fetch / Retrive / Display Image from Using php Mysql</h1>
    <form action="" method = "POST" enctype = "multipart/form-data">
    
        <table  width="50%" border="1" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th> IMAGES </th>
                    <th> USERNAME   </th>
                    <th> DESIGNATIONN </th>
                </tr>
            </thead>

            <?php

                /*start php coding part and databas connection part*/

                $connection = mysqli_connect('localhost','root','','display_image');
                if(!$connection)
                {
                    die('connection failed'.mysqli_error($connection));
                }

                /* database connection part over*/ 

                /* start query part to display image in database */

                $query = "SELECT * FROM employee";
                $query_run = mysqli_query($connection,$query);
                if(!$query_run)
                {
                    die('query failed'.musqli_error($connection));
                }
                else
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>

                        <tr>
                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt = "image" style = "width:100px height:100px;" >'; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
                        </tr>
                        

                        <?php
                    }
                }


            ?>

        </table>
    
    </form>
</center>

    <?php



    ?>


</body>




</html>