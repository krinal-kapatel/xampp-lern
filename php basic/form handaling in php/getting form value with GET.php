<html>
    <head>
        <title>getting form value with GET method </title>

        <style>


        </style>
  
    </head>

    <body>
        <form action="getting form value with GET.php" method="GET"> 
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

        /* same method we retrive the value of form using Post method */ 
        /* just replace $_GET TO $_POST */

        if(isset($_GET['submit'])){
            /* The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

                This function returns true if the variable exists and is not NULL, otherwise it returns false. */

                /* without htmlspecialchars() anyone can used a html tag in a input box and chang the result of the page*/
                /* but using htmlspecialchars() we enter any tag in a input ox no effect will be display */

            $first_name = ($_GET['firstname']);
            $last_name = htmlspecialchars($_GET['lastname']);
            $mail = htmlspecialchars($_GET['email']);

            /* this code is validate the data we are inserted right or wrong */ 
            if($first_name =="" || $last_name =="" || $mail ==""){
                echo "all are important <br>";

            }elseif(strlen($mail)<10){
                echo "Emial are to short! Enter valid email :( <br>";

            }else {
                
            echo "FirstName is : ".$first_name."<br>";
            echo "LastName is : ".$last_name."<br>";
            echo "Email is : ".$mail."<br>";
        }
        /*--------------------------------------------------------------------*/
    }
 
        ?>
        </h2>
        

    </body>
</html>