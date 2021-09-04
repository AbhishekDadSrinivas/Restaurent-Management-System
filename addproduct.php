<!DOCTYPE.html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="pstyle.css">
    <style type="text/css">
        .pad5{
    margin-top: 200px;
    text-align: center;
    font-size: 50px;
    color: white;
}
    </style>
    </head>
    <body style="background-color: black">
        <center><img src="images/logo1.png" height="150px"></center><br>
        <div class="pad5">
<?php 
error_reporting(0);
$modelname= $_POST["modelname"];
$price= $_POST["price"];
$stock= $_POST["stock"];
$conn = new mysqli('localhost','root','','restaurent');
$sql= "INSERT INTO product(product_name, price, stock) VALUES('$modelname', '$price', '$stock');";
if($conn->query($sql)){
    echo "PRODUCT ADDED SUCESSFULLY";
}
else{
    echo "error ".$sql."<br>".$conn->error;
}
$conn->close;
?>
<br>
<br>
<a href="home.php">HOME</a>
        </div>
    </body>
</html>