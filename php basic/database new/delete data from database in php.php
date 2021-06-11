<!-------------database connection link-------------->
<?php include "university_connected_php.php"; ?>
<!---------------------------------------------------->

<html>
    <head>
        <title></title>
        </head>
<body>

    <form action=""></form>

    <?php

    $query = "DELETE FROM students WHERE id = 5";
    $delete = mysqli_query($connection,$query);
    if(!$delete)
    {
        die('query failed'.mysqli_error($connection));
    }
    else
    {
        echo "Deleted sucessfully";
    }


    ?>


</body>




</html>