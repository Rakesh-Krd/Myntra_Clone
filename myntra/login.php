<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="myntra.js"></script>
    <title>Online Shopping for Women, Men, Kids Fashion &amp; Lifestyle - Myntra</title>
</head>
<body>
    <header>
        <li><div id="logo"><img src="logo2.png"></div></li>
        <li><a href="#">MEN</a></li>
        <LI><a href="#">WOMEN</a></LI>
        <LI><a href="#">KIDS</a></LI>
        <LI><a href="#" style="position: relative;">HOME & LIVING</a></LI>
        <LI><a href="#">BEAUTY</a></LI>
        <LI><a href="#">STUDIO<sup style="color: rgb(255, 121, 146);font-size: x-small;">NEW</sup></a></LI>
        <li><div class="search"><img src="search.png">
        <form action="#">
            <input type="text" name="searchbox" placeholder="search for products brands and more">
        </form>
    </li></div>
        <li>
            <div class="right container">
                <li><div class="user"><span><img src="user.png"></span><span>Profile</span></div></li>
                <li><div class="user"><span><img src="wishlist.png"></span><span>wishlist</span></div></li>
                <li><div class="user"><span><img src="bag.png"></span><span>Bag</span></div></ul>
            </div>
        </li>

       
    </header>
    <div class="logincontainer">
<img src="login.jpeg" width="100%">
<div class="loginorsignup">
    <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    font-size: large;">
        
        Login <span style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
       or</span> <a href="signup.php" style="color: rgb(249, 130, 150);text-decoration: none;">Signup</a>
    </h1>
</div>


<div class="loginmobile">
    <form onsubmit="return mobile();" action="#" method="post">
                <input type="tel" id="phone" name="phone" placeholder="+91 | Mobile Number*" maxlength="10">
                
    
</div>
<div class="agreement">
    <p>By continuing I agree to the <span class="arg1"><a href="#"> Terms of use</a></span> &
        <span class="arg1"><a href="#">Privacy Policy</a></span></p>
</div>

<div class="btncontinue"><input type="submit" value="CONTINUE"></div>

<div class="trouble">
    <p>Having trouble logging in? <span class="trb1"><a href="#">Get help</a></span></p>
    <div class="email">
        <a href="email.html">Login Using Email</a>
    </div>
</div>
</form>

    </div>
</body>
</html>



<?php
$server="localhost";
$username="root";
$password="";
$database="login";
$conn = mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
   die ("connection failed");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $Mobile_No=$_POST['phone'];
        
        $sql="INSERT INTO `mobile` (`Mobile`) VALUES ('$Mobile_No')";

        if($conn->query($sql)===true){
            alert( "Login successful");
        }

        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Phone number is required";
    }
}

$conn->close();
?>
