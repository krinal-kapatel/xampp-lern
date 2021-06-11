<html>
    <head>
        <title> Useful String Function In Php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

  /* String functions in php like strlen() , strcmp(),  
  /* in php white space is also character in string function                                                                                  */

            $str = "hellokina";
            $str1 = "hello kina";  

            echo " 1. string length are : ".strlen($str1)."<br><br>";

        /* this function used for string comparision */

            if(strcmp($str,$str1)==0){
                echo "2. string are equal"."<br>";
            }else 
            {
                echo "2. string are not equal"."<br><br>";
            }

        /*----------------------------------------*/

        /* this function is used to repeat the string number of times */

            echo " 3. Sring Repeat  : ".str_repeat($str1,5)."<br><br>";

        /* this function is used for first string contain the second string or not */

            $string = strstr($str1,"hello");
            echo "4. string is : ".$string."<br><br>";

        /* this function is used for triming the string */

            echo "5. trim is  :".trim($str1,"hed!")."<br><br>";

        /* this function is used for which index of the string u wish to start and print "like hello world " we are 
            start index 6 than substr print world. */ 

            echo "6. the sub string is :  <b>".substr($str1,7)."</b><br><br>";

        /* this function is used for replace the existing string to new string */

            $str3 = "programing is fun";

            echo "7. orignal string is : <b> ".$str3."</b><br><br>";

           $stringreplace = str_replace("fun","epic",$str3);

           echo "7. the  replaced string is : <i>",$stringreplace."</i><br><br>";

        /*   this function is used to change the character are upperacase to lower case */ 

            echo "8.using string lowercase : ".strtolower("HELLO ")."<br><br>";

         /*   this function is used to change the character are lowercase  to uppercase */ 

            echo "9. using string uppercase : ".strtoupper($str3)."<br><br>";

         /* this is used for string first letter always uppercase */

            echo "using string UCFIRST : ".ucfirst("hello krinal")."<br><br>";

        /* this function is used for whole sentense first letter are uppercase */ 

            echo "using string UCWORDWS : ".ucwords("hello kina! how are you.")."<br><br>";



        




            


        ?>
        

    </body>
</html>