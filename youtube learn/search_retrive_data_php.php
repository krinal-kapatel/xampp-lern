<html>
    <head>
        <title>Search or retrive Data in php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            body{
                background-color:lightgreen;
            }
            table,th,td{
                border:1px solid black;
                width:1100px;
                background-color:lightblue;
                text-align:center;
            }
            .btn{
                width:20%;
                height:5%;
                font-weight:bold;
                padding:0px;
            }
            
        </style>
    </head>
<body>

<center>
    <h1>retrive fetch data using php mysql</h1>
    <h2>Report Generation using Id</h2>    

    <div class="container">
    <form action="" method="POST">
        <table>
            <tr>
                
                <th> First name </th>
                <th> Last Name </th>
                <th> Email </th>
                <th> Password </th>
                <th> Cpassword </th>
            </tr>
    
        <input type="submit" name="search" value="SEARCH Data" class="btn"><br><br>
        
    </form>
</div>
</center>

<?php


$connection = mysqli_connect('localhost','root','','display_image');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));
}

if(isset($_POST['search']))
{
    $query="SELECT * FROM password_match_cpassword";
    $select = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($select))
    {
        ?>
        <tr>
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['cpassword'] ?></td>
        </tr>
        <?php
        
    }

}
?>

</body>
</html>