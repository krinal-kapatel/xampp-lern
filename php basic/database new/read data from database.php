<!-------------database connection link-------------->
<?php include "university_connected_php.php"; ?>
<!---------------------------------------------------->


<html>
    <head>
        <title>Read data from database in php</title>
        </head>
<body>

    

    <?php

    // $query = "SELECT * FROM students";
    // $query = "SELECT * FROM `students` WHERE first_name = 'krinal'";
    // $query = "SELECT * FROM `students` ORDER BY first_name ASC";
    $query = "SELECT first_name,email FROM `students` ORDER BY first_name DESC";
    $select = mysqli_query($connection,$query);
    if(!$select)
    {
        die('query failed'.mysqli_error($connection));
    }
    
        while($row = mysqli_fetch_assoc($select)){

            $fisrtname = $row['first_name'];
            $lastname = $row['last_name'];
            $email = $row['email'];

            echo "First name : ".$fisrtname."<br>";
            echo "Last name : ".$lastname."<br>";
            echo "Email : ".$email."<br><br>";

        }



    ?>


</body>




</html>