
<!DOCTYPE html>
<html>
    <head>
       	<link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FootWear</title>
        <style>
            table tr, td {
                border : 0px solid black; 
            }
            body {
                background-color: #fff;
                
            }
.header{
	position: absolute;
	top: 50px;
	left:  100px;
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
.login input[type=submit]:hover{
	opacity: 0.8;
}

.x1 {
        position: absolute;
	top: 10px;
	left: 1025px;
	z-index: 10;
}
.x2 {   
        font-size: 20px;
        font-weight: 900;
        position: absolute;
	top:  30px;
	left: 1050px;
	z-index: 10;
}
.x3 {
    padding-top: 500px;
}
.login input[type=submit]:active{
	opacity: 0.6;
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
            q {
                color:#737272;
	font-family: 'Exo', sans-serif;
	font-size: 18px;
	font-weight: 500; 
            }
        </style> 
    </head>
    <body>
        <img src="images/12047538_897064373681250_90525637_n.jpg" height="100" width="100" ></img>
    		<div class="header">
                  <a href="first_page.php?id=333"><div>Foot<span>Wear</span></div></a>
               </div>
        <div class="x1" >Need assitance? Give us a call:</div>
        <div class="x2">1-206-971-5536</div>
        <div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="first_three.php?id=0&link=1">ABOUT</a></li>
								<li><a href="Login.php">LOGIN</a></li>
								<li><a href="Signup.php">SIGNUP</a></li>
								<li><a href="first_three.php?id=0&link=2">FAQ</a></li>
								<li><a href="first_three.php?id=0&link=3">CONTACT US</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
            <?php 
            $link = $_GET['link'];
         
            if ($link == 2) {
               // echo "hello";
                echo "<h1> Frequently Asked Questions</h1>";
                echo "<q>How do I pick up my shipment from the stores?</q>";
                echo "<p>Step into the chosen pick-up store. Enter your OTP & showcase a valid photo ID to the store manager to collect your package. We accept the following Photo IDs : PAN, Driving license, Aadhar card, College ID card, Employer ID card, Voters ID card, Government approved cards, Photo printed Credit/Debit card, Bank Passbook.</p>";
                echo "<q>What items can I Exchange?</q>";
                echo "<p>We allow exchange on items such as Apparel and Footwear, where a trial is required to see if the fit is right. You can exchange an item for the same product in the size/color of your choice.
We hope you understand that the product can only be used for trial and cannot be used, washed, ironed or tampered in any way. Please include all price tags, labels, original packing and invoice along with the product.</p>";
                echo "<q>How do I return or exchange my item?</q>";
                echo "<p>An easy and hassle-free return experience awaits you! You can request for a return or exchange from your FootWear account in a few simple steps.
Just login to your FootWear account, visit your order and choose to return or exchange your item at the click of a button.</p>";
                
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
        else {
            
        }
        ?>
       
    </body>
</html>
