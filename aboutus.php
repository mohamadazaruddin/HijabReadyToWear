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
      <?php include 'header.php'?>
      <nav
        class="mynav d-flex justify-content-center bg-dark"
        data-aos="zoom-in"
      >
        <ul>
          <li>
            <a href="/HiJAbREADYTOWEAR/index.php">Home</a>
          </li>
          <li>
            <a href="./features.php">Features</a>
          </li>
          <li class="activenav">
            <a href="./aboutus.php">About Us</a>
          </li>
          <li>
            <a href="login.php">Login</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="aboutus">
      <div class="container py-5">
        <div
          class="d-flex justify-content-around align-items-center w-100 pb-5 border-bottom"
        >
          <div class="aboutus-title">
            <h1>About Us</h1>
            <p>Discover the story of hijab Ready to Wear</p>
          </div>
          <div class="aboutus-image">
            <img
              src="./images/cover_image_1.jpg"
            />
          </div>




        </div>
     

      <div class="py-5 border-bottom">
        <div class="text-center sections">
          <p class="legends">Our Story</p>
          <p class="contents">
            HRTW was born in June @2020. in Lockdown After finding a gap in the
            market for on-trend and comfortable hijabs, we took the opportunity
            to create a one-stop for all things hijabi. Hijab Ready to Wear is
            not just a brand , it's a community for all muslim girls.
          </p>
                <a href="/HiJAbREADYTOWEAR/index.php" class="btn shopbtn mt-5"> Shop Now</a>
        </div>
      </div>
       <div class="py-5 border-bottom">
        <div class="text-center sections">
          <p class="legends">Our Products</p>
          <p class="contents">
            Our hijabs and accessories have been hand-picked to keep you feeling comfortable, confident and on trend, sourced by our dedicated are regularly updated to ensure that your hijab wardrobe is always fresh.
          </p>
                <a href="/HiJAbREADYTOWEAR/index.php" class="btn shopbtn mt-5"> Shop Now</a>
        </div>
      </div>
     <div class="py-5 border-bottom">
        <div class="text-center sections">
          <p class="legends">Our Commmunity </p>
          <p class="contents">
            Hijab Ready To Wear is one of the hijab fashion brands that offers the latest hijabs to young hijabis Hijab Ready to Wear has an active social media presence we like to stay connected with our loyal followers and keep them updated with current trends.
          </p>
          <a class="btn shopbtn mt-5"> Follow Us</a>
        </div>
      </div>



      
        <div class="d-flex pt-4 justify-content-center aboutus-icons" >
          <div class='mx-2' ><i class="fa-brands fa-facebook"></i></div>
          <div class='mx-2'><i class="fa-brands fa-square-instagram"></i></div>
          <div class='mx-2'><i class="fa-brands fa-square-whatsapp"></i></div>
        </div>
      
       </div>
    </div>
    <?php include 'footer.php'?>
    <script>
      AOS.init();
    </script>
  </body>
</html>
