<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    .container {
    width: 40%;
    margin: 50px auto;
   
}

h2 {
    text-align: center;
    margin-top: 120px;
    
}

form {
    background-color: rgb(255, 197, 207);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-left: 30px;
}
input[type="text"]{
    height: 10px;
}

input[type="text"],
select {
    
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-weight: lighter;
    
}
input[type="text"],::placeholder{
font-size: small;
font-family: Arial, Helvetica, sans-serif;
font-weight: lighter;
color: black;

}

button[type="submit"] {
    background-color: rgb(255, 146, 164);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 180px;
}

button[type="submit"]:hover {
    background-color: rgb(255, 81, 110);
    
}

</style>
<header>
    <li><div id="logo"><img src="logo2.png"></div></li>
    <li><a href="#">MEN</a></li>
    <LI><a href="#">WOMEN</a></LI>
    <LI><a href="#">KIDS</a></LI>
    <LI><a href="#" style="position: relative;">HOME & LIVING</a></LI>
    <LI><a href="#">BEAUTY</a></LI>
    <LI><a href="#">STUDIO<sup style="color: rgb(255, 121, 146);font-size: x-small;">NEW</sup></a></LI>
   
   
</li></div>
    <li>
        <div class="right container" style="margin-left: 460px;">
            <li><div class="user"><span><img src="user.png"></span><span>Profile</span></div></li>
            <li><div class="user"><span><img src="wishlist.png"></span><span>wishlist</span></div></li>
            <li><div class="user"><span><img src="bag.png"></span><span>Bag</span></div></ul>
        </div>
    </li>

   
</header>
<body>
    <div class="container">
        <h2>SignUp</h2>
        <form id="userInfoForm" action="#" method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last name"  required>
            </div>
            <div class="form-group" style="margin-left: 20px;font-weight: bold;">
                Gender
                 <select id="gender" name="gender"  required>
                     <option value="">Select Gender</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                     <option value="other">Other</option>
                 </select>
             </div>
             <div class="form-group">
                <label for="Mobile">Age</label>
                <input type="text" id="Age" name="Age" placeholder="Age" maxlength="2" required>
            </div>
            
            <div class="form-group">
                <label for="Mobile">Mobile</label>
                <input type="text" id="Mobile" name="Mobile" placeholder="Mobile" maxlength="10" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="City"  required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode" placeholder="Pincode"  required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email"  required>
            </div>
           
           

            <button type="submit">Submit</button>

        </form>
    </div>
</body>
</html>


<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "onlineecommerceeestore";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $gender = $_POST['gender'];
    $age = $_POST['Age'];
    $mobile = $_POST['Mobile'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email=$_POST['email'];
    

    $sql = "INSERT INTO `customer` (`Customer_Id`, `Name`, `Mobile`, `Age`, `Gender`, `Address`, `Pincode`, `Email_Id`)
     VALUES (NULL, '$firstName', '$mobile', '$age', '$gender', '$city', '$pincode','$email')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('SignUp Successful');";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
