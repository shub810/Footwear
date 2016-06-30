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
.login input[type=submit]:hover{
	opacity: 0.8;
}

.x1 {
        position: absolute;
	top: calc(50% - 875px);
	left: calc(50% + 400px);
	z-index: 10;
}
.x2 {   
        font-size: 20px;
        font-weight: 900;
        position: absolute;
	top: calc(50% - 855px);
	left: calc(50% + 430px);
	z-index: 10;
}
.x3 {
    padding-top: 500px;
}
.login input[type=submit]:active{
	opacity: 0.6;
}
hh {
        color:#8fbf4d;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 600;
}
.hh1 {
        position: absolute;
	top: 85px;
	left: 10px;    
	z-index: 10;
}
        </style> 
    </head>
    <body>
        <img src="images/12047538_897064373681250_90525637_n.jpg" height="100" width="100" >
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
                if ($_GET['id']==1) {
                    echo "<hh class='hh1'>You Have Successfully Logged Out.</hh>";
                }
            ?>
            
        <table>
             <tr>
                    <img src="images/12043904_897062867014734_784739902_o.jpg" height="500" width="1200"></img>
                
            </tr>
            <p>
            <tr>
                    <img src="images/12059819_896994560354898_1099136375_o.jpg" height="500" width="1200"></img>
                
            </tr>
            <p>
            <tr>
                <td>
                    <img src="images/12067846_896994587021562_1451894319_n.jpg" height="250" widht="200"></img>
                </td>
                <td>
                    <img src="images/12033258_896994577021563_576493919_n.jpg" height="250" widht="200"></img>
                </td>
            </tr>
            <p>
            <tr>
                <td>
                    <img src="images/12042217_896994563688231_1354713336_n.jpg" height="250" widht="600"></img>
                </td>
                <td>
                    <img src="images/12071586_896994557021565_57720864_n.jpg" height="250" widht="600"></img>
                </td>
            </tr>
           
        </table>
    </body>
</html>
