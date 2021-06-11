<html>
    <head>
        <title>Usefull array function in php</title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php

        $array = array(100,200,300,400,500,"HTML","CSS","JAVASCRIPT");

        /* WE are check this $array is actully array or not using "is_array " function */

        if(is_array($array)){
            echo "1. this is array"."<br><br>";
        }else {
            echo "1. this is not array"."<br><br>";
        }

        /* we are check in this array the value are available or not using "in_array" function*/
        
        if(in_array(100,$array)){
            echo "2. value are available"."<br><br>";
        }else {
            echo "2.value are not available"."<br><br>";
        }
        
        /* "count" function is used to count the index number of elements in array */ 

        echo "3. count of array is : ".count($array)."<br><br>";

        /* "slice function is used to extract the elements of the array"*/
        /* syntax of the slice function array_slice(array name,index u strat to print , length u go to extract);*/

            $extract_array = array_slice($array,2,3);

            echo "4.slice of the array: ";
            print_r($extract_array)."<br><br>";
            
            echo " <br><br>"; 

        /* "array_search " funtion is used to search the value index  in the array */ 

            echo "5. search elements are : ".array_search("HTML",$array)."<br><br>";

        /* "array_push" funtion is used to add the elements in the array */
        
            echo "6. pushed elements are :".array_push($array,"bootstrap")."<br><br>"; /* we are seen added index only */ 

            array_push($array,"wordpress");
            print_r($array); /* using "print_r" we are see the added elements and also index of the array */ 
            echo "<br>";


        /* "array_pop" funtion is used to remove the elements in the array */
        /* array_pop function remove a last element added in the array like "last in first out "*/ 

            array_pop($array); 
            print_r($array);
            echo "<br>";
            
        

        ?>
        

    </body>
</html>