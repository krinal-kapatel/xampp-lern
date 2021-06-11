<html>
    <head>
        <title>math function in php</title>

        <style>


        </style>
  
    </head>

    <body>
        <form>
</form>
        
        <h3>
        <?php

        /* math functions in php  */

        echo "absolute value is : ".abs(-100)."<br>";//The abs() function returns the absolute (positive) value of a number:
        echo "the random number in php  ".rand(1,100)."<br>";  // random function print random value 
        echo "the ceil function is  ".ceil(2.8)."<br>"; // The ceil() function rounds a number UP to the nearest integer, if necessary.
        echo "the power function  : ".pow(5,2)."<br>";  // pow() function is used to find the power of the value
        echo "the squreroot function : ".sqrt(120)."<br>"; // find the squareroot 
        echo "the floor function : ".floor(2.5)."<br>"; // print the first int like 2.5 than print 2 
        echo "the round function : ".round(2.8)."<br>"; // The round() function rounds a floating-point number.
        
        echo "Sin value is : ".sin(30*pi()/180)."<br>";
        echo "Cos value is :".cos(60*pi()/180)."<br>";
        echo "tan value is :".tan(45*pi()/180)."<br>";
        ?>
        </h3>

    </body>
</html>