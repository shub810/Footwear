<!DOCTYPE html>
<?php
     session_start();
?>
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
        table td, th {
                border : 0px solid black; 
                padding: 10px;
                margin: 2px;
            }
            th {
                text-align:center;
                color:#002141;
            }
            td {
                text-align: center;
                color:#c5302c;
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
            .t {
                margin: 50px;
                padding: 10px;
            }
            .p {
                margin: 10px;
                margin-left: 0px;
                padding: 10px;
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
       <p class="p"> <img src=<?php echo $_GET['url']; ?> height="100" width="150"></img> <br> <br></br>
        <?php
            $brand = $_GET['brand_name'];
            $gender = $_GET['gender'];
            $conn = mysqli_connect("localhost", "root", "", "footwear");
            $sql = "SELECT * FROM shoes WHERE Brand='$brand' AND gender='$gender'";
            $result = mysqli_query($conn, $sql);
            echo "<table>";
            $count = 0;
             echo "<tr>";
            while ($rows = mysqli_fetch_assoc($result)) {
                $ima = $rows['image'];
                $r = $rows['shoeId'];
                echo "<td>";
                echo "<a href='shoe.php?shoeId=$r&custom_id=$custom_id'><img src=$ima height='100' width='150'></img></a>"."<br>";
                echo $rows['category']."<br>"."₹ ".$rows['price'];
                echo "</td>";
               
            }
             echo "</tr>";
              
           echo "</table>";
        ?>
        
        
    </body>
</html>
