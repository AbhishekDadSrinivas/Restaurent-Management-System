<?php
error_reporting(0);
session_start();
$emailid=$_POST["emailid"];
$password=$_POST["password"];
 //database connection
$conn = new mysqli('localhost','root','','restaurent');
if($conn->connect_error){
    die('connrction failed : '.$conn->connect_error);
}
elseif(isset($_POST["emailid"], $_POST["password"])){
    $result1  = mysqli_query($conn,"SELECT admin_emailid, admin_pswd FROM admin WHERE admin_emailid = '".$emailid."' AND admin_pswd='".$password."'");
     if(mysqli_num_rows($result1)>0)
     {
         $_SESSION["logged_in"]= true;
         $_SESSION["naam"] = $emailid;
          ?>
         <!DOCTTYPE html>
         <html>
         <body>
             <center><img src="images/logo1.png" height="200px"></center>
             </body>
         </html>
         <?php
         echo "<br>";
        echo "<br>";
        echo "<br>";
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>    
        </head>
        <body style="background-color:black;">
            <div class="order">
            <br>
            <a href="addproduct.html" class="septab"><b>1.ADD PRODUCT</b></a>
            <a href="product_table.php" class="septab"><b>2.PRODUCT TABLE</b></a>
            <a href="ordertable.php" class="septab"><b>3.ORDER TABLE</b></a><br>
            <br>
            </div> 
            </body>
        </html>
        <?php
     }
    else
    {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo '<span style="font-size:30px"><b><center>THE USERNAME OR PASSWORD IS INCORRECT</b></span>';
        echo "<br>";
        echo "<br>";
        echo "<b><center>click here to login form</b>";
        ?>
        <!DOCTYPE html>
        <html>
        <body style="background-color:Red">
        <center><br>
            <a href="admin.html"><b>LOGIN FORM</b></a>
        </center>
        </body>
        </html>
        <?php
    }
    $conn->close;
}
?>