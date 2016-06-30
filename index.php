<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            .error {color : #FF0000;}
        </style>
        <title>First Page</title>
    </head>
    <body>
          <?php
         
          $count = 0;
        $nameer = $emailer = $websiteer = $genderer = "";
        $name = $email = $website = $comment = $gender = "";
        
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            if (!empty($_POST["name"])) {
                $name = data_input($_POST["name"]);
                $count++;
            }
            else
                $nameer = "Name is required";
            if (!empty($_POST["email"])) {
                $email = data_input($_POST["email"]);
                $count++;
            }
            else
                $emailer = "Email is required";
            if (!empty($_POST["website"])) {
                
                $website = data_input($_POST["website"]);
            }
            else
                $website = "";
            if (!empty($_POST["gender"])) {
                
                $gender = data_input($_POST["gender"]);
                $count++;
            }
            else
                $genderer = "Gender is required";
            if (!empty($_POST["comment"])) {
                $comment = data_input($_POST["comment"]);
            }
            else
                $comment = ""; 
        }
        function data_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
        <h1>Hiii Hello World</h1><br><br><br><br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
        Name : <input type="text" name="name">
        <span class ="error" >* <?php echo $nameer; ?> </span>
        <br>
        EMAIL : <input type="text" name="email">
        <span class="error">* <?php echo $emailer; ?> </span>
        <br>
        Web-Site : <input type="text" name="website"><br>
        Comment : <p><textarea name="comment" rows="4" cols="40"></textarea></p><br>
        Gender : <input type="radio" name="gender" value="male">Male 
                <input type="radio" name="gender" value="female">Female
                <span class="error">* <?php echo $genderer; ?> </span>
                <br>
                
        <input type="submit" value="Submit">
        </form>
        <h3> Your Input </h3> <br>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "first_time");
            if (!$conn) {
                echo "error : ".  mysqli_connect_error();
            }
            else
                echo "connected with dbms<br>";
            
            echo "<br>value of ".$count." <br>";
            $sql = "SELECT first_name, last_name";
            if ($count >= 3) {
                mysqli_query($conn, $sql);
                echo "created"." ".$count;
                session_unset();
                session_destroy();
            }
            else
                echo "error : ".  mysqli_error($conn);
        ?>
    </body>
</html>
