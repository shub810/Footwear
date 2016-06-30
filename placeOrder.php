<?php
     session_start();
?><!DOCTYPE html>
<html>
    <head>
       <link rel="icon" href="images/favicon.ico">
		<link rel="stylesheet" href="booking.css">
		<link rel="stylesheet" href="camera.css">
		<link rel="stylesheet" href=".carousel.css">
		<link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FootWear</title>
        <style>
            .cart {
                position: absolute;
	top: 10px;
	left: 1200px;
	z-index: 10;
            }
            table tr, td {
                border : 0px solid black; 
            }
             #x {
                margin-top: 5px;
                text-align: right;
                font-size: 15px;
                font-family: Gill, Helvetica, sans-serif;
                color: #F0F3F5;
            }
                 .header{
                    position: absolute;
                    top: 50px;
                    left: 105px;
                    z-index: 10;
                }
.header div{
       
	float: right;
	color: rgb(0, 150, 100);
        font-family: 'Exo', sans-serif;
	font-size: 40px;
	font-weight: 200;
}
.header div span{
	color: #5379fa !important;
}
        .login{
	position: absolute;
	top: calc(50% + 25px);
	left: calc(50% - 135px);
        height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
        margin-bottom: 100px;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background:#e08885;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color:#b42d29;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.add {
    background:#e08885;
    color:#b42d29;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	
}
.login input[type=text]:focus{
	outline: 1px solid rgba(255,255,255,0.9);
	border: 1px solid rgba(255,255,255,0.9);
}
.login input[type=submit]{
	width: 260px;
	height: 35px;
	background:#b42d29;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color:#e08885;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-bottom: 15px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}
   .error {
                color:#8fbf4d;
                
            }
              
 .x1 {
               
                float: none;
                background-color: #5379fa;
                margin: 10px;
                font-size: 30px;
                font-family: 'sans-serif'; 
            }
            .x2 {
               
                color: #E02A05;
                padding: 10px;
                padding-right: 150px;
                padding-left: 100px;
                margin: 2px; 
            }
            .x3 {
               
                color: #E02A05;
                padding: 10px;
                padding-left: 70px;
                padding-right: 250px;
                margin: 2px; 
            }
            .x4 {
                
                color: #E02A05;
                padding: 10px;
                padding-left: 20px;
                padding-right: 100px;
                margin: 2px;
                
            }
            ww {
                color:#000000;
                font-family: 'Exo', sans-serif;
                font-size: 22px;
                font-weight: 400;
                margin-left: 50px;
       
            }
                      .log {
    position: absolute;
	top: 100px;
	left: 500px;
	z-index: 10;
        box-shadow: 10px 10px 5px #888888;
}
.log input{
         position: absolute;
	top: 45px;
	left: -490px;
	z-index: 10;
	width: 675px;
	height: 30px;
        color: black;
	border: 0px solid black;
	border-radius: 1px;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
        font-weight: 400;
	padding: 4px;
        box-shadow: 2px 2px 2px black;  
}
.log input[type=submit]{
	position: absolute;
	top: 43px;
	left: 190px;
	z-index: 10;
        width: 260px;
	height: 38px;
	background:cadetblue;
	border: 0px solid black;
	cursor: pointer;
	border-radius: 2px;
	color:#F0F3F5;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
        font-weight: bold;
	padding: 4px;
	margin: 2px;
        box-shadow: 2px 2px 2px black;
}
        </style> 
    </head>
    <body>
       <img src="images/12047538_897064373681250_90525637_n.jpg" height="100" width="100" >
    		<div class="header">
                 <a href="foot_acc.php"><div>Foot<span>Wear</span></div></a>
               </div>
        <div class="cart"><a href="cart.php?cid=1&ccid=2"><img src="images/cart.png" height="70" width="70"></a></div>
            <?php
       // session_start();
        $emailid = $_SESSION['email'];
        $_SESSION['email'] = $emailid;
        $conn = mysqli_connect("localhost", "root", "", "footwear");
        $sql = "SELECT * FROM customer where customer_email='$emailid'";
        $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        $x = "Welcome ".$row['customer_name'];
        $custom_id = $row['customer_id'];
        ?>
        <div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
                                                            <p id="x"><?php echo $x; ?></p>
								<li class="current"><a href="three.php?id=0&custom_id=<?php echo $custom_id; ?>&link=1">ABOUT</a></li>
								<li><a href="three.php?id=0&custom_id=<?php echo $custom_id; ?>&link=2">MY ACCOUNT</a>></li>
								<li><a href="orderhistory.php?custom_id=<?php echo $custom_id; ?>">ORDER HISTORY</a></li>
								<li><a href="three.php?id=0&custom_id=<?php echo $custom_id; ?>&link=3">CONTACT US</a></li>
                                                                <li><a href="first_page.php?id=1">LOG OUT</a></li>
                                                        </ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
               <div class="log">
        <form method='post' action=search.php>
           <input name="search" size="100" placeholder="Search for a product, brand or style">
            <input type="submit" value="SEARCH"> 
        </form>
             </div>
        <br>
        <table class="x1">
            <tr>
                
                <td class="x2"><a href="allbrands.php?custom_id=<?php echo $custom_id; ?>&id='Women'">WOMEN</a></td>
                <td class="x3"><a href="allbrands.php?custom_id=<?php echo $custom_id; ?>&id='Men'">MEN</a></td>
                <td class="x4"><a href="allbrands.php?custom_id=<?php echo $custom_id; ?>&id='Kids'">KIDS</a></td>
            </tr>
        </table>
        
             <h3 align="center"> Place Order </h3>
        <?php
            $nameR = $emailR = $pincodeR = $addressR = $cityR = $stateR = $mobileR = $countryR = "";
            $count = 0;
            $custom_id =  $_GET['custom_id'];
            $name = $email = $pincode = $address = $city = $state = $mobile = $country = "";
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["name"])) {
                    $name = data_input($_POST["name"]);
                    $count++;
                }
                else 
                    $nameR = "*Required";
                if (!empty($_POST["email"])) {
                    $email = data_input($_POST["email"]);
                    $count++;
                }
                else 
                    $emailR = "*Required";
                if (!empty($_POST["pincode"])) {
                    $pincode = data_input($_POST["pincode"]);
                    $count++;
                }
                else 
                    $pincodeR = "*Required";
                if (!empty($_POST["mobile"])) {
                    $mobile = data_input($_POST["mobile"]);
                    $count++;
                }
                else 
                    $mobileR = "*Required";
                if (!empty($_POST["address"])) {
                    $address = data_input($_POST["address"]);
                    $count++;
                }
                else 
                    $addressR = "*Required";
                if (!empty($_POST["city"])) {
                    $city = data_input($_POST["city"]);
                    $count++;
                }
                else 
                    $cityR = "*Required";
                if (!empty($_POST["country"])) {
                    $country = data_input($_POST["country"]);
                    $count++;
                }
                else 
                    $countryR = "*Required";
                if (!empty($_POST["state"])) {
                    $state = data_input($_POST["state"]);
                    $count++;
                }
                else 
                    $stateR = "*Required";
                
            }
            function data_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
        ?>
        <span class="error"></span>
        <div class="login">
            <ww>Shipping Address</ww><br>    
        <form method="POST" autocomplete="off" >
         
            <input type="text" name="name" placeholder="Your Name"></input>
           <span class="error">  <?php echo $nameR; ?></span>
           <br>
           <input type="text" name="email" placeholder="Your Email"></input>
           <span class="error"> <?php echo $emailR; ?></span><br>
           <input type="text" name="pincode" placeholder="Your Pincode"></input>
             <span class="error"> <?php echo $pincodeR; ?></span>
             <br>
             <textarea class="add" name="address" rows="4" cols="30" placeholder="Your Address"></textarea>
           <span class="error"><?php echo $addressR; ?></span>
         <br>
         <input type="text" name="country" placeholder="Your Country"></input>
           <span class="error"> <?php echo $countryR; ?></span>
           <br>
            <input type="text" name="state" placeholder="Your State"></input>
           <span class="error"> <?php echo $stateR; ?></span>
           <br>
           <input type="text" name="city" placeholder="Your City"></input>
           <span class="error"> <?php echo $cityR; ?></span>
           <br>
           <input type="text" name="mobile" placeholder="Your Mobile Number"></input>
           <span class="error"> <?php echo $mobileR; ?></span>
           <br>
            <input type="submit" value="Place Order">
        </form>
        </div>
        
        <br></br>
        <?php 
            if ($count == 8) {
                $conn1 = mysqli_connect("localhost", "root", "", "footwear");
                $sql = "INSERT INTO shippingaddress (customer_id, name, email, pincode, phone, city, state, address, country) values
                    ('$custom_id','$name', '$email', '$pincode', '$mobile', '$city', '$state', '$address', '$country')";
               mysqli_query($conn1, $sql);
                $sql1 = "SELECT * FROM shippingaddress ORDER BY shippingId DESC";
                $result = mysqli_query($conn1, $sql1);
                $row = mysqli_fetch_assoc($result);
               // session_start();
                $_SESSION['shippingId'] = $row['shippingId'];
                $_SESSION['custom_id'] = $custom_id;
                $_SESSION['subtotal'] = $_GET['subtotal'];
                //echo $custom_id." ".$row['shippingId'];
              echo("<script>location.href = 'payment.php';</script>");
              //echo("<script>location.href = '".ADMIN_URL."/index.php?msg=$msg';</script>");
            }
        ?>
    </body>
</html>
