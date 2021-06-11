<html>
    <head>
        <title>insert data in database in php </title>

        <style>


        </style>
  
    </head>

    <body>

    <form action="insert data in database in php.php" method="POST"> 
            FirstName:-    
            <input type="text" name="firstname" placeholder="FirstName"/><br><br>
            LastName:-
            <input type="text" name="lastname" placeholder="LastName"/><br><br>
            Email:-
            <input type="email" name="email" placeholder="email"/><br><br>
            Marks:-
            <input type="text" name="marks" placeholder="entermarks"/><br><br>

            <input type="submit" name="submit" value="submit">

    </form>


    <?php

    if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $marks = $_POST['marks'];

        require('connection with the table in php.php');

        /* syntax of insert query 
        // INSERT INTO table_name (column1, column2, column3,...)VALUES (value1, value2, value3,...) */

        $insert = "INSERT INTO STUDENTS(first_name,last_name,email,marks) VALUES ('$firstname','$lastname','$email','$marks')";

        mysqli_query($connection , $insert) or die('cannot execute query');

        echo "Record insert sucesfully";

        mysqli_close($connection);

    }

    ?>

      
    </body>
</html>