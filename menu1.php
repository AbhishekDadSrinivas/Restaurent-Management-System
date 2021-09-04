<?php
//error_reporting(0);
session_start();
 //database connection
$conn = new mysqli('localhost','root','','restaurent');
if($conn->connect_error){
    die('connrction failed : '.$conn->connect_error);
}
          ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NALAPAKA BHOJANA RESTAURANT</title>
</head>
<body>
    <header>
    <style>
    header{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/bg2.jpg");
    height: 100vh;
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
    position: relative;
}
    div.logo img{
    margin-top: -5px;
    width: 250px;
    float: left;
    height: 250px;
}
        div.m1{
            border: 2px solid white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
            max-width: 250px;
    margin: auto;
    text-align: center;
    font-family: arial;
    margin-left: 30px;
    margin-top:  200px;
    background-color: white;
    font-size: 20px;
        }
         div.m2{
            border: 2px solid white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
            max-width: 250px;
    margin: auto;
    text-align: center;
    font-family: arial;
    margin-left: 320px;
    margin-top:  -478px;
    background-color: white;
    font-size: 20px;
        }
        .addbtn{
            width: 100%;
            font-size: 30px;
            border: 2px solid white;
            background-image: linear-gradient(blue, lightgreen);
            border-radius: 3px;
            box-shadow: 0px 1px 4px -2px #333;
            text-shadow: 0px -1px #333;
            background-color: green;
        }
        .addbtn:hover{
            background: linear-gradient(#073, #0fa);
        }
        div.m2 img{
            height: 250px;
        }
        div.m3{
            border: 2px solid white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
            max-width: 250px;
    margin: auto;
    text-align: center;
    font-family: arial;
    margin-left: 610px;
    margin-top:  -478px;
    background-color: white;
    font-size: 20px;
        }
        div.m3 img{
            height: 250px;
        }
        div.m4{
            border: 2px solid white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
            max-width: 250px;
    margin: auto;
    text-align: center;
    font-family: arial;
    margin-left: 900px;
    margin-top:  -478px;
    background-color: white;
    font-size: 20px;
        }
        div.m5{
            border: 2px solid white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
            max-width: 250px;
    margin: auto;
    text-align: center;
    font-family: arial;
    margin-left: 1190px;
    margin-top:  -478px;
    background-color: white;
    font-size: 20px;
        }
    </style>
    <div class="logo">
           <img src="images/logo1.png" alt="NALAPAKA BOHJANA">
         </div><br><br><br>
    <div class="m1">
        <form method="post" action="atc.php">
        <img src="images/idli.jpg" alt="idly" style="width:100%" height="25%">
        <h2 class="title"><u>IDLI VADA</u></h2>
        <?php
         $sql = "SELECT * FROM product WHERE product_no=1;";
         $result = mysqli_query($conn, $sql);
         $resultcheck = mysqli_num_rows($result);
         if($resultcheck > 0){
           while($row = mysqli_fetch_assoc($result)){
             echo ("<b>PRICE:</b> Rs.".$row['price']."<br>");
             echo "<br>";
     }
  }
  ?>
          <label><b>QTY: </b></label><input type="number" name="quantity" class="qty" required><br><br>
          <button type="submit" class="addbtn" name="atc" value="1">ADD TO CART</button>
    </form>
</div>
        <div class="m2">
        <form action="atc.php" method="post">
        <img src="images/dosa.jpg" alt="dosa" style="width:100%">
        <h2 class="title"><u>MASALA DOSA</u></h2>
        <?php
         $sql1 = "SELECT * FROM product WHERE product_no=2;";
         $result1 = mysqli_query($conn, $sql1);
         $resultcheck1 = mysqli_num_rows($result1);
         if($resultcheck1 > 0){
           while($row1 = mysqli_fetch_assoc($result1)){
             echo ("<b>PRICE:</b> Rs.".$row1['price']."<br>");
             echo "<br>";
     }
  }
  ?>
          <label><b>QTY: </b></label><input type="number" name="quantity" class="qty" required><br><br>
          <button type="submit" class="addbtn" name="atc" value="2">ADD TO CART</button>
    </form>
    </div>
    <div class="m3">
        <form action="atc.php" method="post">
        <img src="images/parotta.jpg" alt="dosa" style="width:100%">
        <h2 class="title"><u>PAROTTA</u></h2>
        <?php
         $sql2 = "SELECT * FROM product WHERE product_no=3;";
         $result2 = mysqli_query($conn, $sql2);
         $resultcheck2 = mysqli_num_rows($result2);
         if($resultcheck2 > 0){
           while($row2 = mysqli_fetch_assoc($result2)){
             echo ("<b>PRICE:</b> Rs.".$row2['price']."<br>");
             echo "<br>";
     }
  }
  ?>
          <label><b>QTY: </b></label><input type="number" name="quantity" class="qty" required><br><br>
          <button type="submit" class="addbtn" name="atc" value="3">ADD TO CART</button>
    </form>
    </div>
    <div class="m4">
        <form action="atc.php" method="post">
        <img src="images/pulav.jpg" alt="dosa" style="width:100%">
        <h2 class="title"><u>VEG PULAV</u></h2>
        <?php
         $sql3 = "SELECT * FROM product WHERE product_no=4;";
         $result3 = mysqli_query($conn, $sql3);
         $resultcheck3 = mysqli_num_rows($result3);
         if($resultcheck3 > 0){
           while($row3 = mysqli_fetch_assoc($result3)){
             echo ("<b>PRICE:</b> Rs.".$row3['price']."<br>");
             echo "<br>";
     }
  }
  ?>
          <label><b>QTY: </b></label><input type="number" name="quantity" class="qty" required><br><br>
          <button type="submit" class="addbtn" name="atc" value="4">ADD TO CART</button>
    </form>
    </div>
    <div class="m5">
        <form action="atc.php" method="post">
        <img src="images/poori.jpg" alt="dosa" style="width:100%">
        <h2 class="title"><u>POORI</u></h2>
        <?php
         $sql4 = "SELECT * FROM product WHERE product_no=5;";
         $result4 = mysqli_query($conn, $sql4);
         $resultcheck4 = mysqli_num_rows($result4);
         if($resultcheck4 > 0){
           while($row4 = mysqli_fetch_assoc($result4)){
             echo ("<b>PRICE:</b> Rs.".$row4['price']."<br>");
             echo "<br>";
     }
  }
  ?>
          <label><b>QTY: </b></label><input type="number" name="quantity" class="qty" required><br><br>
          <button type="submit" class="addbtn" name="atc" value="5">ADD TO CART</button>
    </form>
    </div>


</header>
</body>
</html>