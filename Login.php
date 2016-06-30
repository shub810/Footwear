
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <style>
            .error {
                color : rgb
            }
              
body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(images/12032430_897050507015970_210796273_n.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
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
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #3498db;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
p {
     color:coral;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
}
.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color:  #3498db;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #5379fa;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: 1px solid rgba(255,255,255,0.9);
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: 1px;
	border: 1px solid rgba(255,255,255,0.9);
}
#x {
    color : #5379fa !important;
    font-size: 17px;
    font-family: 'Exo', sans-serif;
}
.login input[type=submit]:focus{
	outline: none;
}
#lo {
    font-size: 30px;
    font-family: 'Exo', sans-serif;
}
::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    
        </style>
    </head>
    <body>
        <h2> Login </h2>
        
            
        <?php
        $s = $_GET['s'];
          //  echo $s;
        $ss = "";
        $sss = "";
            session_start();
            $count = 0;
            $emer = $paser = "";
             $email = $password = "";
            if ($s == 1) {
                $ss =  "<p>Your account has been created. Login here";
            }
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["Email"])) {
                    $email = $_POST["Email"];
                    $_SESSION['email'] = $email;
                    $count++;
                }
                else
                    $emer = "*Email Required";
                if (!empty($_POST["password"])) {
                    $password = $_POST["password"];
                    $count++;
                }
                else
                    $paser = "*Password Required";
            }
           
       
        ?>
        <?php
            
           
            if ($count==2) {
                $x = 0;
            $conn = mysqli_connect("localhost", "root", "", "footwear");
            $sql = "SELECT * FROM customer where customer_email='$email'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if (strcmp($row['customer_password'], $password) == 0) {
                    header('Location: foot_acc.php');
                }
                else {
                    $sss =  "Your Login details were incorrect. Please try again";
                    $x = 1;
                }
            }
            else {
                $sss =  "Your Login details were incorrect. Please try again";
            }
            }
            
        ?>
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
                   
                    <a href="first_page.php?id=3"><div>Foot<span>Wear</span></div></a>
                         <p id="x"> New User? <a href="Signup.php">Sign Up </a></p>
	</div>
        <br>
		
        <div class="login">
            <?php echo $ss.$sss;
            ?>
        <form method="POST" autocomplete="off"> 
            <span class="error"> <?php echo $emer." ".$paser; ?> </span> <br>
            <input type="text" name="Email" placeholder="Enter Email Id">
            <input type="password" name ="password" placeholder="password">
            <br>
            <span id="lo"><input type="submit" value ="LOGIN"></span>
        </form>
        </div>
        
        
    </body>
</html>