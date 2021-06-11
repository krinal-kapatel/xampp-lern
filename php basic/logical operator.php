<html>
    <head>
        <title>Logical Operator using PHP</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php        # 'AND  &&','OR ||','NOT !'

       $user="kina";
       $pass="krinal217";

       echo "Username : $user <br>";
       echo "Password : $pass <br><br>";

        if(($user == "princy") && ($pass == "krinal217")) {    # both condition true than AND && operator go in if condition otherwise goto else part
            echo "Login Sucessfully :)"."<br>";

        }
        else{
            echo "Try again :("."<br>";
        }

        if(($user == "kina") || ($pass == "krinal")) {      ## anyone condition true than OR || operator go in if condition and print the message
            echo "Login Sucessfully using or operator :)"."<br>";

        }
        else{
            echo "Try again using or operator :("."<br>";
        }

        if(($user != "kina") && ($pass == "krinal217")){
            echo "login sucessfully using not operator";

        }else{

            echo "login unsucessfully";
        }
        
        ?>
        

    </body>
</html>