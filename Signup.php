<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign Up</title>
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
	background-image: url(images/12062589_897084893679198_818017072_o.jpg);
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

.login input[type=radio]{
	background: transparent;
	color: #3498db;
	font-family: 'Exo', sans-serif;
	font-size: 100px;
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
    font-size: 15px;
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
        <h2> Sign Up </h2>
        <?php
            $usernameR = $emailR = $passwordR = $genderR = $contactR = "";
            $count = 0;
        $username = $email = $password = $gender = $contact = "";
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["username"])) {
                    $username = data_input($_POST["username"]);
                    $count++;
                }
                else 
                    $usernameR = "*Required";
                if (!empty($_POST["email"])) {
                    $email = data_input($_POST["email"]);
                    $count++;
                }
                else 
                    $emailR = "*Required";
                if (!empty($_POST["password"])) {
                    $password = data_input($_POST["password"]);
                    $count++;
                }
                else 
                    $passwordR = "*Required";
                if (!empty($_POST["contact"])) {
                    $contact = data_input($_POST["contact"]);
                    $count++;
                }
                else 
                    $contactR = "*Required";
                if (!empty($_POST["gender"])) {
                    $gender = data_input($_POST["gender"]);
                    $count++;
                }
                else 
                    $genderR = "*Required";
                
            }
            function data_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
        ?>
          <div class="body"></div>New to
		<div class="grad"></div>
		<div class="header">
                   
                    <a href="first_page.php?id=3"><div>Foot<span>Wear</span></div></a><br><br></br>
                    <p id="x"> Already have an account <a href="Login.php"><br>Login</a></p>
	</div>
     
        <br>
        <div class="login">
       
        <form method="POST" autocomplete="off">
           <input type="text" name="username" placeholder="Your Name"></input>
           <span class="error">  <?php echo $usernameR; ?></span>
           <br>
           <input type="text" name="email" placeholder="Your Email"></input>
           <span class="error"> <?php echo $emailR; ?></span><br>
          <input type="password" name="password" placeholder="Your Password"></input>
             <span class="error"> <?php echo $passwordR; ?></span>
             <br>
           <input type="text" name="contact" placeholder="Your Contact"></input>
           <span class="error"><?php echo $contactR; ?></span>
         <br> Gender : <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
           <span class="error"> <?php echo $contactR; ?></span>
            <br>
            <input type="submit" value="Sign Up">
        </form>
        </div>
        <br><br>
        <?php 
            if ($count == 5) {
                $conn1 = mysqli_connect("localhost", "root", "", "footwear");
                $sql = "INSERT INTO customer (customer_name, customer_email, customer_contact, customer_password, customer_gender) values
                    ('$username', '$email', '$contact', '$password', '$gender')";
                mysqli_query($conn1, $sql);
                   // echo "Succesfully Registered.";
                // header('Location: first_page.php');
                 echo("<script>location.href = 'Login.php?s=1';</script>");
            }
        ?>
    </body>
</html>