
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
                   .header{
	position: absolute;
	top: 50px;
	left: 105px;
	z-index: 10;
}
.header div{
        position: absolute;
	float: right;
	color: rgb(0, 150, 100);
        font-family: 'Exo', sans-serif;
	font-size: 40px;
	font-weight: 200;
}
.header div span{
	color: #5379fa !important;
}
            table tr, td {
              
                border : 0px solid black; 
            }
            .x {
               
                margin-top: 5px;
                padding: 10px;
                text-align: right;
                font-size: 15px;
                font-family: Gill, Helvetica, sans-serif;
                color: #F0F3F5;
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
            a:hover {
                
                color: chartreuse;
              
            }
            p, w{
                color:#000000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
            }
            h1 {
                color:indianred;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 600;
        margin-bottom: 10px;
            }
            h2 {
                font-size: 20px;
	font-weight: 600;
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
	top: 60px;
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
	top: 58px;
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
                                                            <p class="x"><?php echo $x; ?></p>
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
        <br>
        <?php 
            $link = $_GET['link'];
            $idd = $_GET['id'];
            if ($link == 2) {
               // echo "hello";
                echo "<h1> PERSONAL DETAILS</h1>";
            $conn = mysqli_connect("localhost", "root", "", "footwear");
            $sql = "SELECT * FROM customer WHERE customer_id='$custom_id'";
            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            $_1 = $row['customer_name'];
            $_2 = $row['customer_email'];
            $_3 = $row['customer_contact'];
            $_4 = $row['customer_password'];
            $_5 = $row['customer_gender'];
            echo "<w>Name: </w>".$_1."<br>";
            echo "<w>Email: </w>".$_2."<br>";
            echo "<w>Contact: </w>".$_3."<br>";
            echo "<w>Gender: </w>".$_5."<br>";
            echo "<h2><a href='three.php?id=1&custom_id=$custom_id&link=33'>Edit</a></h2>";
            }
        
        else if ($link == 1) {
            echo "<h1> ABOUT </h1>";
            echo "<p>FootWear innovate, expand and make online shoe shopping a better, more personal experience for our customers.

<p>Our growing list of brands currently boasts more than 10 leading, boutique and exclusive names. We offer high-quality footwear for men, women and kids with fashion-forward styles, modern classics and outdoor essentials in a wide range of specialty sizes. We carry the labels customers love and new designers worth falling for. Our shoe-savvy team offers unparalleled expertise on everything from the construction of a shoe to its fit, style and brand history so that customers know exactly what they're getting when they make a purchase.

<p>Free shipping, free exchanges, 365-day returns, 24-hour customer service and a 110% price guarantee are just a few of the perks of shopping with us—we'll do whatever it takes to help our customers find the perfect pair of shoes.";
        }
        else if ($link==3) {
            echo "<h1> CONTACT US </h1>";
            echo "<p>Telephone<br>
                    1-800-999-000<br>
                    24 hours a day. 365 days a year.<br>

                    <p>Mailing address<br>
                    FootWear.com<br>
                    1500 Commodity Blvd, Door 1<br>
                    Bengaluru, OH 43194-1000<br>
                    India<br>

                   <p> Corporate address<br>
                    FootWear.com<br>
                    1730 Minor Avenue, Suite 700<br>
                    Delhi - 218101<br>
                    India<br>
                    P: 206-812-7800";
        }
        else if ($idd == 1) {
            $conn = mysqli_connect("localhost", "root", "", "footwear");
            $sql = "SELECT * FROM customer WHERE customer_id=$custom_id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $_1 = $row['customer_name'];
            $_2 = $row['customer_email'];
            $_3 = $row['customer_contact'];
            $_4 = $row['customer_gender'];
            
            echo "<form action='three.php?id=2&custom_id=$custom_id&link=33' method='post'>
                    <input type='text' name='username' placeholder=$_1></input>
           
                <br>
           <input type='text' name='email' placeholder=$_2></input><br>
         
           <input type='text' name='contact' placeholder=$_3></input>
           
         <br> Gender : <input type='radio' name='gender' value='male'>Male
            <input type='radio' name='gender' value='female'>Female
          <br>
            <input type='submit' value='Edit'>
                </form>
            <br>
            <h2><a href='three.php?id=21&custom_id=$custom_id&link=31'>Change Password</a></h2>
            ";
        }
        else if ($idd == 2 && $link == 33) {
            $_11 = $_POST['username'];
            $_12 = $_POST['email'];
            $_13 = $_POST['contact'];
            $_14 = $_POST['gender'];
            $conn = mysqli_connect("localhost", "root", "", "footwear");
            if (!empty($_11)) {
                // echo "$_11";
                $sql = "UPDATE customer SET customer_name='$_11' WHERE customer_id='$custom_id'";
                mysqli_query($conn, $sql);
            }
            if (!empty($_12)) {
                $sql = "UPDATE customer set customer_email='$_12' WHERE customer_id='$custom_id'";
                mysqli_query($conn, $sql);
            }
            if (!empty($_13)) {
                $sql = "UPDATE customer set customer_contact='$_13' WHERE customer_id='$custom_id'";
                mysqli_query($conn, $sql);
            }
            if (!empty($_14)) {
                $sql = "UPDATE customer set customer_gender='$_14' WHERE customer_id='$custom_id'";
                mysqli_query($conn, $sql);
            }
            echo "<h2>You successfully edited your account.</h2>";
        }
        else if ($idd == 21 && $link == 31) {
            echo "<form action='three.php?id=22&custom_id=$custom_id&link=33' method='post'>
               <input type='password' name='password' placeholder='Current Password'><br>
            <input type='password' name='npassword' placeholder='New Password'><br>
            <input type='submit' value='Submit'><br>
                </form>";
            }
            else if ($idd == 22 && $link == 33) {
                $_01 = $_POST['password'];
                $_02 = $_POST['npassword'];
                $conn = mysqli_connect("localhost", "root", "", "footwear");
                $sql = "SELECT * FROM customer WHERE customer_id='$custom_id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if (strcmp($row['customer_password'], $_01) == 0) {
                    if (!empty($_02)) {
                        $sql = "UPDATE customer SET customer_password='$_02' WHERE customer_id='$custom_id'";
                        mysqli_query($conn, $sql);
                        echo "<h2>Password Changed Successfully</h2>";
                    }
                    else {
                        echo "<h2>ALL fields are required.<a href='three.php?id=21&custom_id=$custom_id&link=31'>Try Again</a></h2>";
                    }
                }
                else {
                    echo "<h2>Current password is incorrect.<a href='three.php?id=21&custom_id=$custom_id&link=31'>Try Again</a></h2>";
                }
            }
        ?>
    </body>
</html>
