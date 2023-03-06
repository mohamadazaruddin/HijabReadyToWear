<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/aboutus.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
      src="https://kit.fontawesome.com/7f5049b87a.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <title>Hijab Ready to Wear</title>
  </head>
  <body>
    <div>

   <div class="text-center" style="background-color: #f9f2e7;">
      <div class="title" data-aos="fade-down" data-aos-delay="900">
        ENJOY ONLINE HIJAB SHOPING HERE — ALL OVER MUMBAI SHIPPING OPTIONS
        AVAILABLE
      </div>
        <div class="container ">
                 <div class="logo d-flex justify-content-between align-items-center" data-aos="flip-up"
                     data-aos-duration="2000">
                     <div class="" onclick="sharefunction()"><i class="fa-solid fa-share-nodes"></i></div>
                     <img src="images/logo.png" width="150px" alt="Hijab Ready To Wear" />
                     <div> <a href="/HiJAbREADYTOWEAR/carts/mycart.php" style="text-decoration:none;color:black;"><i
                                 class="fa-solid fa-cart-shopping"></i></a></div>
                 </div>
             </div>
      
    </div>
      <nav
        class="mynav d-flex justify-content-center bg-dark"
        data-aos="zoom-in"
      >
        <ul>
          <li>
            <a href="/HiJAbREADYTOWEAR/index.php">Home</a>
          </li>
          <li >
            <a href="./features.php">Features</a>
          </li>
          <li>
            <a href="./aboutus.php">About Us</a>
          </li>
          <li class="activenav">
            <a href="./contactus.php">Contact us</a>
          </li>
          <li>
            <a href="login.php">Login</a>
          </li>
        </ul>
      </nav>
      <div class="aboutus">
        <div class="text-center imgdiv">
          <div class="concover">
            <h1>Contact Us</h1>
          </div>
        </div>

        <div class="container">
          <div class="d-flex justify-content-center">
            <div class="touch p-3 text-center">
              <p class="touch-head">Get in Touch with Us</p>
              <p class="touch-body">
                Chat with our sales team to discover how our products can work
                best for you
              </p>
              <div
                class="d-flex justify-content-center align-items-center mt-2"
              >
                <div class="feat-icon"><i class="fa-solid fa-phone"></i></div>

                <div class="num">+91 98922 60393</div>
              </div>
            </div>
          </div>
          <div class="row py-5">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="headquarters m-auto">
                    <h2>Headquarters</h2>
<div class="city mt-5">
    Mumbai Maharashtra
</div>
<div class="addr mt-4 flex">
    <div><div class="addricon">
<i class="fa-solid fa-location-dot"></i>
    </div> Plot No. 26/L/2 Shivaji Nagar Govandi Mumbai, Opposite Madina Masjid, Govandi West,Road No. 1 Mumbai - 400043 Maharashtra, India</div>
    <div class='mt-4 flex' ><div class="addricon">
        <i class="fa-solid fa-envelope"></i>
    </div><a href="mailto: hijaab1311@gmail.com">hijaab1311@gmail.com</a></div>
    <div class='mt-5 flex'> <div class="addricon">
        <i class="fa-solid fa-phone"></i>
    </div>+91 98922 60393 (Mon - sat 12pm to 8pm) </div>
</div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 text-center">
<img src="./images/map.png" class='gmap' alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'?>
    <script>
      AOS.init();
        function sharefunction() {

             const siteurl = "http://localhost/HiJAbREADYTOWEAR/index.php"
             console.log(siteurl)
             if (navigator.share) {
                 navigator.share({
                         title: 'Hijab Ready To Wear!',
                         text: 'get started with hijab ready to wear',
                         url: siteurl
                     }).then(() => {
                         console.log('Thanks for sharing!');
                     })
                     .catch(err => {
                         console.log(`Couldn't share because of`, err.message);
                     });
             } else {
                 console.log('web share not supported');
             }
         }
    </script>
  </body>
</html>
