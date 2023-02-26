<?php 
session_start();
if(!$_SESSION['user']){
  echo '<div id="snackbar" >logged in succesfully</div>';
}
else{
      echo '<div id="snackbar" >welcome</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/index.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/7f5049b87a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
     <title>Hijab Ready to Wear</title>
     <style>
        .card{
            background:#f9f2e7 !important;
        }
            /* .products:hover{
            z-index: 999;
            transform: scale(1.1) !important;
        } */
     </style>
</head>

<body onload="myFunction()">
    <div class="waterfall">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="share-div">
        <a href="" style="text-decoration: none; color:white;">
            <i class="fa-solid fa-square-share-nodes"></i>
        </a>
    </div>
    <div class="main" id="main">
        <?php include 'header.php'?>
        <nav class="mynav d-flex justify-content-center bg-dark" data-aos="zoom-in">
        <ul>
          <li class="activenav">
          <a href="/HiJAbREADYTOWEAR/index.php">Home</a>
          </li>
          <li>
            <a href="./features.php">Features</a>
          </li>
          <li>
            <a href="./aboutus.php">About Us</a>
          </li>
            <li>
            <a href="./features.php">Contact us</a>
          </li>
          <li>
            <a href="login.php">Login</a>
          </li>
        </ul>
      </nav>
        <div class="divforslider" data-aos="zoom-in">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" style="
                  background-image: url('https://img.freepik.com/free-photo/medium-shot-women-posing-together_23-2149122737.jpg?w=1380&t=st=1677428819~exp=1677429419~hmac=4539cc83405217db363947ef463daad8cc2095502c0b4e6aeaa24d2321b78c7f');
                ">
                        <div class="cover">
                            <div class="herotext">
                                <h1>Welcome To Our Store</span></h1>
                                <p>Wear The Best for you </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="
                  background-image:
                  url('https://img.freepik.com/free-photo/modern-stylish-muslim-woman-hijab-business-style-jacket-black-abaya-walking-city-street-with-laptop_285396-9493.jpg?w=1380&t=st=1677428602~exp=1677429202~hmac=715074da0d70a9e137e9e571c9cdf434dec834857e1c724fdf9f90a5a830ed11');
                ">
                        <div class="cover">
                            <div class="herotext">
                                <h1>ENDLESS COMFORT</h1>
                                <p>The Hassle-free cottons you can't get enough of. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="
                  background-image: url('https://img.freepik.com/free-photo/modern-stylish-muslim-woman-hijab-leather-jacket-black-abaya-walking-city-street-talking-smartphone_285396-9429.jpg?w=1380&t=st=1677428747~exp=1677429347~hmac=03557af37684892e8380c8e83814f235fe98d8a422cc65eca7a31fb0d7828f4d');
                ">
                        <div class="cover">
                              <div class="herotext">
                                <h1>We provide the best</h1>
                                <p>Reflect Who you are with our style </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-5" style="background-color:#f9f2e8 ;" data-aos="flip-down">

            <button class="btn shopbtn"> SHOP NOW</button>
        </div>
        <div class="text-center py-4" style="background-color:#ffffff " data-aos="fade-down">
            <h5>MADE WITH A MISSION</h5>
            <p class="missiontext">Our mission is to create a world where every woman feels comfortable and confident.
            </p>
        </div>
         <section class=" myporducts py-4">
            <div class="container">
                <div class="row" id="scrafrow">
<div class="col-md-4 col-6 col-sm-6   products" data-aos="fade-down" onclick ="opencard(${item.id})">
                        <div class="card"  >
                           <a href="./scarfs.php">  <img src="./images/scarf1.jpg"
                                class="card-img-top"
                                id="card-img"
                               alt="Scarf Image" />
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 col-sm-6   products" data-aos="fade-down" onclick ="opencard(${item.id})">
                        <div class="card"  >
                             <a href="./extensionsleeves.php"><img src="./images/extension_sleeves1.jpg"
                                class="card-img-top"
                                id="card-img"
                               alt="Scarf Image" />
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 col-sm-6   products" data-aos="fade-down" onclick ="opencard(${item.id})">
                        <div class="card"  >
                         <a href="./pins.php">    <img src="./images/magnetic_pins1.jpg"
                                class="card-img-top"
                                id="card-img"
                               alt="Scarf Image" />
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <?php include 'footer.php'?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {});
        var myVar;
        setTimeout(() => {
            AOS.init();
        }, 3000);
 
        function myFunction() {
            myVar = setTimeout(showPage, 2000);
        }
        function showPage() {
            document.getElementsByClassName("waterfall")[0].style.display = "none";
            document.getElementById("main").style.display = "block";
        }

        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);
    </script>
</body>

</html>