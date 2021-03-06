<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NALAPAKA BHOJANA RESTAURANT</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <style>
    *{
    margin: 0;
    padding: 0;
}
header{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/bg.jpg");
    height: 100vh;
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
    position: relative;
}
.logo img{
    margin-top: 0px;
    width: 300px;
    float: left;
    height: 300px;
}
.menu{
    padding-top: 100px;
    padding-left: 600px;
}
.menu a{
    padding: 30px;
    color: #fff;
    text-decoration: none;
    font-size: 20px;
}
.menu a:hover{
    background: #fff;
    color: #333;
    tab-size: 5px;
}
.title{
    padding-top: 250px;
    padding-left: 350px;
}
.title a{
    cursor: pointer;
    border: 1px solid white;
    height: 50px;
    width: 200px;
    color: white;
    font-size: 50px;
    box-shadow: 0 6px 6px rgba(0,0,0,0.6);
    text-decoration: none;
}

    </style>
    <header>
        <div class="logo">
           <img src="images/logo1.png" alt="NALAPAKA BOHJANA">
         </div>
        <div class="menu">
        <a href="#"><b>HOME</b></a>
        <a href="#"><b>ABOUT</b></a>
        <a href="#"><b>CONTACT</b></a>
        <a href="#"><b>FEEDBACK</b></a>
        <a href="orderedplaced.html"><b>ORDERS</b></a>
        <a href="admin.html"><b>ADMIN</b></a>
        </div>
        <div class="title">
        <a href="menu1.php">MENU CARD</a>
    </div>
    <?php
    error_reporting(0);
    session_start();
    $uid= uniqid('nb');
    $conn = new mysqli('localhost','root','','restaurent');
    if($conn->connect_error){
       die('connrction failed : '.$conn->connect_error);
    }
    else{
         $_SESSION["logged_in"]= true;
         $_SESSION["naam"] = $uid;
        }
?>
    </header>
</body>
</html>