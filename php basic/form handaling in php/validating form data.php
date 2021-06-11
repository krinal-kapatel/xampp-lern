<html>
    <head>
        <title>validate the form data  </title>

        <style>


        </style>
  
    </head>

    <body>
        <form action="validating form data.php" method="GET"> 
            FirstName:-    
            <input type="text" name="firstname" placeholder="FirstName"/><br><br>
            LastName:-
            <input type="text" name="lastname" placeholder="LastName"/><br><br>
            Email:-
            <input type="text" name="email" placeholder="email"/><br><br>

            <input type="submit" name="submit" value="submit">

        </form>
        
        <h2>
        <?php

        /* same method we retrive the value of form using Post method */ 
        /* just replace $_GET TO $_POST */


if (isset($_GET['firstname']) AND isset($_GET['email']))
{
$nama=$_GET['firstname'];
$email=$_GET['email'];
}
else
{
echo "this";
}
  
if(empty($firstname))
{
echo "requierd";
}
else
{
if (is_numeric($firstname))
{
echo "not allow";
}
else
{
echo "Name: $firstname <br /> Email: $email";
}
}
        ?>
        </h2>
        

    </body>
</html>