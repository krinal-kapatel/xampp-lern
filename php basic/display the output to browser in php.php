<html>
    <head>
        <title>display the output to browser in php</title>
        </head>
<body>

    <form action=""></form>

    <?php
    /* tow method php tag used in html */
    /* method 1 html tag used in php echo section */

        echo "<h2>Inside php Tag</h2>";
    /************************************* */
    ?>


    <h2>
    <?php
    /* method 2 html tag used outside php */

    echo "outside php tag";

    ?>
    </h2>

<!-- same effect both way -->


    <?php 
    /* using print() statement we also display the output*/

    print("<h1>Using Print Statement</h1>");


    ?>

</body>




</html>