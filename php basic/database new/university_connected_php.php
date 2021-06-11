<html>
    <body>
        
        <head>

            <title></title>

        </head>

        <?php

            $connection = mysqli_connect('localhost','root','','university');
            if(!$connection)
            {
                die('connection failed'.mysqli_error($connection));
            }
            

        ?>

    </body>

</html>