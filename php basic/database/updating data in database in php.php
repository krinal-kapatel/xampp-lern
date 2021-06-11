<html>
    <head>
        <title>Updating data in database</title>
        </head>
<body>

<?php

    require("connection with the table in php.php");

    $update = "UPDATE STUDENTS SET first_name='pravina',email='pg@gmail.com' WHERE id=10";

    mysqli_query($connection , $update) or die('query not execute');

    echo "Record updated sucessfully";
    mysqli_close($connection);

?>
    <body>

</html>