<?php
$alert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include "db.php";
$username =$_POST["uname"];
$phoneno =$_POST["phoneno"];
$email =$_POST["email"];
$password =$_POST["password"];
$usercheck = "SELECT * FROM users where  username='$username'";
$sql ="INSERT INTO `users` (`username`, `phoneno`, `password`,`email`) VALUES ('$username', '$phoneno', '$password','$email')";
$res= mysqli_query($conn,$usercheck);
$num = mysqli_num_rows($res);
if($username && $phoneno && $password && $email !== ""){
    if($num >= 1){ echo '
<div id="snackbar" class="bg-danger show">user already exist !!</div>
'; } else{ $result = mysqli_query($conn,$sql); echo '
<div id="snackbar" class="bg-success show">Account Created succesfully</div>
'; header("location: login.php"); } } else{ echo '
<div id="snackbar" class="bg-danger show">Missing Credentials</div>
'; } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles/signup.css" />
  </head>
  <body>

   <div class="text-center">
      <div class="title" >
        ENJOY ONLINE HIJAB SHOPING HERE — ALL OVER MUMBAI SHIPPING OPTIONS
        AVAILABLE
      </div>
      <div class="logo">
        <img src="images/logo.png" width="150px" alt="Hijab Ready To Wear" />
      </div>
      <nav class="mynav d-flex justify-content-center bg-dark" >
        <ul>
          <li >
            <a href="/HiJAbREADYTOWEAR/index.php">Home</a>
          </li>
          <li>
            <a href="features.php">Features</a>
          </li>
          <li>
            <a href="aboutus.php">About Us</a>
          </li>
             <li>
            <a href="contactus.php">Contact us</a>
          </li>
          <li class="activenav">
            <a href="login.php">Login</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="maindiv py-5">
      <div class="login-box">
        <h2>Sign Up</h2>
        <form
          action="/HijabReadyToWear/signup.php"
          method="post"
          id="contactForm"
        >
          <div class="container">
            <div class="input-div">
              <input type="text" placeholder="Username" name="uname" />
            </div>
            <div class="input-div">
              <input type="number" placeholder="Phone no" name="phoneno" />
            </div>
            <div class="input-div">
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-div">
              <input
                type="password"
                placeholder="Enter Password"
                name="password"
              />
            </div>
            <button id="login-btn" type="submit">Sign up</button>
            <p class="signintext">
              Already have an Account ? <a href="login.php">Log in</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <?php include_once "footer.php" ?>
  </body>
</html>
