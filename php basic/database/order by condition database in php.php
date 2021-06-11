<html>
    <head>
        <title>order by condition  in database in php </title>

        <style>


        </style>
  
    </head>

    <body>
<!--
    <form action="select or retriving data in database.php" method="POST"> 
            FirstName:-    
            <input type="text" name="firstname" placeholder="FirstName"/><br><br>
            LastName:-
            <input type="text" name="lastname" placeholder="LastName"/><br><br>
            Email:-
            <input type="email" name="email" placeholder="email"/><br><br>

            <input type="submit" name="submit" value="submit">

    </form>--->


    <?php

    
        require('connection with the table in php.php');

        /* syntax of insert query 
        // INSERT INTO table_name (column1, column2, column3,...)VALUES (value1, value2, value3,...) */

        $select = "SELECT * FROM STUDENTS ORDER BY MARKS ASC";

       $run = mysqli_query($connection , $select) or die('cannot execute query');

        while($row = mysqli_fetch_array($run)){

            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
            $email = $row['email'];
            $marks = $row['marks'];

            echo "First Name is ".$firstname."<br>";
            echo "Last Name is ".$lastname."<br>";
            echo " Email is ".$email."<br>";
            echo "marks is ".$marks."<br>";


        }

        mysqli_close($connection);

    

    ?>

      
    </body>
</html>