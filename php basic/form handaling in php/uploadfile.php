<html>
    <head>
        <title>file upload in php</title>
        </head>
<body>

    <form action="uploadfile.php" method="Post" enctype = "multipart/form-data">
             FirstName:-    
                <input type="text" name="firstname" placeholder="FirstName"/><br><br>
            LastName:-
                <input type="text" name="lastname" placeholder="LastName"/><br><br>
            Email:-
                <input type="email" name="email" placeholder="email"/><br><br>
            Select File:- 
                <input type="file" name = "file">

            <input type="submit" name="submit" value="submit">


</form>

    <?php

        if(isset($_POST['submit'])){
            /* The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

                This function returns true if the variable exists and is not NULL, otherwise it returns false. */

                /* without htmlspecialchars() anyone can used a html tag in a input box and chang the result of the page*/
                /* but using htmlspecialchars() we enter any tag in a input ox no effect will be display */

            $first_name = ($_POST['firstname']);
            $last_name = htmlspecialchars($_POST['lastname']);
            $mail = htmlspecialchars($_POST['email']);

            $file_name = $_FILES['file']['name'];
            $file_tmp_name = $_FILES['file']['tmp_name'];


            /* this code is validate the data we are inserted right or wrong */ 
            if($first_name =="" || $last_name =="" || $mail ==""){
                echo "all are important <br>";

            }elseif(strlen($mail)<10){
                echo "Emial are to short! Enter valid email :( <br>";

            }else {
                
            echo "FirstName is : ".$first_name."<br>";
            echo "LastName is : ".$last_name."<br>";
            echo "Email is : ".$mail."<br>";

            $target = "uploads/";

            if(move_uploaded_file($file_tmp_name, $target."$file_name"))
            {
                echo "file uploded sucessfully<br>";
            }else{
                echo "path not set proprerly ! Try again<br>";
            }
        }
        /*--------------------------------------------------------------------*/

        }
    ?>


</body>




</html>