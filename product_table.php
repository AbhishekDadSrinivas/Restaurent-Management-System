<?php session_start(); ?>
<!DOCTTYPE html>
<html>
<head>
    <style type="text/css">
    table, th, td{
            border: 1px solid white;
            border-collapse: collapse;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            color: white;
            margin-top: 50px;
        }
        th, td{
            padding: 15px;
        }
        th{
           
</style>
</head>
<body style="background-color: black">
    <center><img src="images/logo1.png" height="150px"></center><br>
    <?php
    error_reporting(0);
    $ses=$_SESSION["naam"];
    $conn = new mysqli('localhost','root','','restaurent');
    $sql = "SELECT * FROM product ;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($resultcheck > 0){
        echo "<table><tr><th>Product No.</th><th>Dish Name</th><th>Price</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
       echo "<tr><td>".$row["product_no"]."</td><td>".$row["product_name"]."</td><td>".$row["price"]."</td></tr>";
     }
        echo "</table>";
    }
    else{
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo '<span style="font-size:50px"><b><center>NO PRODUCTS</b></span>';
        #echo "error: ".$sql."<br>".$conn->error;
    }
    $conn->close;
?>
    </body>
</html>