<?php 
session_start();
if($_SESSION['user']){
  echo '<div id="snackbar" >logged in succesfully</div>';
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
    <title>Document</title>
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
        <div class="divforslider" data-aos="zoom-in">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" style="
                  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr7qaMJNUH0xxS4bZx1rkLgh6-veMXMxyVpCfhekZ9nwS1Rt0NzRWrJw-odeHPcVO6aUo&usqp=CAU');
                ">
                        <div class="cover">
                            <div class="herotext">
                                <h1>Welcome To Our <span style="color: #212529;">Store</span></h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, illum </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="
                  background-image:
                  url('https://img.freepik.com/free-photo/pleased-muslim-woman-uses-cell-phone-socialize-gives-reply-online-chat-posts-something-social-networks_273609-27063.jpg?auto=format&h=200');
                ">
                        <div class="cover"></div>
                    </div>
                    <div class="swiper-slide" style="
                  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr7qaMJNUH0xxS4bZx1rkLgh6-veMXMxyVpCfhekZ9nwS1Rt0NzRWrJw-odeHPcVO6aUo&usqp=CAU');
                ">
                        <div class="cover"></div>
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
        <section class=" myporducts py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 col-sm-6 " data-aos="fade-left">
                        <div class="card">
                            <img src="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360"
                                class="card-img-top"
                                alt="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360" />
                            <div class="card-body">
                                <h5 class="card-title">Premium Jersey Hijab - Buttercream</h5>
                                <p class="card-text">Some quick example</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn  instabtn me-2 w-50"><i
                                            class="fa-brands fa-instagram"></i></button>
                                    <button class="btn  wpbtn w-50"><i class="fa-brands fa-whatsapp"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 col-sm-6 " data-aos="fade-right">
                        <div class="card">
                            <img src="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360"
                                class="card-img-top" height="100%"
                                alt="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360" />
                            <div class="card-body">
                                <h5 class="card-title">Premium Jersey Hijab - Buttercream</h5>
                                <p class="card-text">Some quick example</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn  instabtn me-2 w-50"><i
                                            class="fa-brands fa-instagram"></i></button>
                                    <button class="btn  wpbtn w-50"><i class="fa-brands fa-whatsapp"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 col-sm-6 " data-aos="fade-left">
                        <div class="card">
                            <div class="imgdiv">
                                <img src="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360"
                                    class="card-img-top" height="100%"
                                    alt="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Premium Jersey Hijab - Buttercream</h5>
                                <p class="card-text">Some quick example</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn  instabtn me-2 w-50"><i
                                            class="fa-brands fa-instagram"></i></button>
                                    <button class="btn  wpbtn w-50"><i class="fa-brands fa-whatsapp"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 col-sm-6" data-aos="fade-right">
                        <div class="card">
                            <img src="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360"
                                class="card-img-top"
                                alt="https://cdn.shopify.com/s/files/1/0059/1592/products/20---Buttercream-WRP-BG-J-4_2834.jpg?v=1606579366&width=360" />
                            <div class="card-body">
                                <h5 class="card-title">Premium Jersey Hijab - Buttercream</h5>
                                <p class="card-text">Some quick example</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn  instabtn me-2 w-50"><i
                                            class="fa-brands fa-instagram"></i></button>
                                    <button class="btn  wpbtn w-50"><i class="fa-brands fa-whatsapp"></i></button>
                                </div>
                            </div>
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
        }, 4000);

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
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