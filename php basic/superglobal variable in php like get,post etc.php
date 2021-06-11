<html>
    <head>
        <title>super global variable like GET,POST,SESSION,COOKIE ETC.</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        /* super global variable "$GLOBALS" variable is strore all the variable in a program */
        /* super global variables are 

            1.$GLOBALS
            2.$_SERVER
            3.$_SESSION
            4.$_COOKIE
            5.$_GET
            6.$_POST
            7.$_REQUEST
        */

        $var1 = 10;
        $var2= 200;


        function func(){
            $GLOBALS['var3'] = $GLOBALS['var1']+$GLOBALS['var2'];
            global $var3;
        }
        func();
        echo "sum is ".$var3."<br>";

        /* getting "$_SERVER" infromation */

            echo "1. ";
            echo $_SERVER['PHP_SELF']."<br>";
            echo "2. ";
            echo $_SERVER['SERVER_ADDR']."<br>";
            echo "3. ";
            echo $_SERVER['HTTP_HOST']."<br>";
            echo "4. ";
            echo $_SERVER['HTTP_REFERER']."<br>";
            echo "5. ";
            echo $_SERVER['HTTP_USER_AGENT']."<br>";
            echo "6.    ";
            echo $_SERVER['SCRIPT_NAME'];

        ?>

        
        

    </body>
</html>