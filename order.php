<?php
session_start(); ?>
<!DOCTTYPE html>
<html>
<head>
<style type="text/css">
      .pad4{
    margin-top:0px;
    text-align: center;
    font-size: 50px;
    color: white;
           }
 </style>
</head>
<body style="background-color: black">
    <center><img src="images/logo1.png" height="150px"></center><br>
    <div class="pad4">
<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$pno=$_POST["pno"];
$emailid=$_POST["emailid"];
$address=$_POST["address"];
$bool;
$items= array();
$qty= array();
$productname= array();
$price= array();
date_default_timezone_set('Asia/Kolkata');
$starttime=strtotime("now");
$endtime=strtotime("+2 hours", $starttime);
$date_format=date("Y-m-d", $starttime);

$uid=$_SESSION["naam"];
$conn = new mysqli('localhost','root','','restaurent');
if($conn->connect_error){
    die('connrction failed : '.$conn->connect_error);
}
         $sql1 ="SELECT * FROM product natural join addtocart WHERE uid='".$uid."';";
         $result= mysqli_query($conn, $sql1);
         if(mysqli_num_rows($result)>0){
          while($row= mysqli_fetch_assoc($result)){
            $items[]= $row["product_no"];
            $qty[]=$row["qty"];
            $productname[]=$row["product_name"];
            $price[]=$row["tot_price"];
          }
         }
         $counts= count($items);
         for($num=0; $num < $counts; $num += 1){
          $sql2= "INSERT INTO orders(product_no, product_name, qty, tot_price, fname, lname, address, email, pno, ordereddate) VALUES('$items[$num]', '$productname[$num]', '$qty[$num]', '$price[$num]', '$fname', '$lname', '$address', '$emailid', '$pno', '$date_format')";
          $bool=$conn->query($sql2);
       }
       if($bool){
        echo"Thank You"."<br>";
        echo "<br>";
        echo"Your order has been submited on: ";
        echo date("d-m-Y h:i A", $starttime);
        echo" the product will be reached on or before  ";
        echo date("d-m-Y h:i A", $endtime);
       }
       else{
       echo $conn->error ;
       }
         
?>
 <br>
    <br>
    <p>For Order satus check your orders</p>
    <a href="home.php">Click here</a>
        <br>
    <center><p>NOTE: STRICTLY DO NOT REFRESH THIS PAGE ONCE YOU HAVE PLACED ORDER</p></center>
    </div>
    
    </body>
</html>