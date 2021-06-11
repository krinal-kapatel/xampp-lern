<html>
    <head>
        <title>Array with foreach loop in php</title>
        </head>
<body>

    <form action=""></form>

    <?php
$array = array(10,20,30,40,50);
foreach($array as $item){
    echo $item."<br>";
}

    $fruits = array(
        'fruit'=>
        array(
            'red'=>'apple',
            'green'=>'watermelon',
            'yello'=>'mango'
        ),

        'flowers'=>
        array(
            'red'=>'rose',
            'green'=>'leaf',
            'yellow'=>'sunflower'
        )
        );

            foreach($fruits as $key=>$elements){
                echo $key."=> <br>";
                foreach($elements as $value){
                    echo $value.",";
                }
                echo "<br>";
            }


    ?>


</body>




</html>