<?php

$connection  = mysqli_connect('localhost','root','','email_verification');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));

}
else
{
    echo "connect";
}

?>
