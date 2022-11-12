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
  <title>Document</title>
</head>
<body>
    
    <?php include_once 'loginheader.php'?>
    <div class="maindiv py-5">
            <div class="login-box">

                <h2>Login</h2>
                <form action="/action_page.php" method="post">
                    <div class="container">
                        <div class="input-div">
                            <input type="text" placeholder=" Username" name="uname" required>
                        </div>
                        <div class="input-div">
                            <input type="password" placeholder=" Password" name="psw" required>
                        </div>
                        <button id="login-btn" type="submit">Login</button>
                        <p class="signintext">Doesn't have an Account ? <a href="signup.php">Sign in</a></p>
                    </div>

            </div>
        </div>
<?php include 'footer.php'?>
</body>

</html>