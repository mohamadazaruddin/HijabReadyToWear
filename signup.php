<?php
$servername = "127.0.0.1";
$username = "root";


// Create connection
$conn = new mysqli($servername, $username
);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles/signup.css">
</head>
<style>
</style>

<body>
       
    <?php include_once 'loginheader.php'?>
    <div class="maindiv py-5">
               <div class="login-box">

            <h2>Sign Up</h2>
            <form action="/action_page.php" method="post">
                <div class="container">
                    <div class="input-div">
                        <input type="text" placeholder="Username" name="uname" required>
                    </div>
                    <div class="input-div">
                        <input type="tel" placeholder="Phone no" name="uname" required>
                    </div>
                    <div class="input-div">
                        <input type="email" placeholder="Email" name="uname" required>
                    </div>
                    <div class="input-div">
                        <input type="password" placeholder="Enter Password" name="psw" required>
                    </div>
                    <button id="login-btn" type="submit">Login</button>
                    <p class="signintext">Already have an Account ? <a href="login.html">Log in</a></p>
                </div>
            </form>

        </div>
        </div>
<?php include 'footer.php'?>
</body>

</html>