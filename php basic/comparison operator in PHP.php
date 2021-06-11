<html>
    <head>
        <title></title>

        <style>
            b{
                color:pink;
                
            }

        </style>

    </head>

    <body>
        
        
        <?php             # '==','<','>','<=','>=','!='   this all are comparison operator

            $var1 = 200;
            $var2 = 20;

            echo "value of var1 is $var1 <br>";
            echo "value of var2 is $var2 <br><br>";
    

            if($var1 == $var2){
                
                echo "<b>the variable are equal</b>"."<br>";

            }else{
                
                echo "<b><i>The variable are not equal</i></b>"."<br>";

            }

            if($var1<$var2){

                echo"the variable1 is lessthan variale2"."<br>";

            }else{

                echo " the variable1 is not lessthan variable 2"."<br>";
            }

            if($var1>=$var2){
 
                echo "the variable1 is greaterthan variale2"."<br>";

            }else{

                echo " the variable1 is not greater or equal to variable 2"."<br>";
            }

            if($var1!=$var2){

                echo "the variable1 is not equalto  variale2"."<br>";

            }else{

                echo " the variable1 is  equal to variable 2"."<br>";
            }

            if($var1<=$var2){
                echo " the v1 is equalto v2";
            }
            else{
                echo "the v1 is not lessthan or equal to variable2 ";
            }
            



        
        ?>
        

    </body>
</html>