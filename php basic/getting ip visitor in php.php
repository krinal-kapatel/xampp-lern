<html>
    <head>
        <title> getting ip visitor information in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php
      /*  $ip = $_SERVER['REMOTE_ADDR'];

        echo "ip adderess is : ".$ip;*/ 

        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];

        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else{
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        echo "Ip adderess is :".$ip_address;    
        ?>
        

    </body>
</html>