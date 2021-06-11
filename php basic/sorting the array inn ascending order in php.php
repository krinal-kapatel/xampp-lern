<html>
    <head>
        <title>Ascending order array sorting </title>

        <style>


        </style>
  
    </head>

    <body>
        
        
        <?php
        $array = array(80,30,90,160,187,66,75);
        $lenghth = count($array);

        for($out=0; $out<($lenghth-1); $out++){
            for($in=($out+1); $in<$lenghth; $in++){
                if($array[$out] > $array[$in]){

                $temp=$array[$in];
                $array[$in]=$array[$out];
                $array[$out]=$temp;
            }
        }
    }

            foreach($array as $value){
                echo $value."<br>";
            }
        
        ?>
        

    </body>
</html>