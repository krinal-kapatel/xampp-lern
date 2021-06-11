<html>
    <head>
        <title>creating a html form </title>

        <style>


        </style>
  
    </head>

    <body>
        <form action="creating html form in php.php" method="POST"> 
            FirstName:-    
            <input type="text" name="firstname" placeholder="FirstName"/><br><br>
            LastName:-
            <input type="text" name="lastname" placeholder="LastName"/><br><br>
            Email:-
            <input type="email" name="email" placeholder="email"/><br><br>

            <input type="submit" name="submit" value="submit">

        </form>
        
        <h2>
        <?php

        if(isset($_REQUEST['submit'])){
            /* The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

                This function returns true if the variable exists and is not NULL, otherwise it returns false. */

            echo "FirstName is : ".$_REQUEST['firstname']."<br>";
            echo "LastName is : ".$_REQUEST['lastname']."<br>";
            echo "Email is : ".$_REQUEST['email']."<br>";
        }

        ?>
        </h2>
        

    </body>
</html>