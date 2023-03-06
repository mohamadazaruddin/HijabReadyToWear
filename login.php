<?php
$login = false;
$error = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include "db.php";
$username =$_POST["uname"];
$password =$_POST["password"];
if($username && $password !== ""){
    $sql ="SELECT * FROM users where  username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
if($num ==1){
$login = true;
echo '<div id="snackbar" class="bg-danger show"> login in success </div>';
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['user'] = $username;
header("location: index.php");
}
else{
  $error ="invalid credentials";
}
  }
else{
   $error = "missing credentials";
}


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/index.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="./styles/login.css" />
    <script src="https://kit.fontawesome.com/7f5049b87a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
     <title>Hijab Ready to Wear</title>
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
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($error){
    echo '
        <div id="snackbar" class="bg-danger show" >' . $error . '</div>
        ';
    }
}

?>
    <div class="maindiv py-5">
        <div class="login-box">

            <h2>Login</h2>
            <form action="/HijabReadyToWear/login.php" method="post">
                <div class="container">
                    <div class="input-div">
                        <input type="text" placeholder=" Username" name="uname" required>
                    </div>
                    <div class="input-div">
                        <input type="password" placeholder=" Password" name="password" required>
                    </div>
                    <button id="login-btn" type="submit">Login</button>
                    <p class="signintext">Doesn't have an Account ? <a href="signup.php">Sign in</a></p>
                </div>

        </div>
    </div>
    <?php include 'footer.php'?>
</body>

</html>