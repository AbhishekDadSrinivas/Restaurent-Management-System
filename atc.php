<?php
error_reporting(0);
session_start();
$uid=$_SESSION["naam"];
echo "<br>";
$itemno=$_POST["atc"];
echo $itemno;
$quantity=$_POST["quantity"];
$price;
$stock;
?>
<html>
<head>
    <style type="text/css">
    header{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/back.jpeg");
    height: 100vh;
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
    position: relative;
    margin-top: -130px;
}
        table, th, td{
            border: 1px solid white;
            border-collapse: collapse;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            color: white;
            margin-top: -50px;
        }
        th, td{
            padding: 15px;
        }
        th{
            text-align: left;
        }
        p.title{
            font-size: 100px;
            color: white;
            padding-top: 50px;
            padding-left: 600px;
        }
  .titlelink1{
    padding-top: 20px;
}
.titlelink1 a{
    cursor: pointer;
    border: 1px solid white;
    height: 50px;
    width: 200px;
    color: white;
    font-size: 50px;
    box-shadow: 0 6px 6px rgba(0,0,0,0.6);
    text-decoration: none;
}
a.check{
    margin-left: 57px;
}
a.continue{
    margin-left: 307px;
}

    </style>
</head>
<body>
    <header>
        <p class="title">CART</p>
<?php
$conn = new mysqli('localhost','root','','restaurent');
if($conn->connect_error){
    die('connrction failed : '.$conn->connect_error);
}
else{
    $sql2="SELECT * FROM product natural join addtocart WHERE uid='$uid' AND product_no='$itemno';";
    $result2 = mysqli_query($conn, $sql2);
    $resultcheck2 = mysqli_num_rows($result2);
    if($resultcheck2 > 0){
     while($row2 = mysqli_fetch_assoc($result2)){
         $newqty=$row2['qty'] + $quantity;
         $newprice=$row2['price'] * $newqty;
         $stock=$row2['stock'];
     }
     if($quantity <= $stock){
    $newstock= $stock - $quantity;
    $sql5="UPDATE product SET stock='".$newstock."' WHERE product_no='".$itemno."';";
     $sql3="UPDATE addtocart SET qty='".$newqty."' WHERE product_no='".$itemno."' AND uid='".$uid."';";
     $sql4="UPDATE addtocart SET tot_price='".$newprice."' WHERE product_no='".$itemno."' AND uid='".$uid."';";
     $conn->query($sql3);
     $conn->query($sql4);
     $conn->query($sql5);
 }
 else{
    echo "REQUIRED QUANTITY IS NOT AVAILABLE";
 }
 }
     else{
 $sql1 = "SELECT * FROM product WHERE product_no='$itemno';";
    $result1 = mysqli_query($conn, $sql1);
    $resultcheck1 = mysqli_num_rows($result1);
    if($resultcheck1 > 0){
     while($row1 = mysqli_fetch_assoc($result1)){
         $price=$row1['price'] * $quantity;
         $stock=$row1['stock'];
     }
 }
if($quantity <= $stock){
    $newstock= $stock - $quantity;
    $sql5="UPDATE product SET stock='".$newstock."' WHERE product_no='".$itemno."';";
$sql= "INSERT INTO addtocart(uid, product_no, qty, tot_price) VALUES('$uid', '$itemno', '$quantity', '$price')";
    $conn->query($sql);
    $conn->query($sql5);
}
else{
        echo "REQUIRED QUANTITY IS NOT AVAILABLE1";
}
}
$sql6 = "SELECT * FROM addtocart natural join product WHERE uid='".$uid."';";
    $result3 = mysqli_query($conn, $sql6);
    $resultcheck3 = mysqli_num_rows($result3);
    if($resultcheck3 > 0){
        echo "<table><tr><th>Cart No.</th><th>Dish Name</th><th>Price</th><th>Quantity</th><th>Total Price</th></tr>";
    while($row3 = mysqli_fetch_assoc($result3)){
    echo "<tr><td>".$row3["slno"]."</td><td>".$row3["product_name"]."</td><td>".$row3["price"]."</td><td>".$row3["qty"]."</td><td>".$row3["tot_price"]."</td></tr>";
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
        echo '<span style="font-size:50px"><b><center>NO ORDERS</b></span>';
        #echo "error: ".$sql."<br>".$conn->error;
    }

}
?>
    <div class="titlelink1">
        <a href="menu1.php" class="continue">CONTINUE ORDERING</a>
        <a href="orders.html" class="check">CHECK OUT</a>
    </div>
</header>
</body>
</html>