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
        <title>Footwear</title>
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
	background:#000000;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #5379fa;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
        margin: 10px;
        margin-left: 0px;

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
            h1 {
                padding: 10px;
                margin: 20px;
                margin-left: 0px;
                padding-left: 0px;
                font-family: "inherit";
                font-size: 50px;
                color: tomato;
            }
            h4 {
                font-family:cursive;
            }
            a:hover {
                
                color: chartreuse;
                
                
            }
            .m {
                float : right;
                margin-right: 470px;
                margin-bottom: 100px;
                padding-top: 0px;
                margin-top: -50px;
            }
            .m1 {
                font-size: 20px;
            }
            
            .m2 {
                font-size: 15px;
                padding-top: 15px;
                color:#d84a45;
            }
            .m3 {
                font-size: 15px;
                padding-top: 15px;
                color:#433d45;
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
								<li class="current"><a href="">ABOUT</a></li>
								<li><a href="MyAccount.php">MY ACCOUNT</a>></li>
								<li><a href="orderhistory.php?custom_id=<?php echo $custom_id; ?>">ORDER HISTORY</a></li>
								<li><a href="">CONTACT US</a></li>
                                                                <li><a href="first_page.php">LOG OUT</a></li>
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
                <?php
        $id = $_GET['shoeId'];
            $conn = mysqli_connect("localhost", "root", "", "footwear");
            $sql = "SELECT * FROM shoes WHERE shoeId=$id";
            $rows = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            $ima = $rows['image'];
            ?>
           <h1><?php echo $rows['Brand']." ".$rows['category']." Shoes"; ?></h1>
           <img src=<?php echo $ima;?> height='200' width='300'>
        
        <table class="m">
             <tr><td>
                    <?php echo "<h4>"."MRP "."Rs. ".$rows['price']."</h4>"; ?>
                </td>
             </tr>
             <tr><td class="m1">
                      <form  action="cart.php?cid=2&ccid=0&shoeId=<?php echo $rows['shoeId'];?>&custom_id=<?php echo $_GET['custom_id'];?>&si=<?php echo $_POST['size']; ?>
                          &quant=<?php echo $_POST['quant']; ?>" method="POST">
                    Size : 
                    
                    <select name="size">
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    
                </td>
             </tr>
              <tr><td class="m2">
                    Quantity Available : <?php echo $rows['quantity']; ?>
                </td>
             </tr>
              <tr><td class="m3">
                     Quantity : 
                    <select name="quant">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>
             </tr>
              <tr><td>
                     
                     <input class="login" type="submit" value="ADD TO CART"></input>
                      
                </td>
             </tr>
        </table>
</form>
    </body>
</html>





