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
          <li class="activenav">
            <a href="./features.php">Features</a>
          </li>
          <li>
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
            <h1>Features of HJijab</h1>
            <p>Discover Whats makes your Hijab Unique</p>
          </div>
          <div class="aboutus-image">
            <img src="./images/cover_image_2.jpg" />
          </div>
        </div>
    
          <div class="row py-5" >
            <div
              class="col-md-4 col-6 col-sm-6 products"
              data-aos="fade-down"
            >
<div class="feature_card">
  <div class="d-flex">
    <div class="fest-icon"><i class="fa-solid fa-thumbs-up"></i></div>
    <div class="featcontentsdiv">
       <p class="feat-heads"> Breathable Fabric</p>
       <p class="feat-content">
        The use of breathable fabric in the hijabs to keep customers comfortable throughout the day
       </p>
    </div>
  </div>
</div>
          </div>
            <div
              class="col-md-4 col-6 col-sm-6 products"
              data-aos="fade-down"
            >
<div class="d-flex  mb-4">
    <div class="fest-icon"><i class="fa-solid fa-chart-line"></i></div>
    <div class="featcontentsdiv">
       <p class="feat-heads">On-Trend Designs </p>
       <p class="feat-content">the trendy designs available in the Hijab Ready To Wear collection</p>
    </div>
  </div>
          </div>
            <div
              class="col-md-4 col-6 col-sm-6 products"
              data-aos="fade-down"
            >
          <div class="d-flex">
    <div class="fest-icon"><i class="fa-solid fa-hand-point-up"></i></div>
    <div class="featcontentsdiv">
       <p class="feat-heads"> Easy to Style</p>
       <p class="feat-content"> how easy it is to style the hijabs in different ways</p>
    </div>
  </div>
          
          </div>
              <div
              class="col-md-4 col-6 col-sm-6 products"
              data-aos="fade-down"
            >
            <div class="d-flex">
    <div class="fest-icon"><i class="fa-sharp fa-solid fa-face-smile"></i></div>
    <div class="featcontentsdiv">
       <p class="feat-heads"> Durability</p>
       <p class="feat-content">the high-quality materials used to ensure the hijabs are durable and long-lasting</p>
    </div>
  </div>

          </div>
              <div
              class="col-md-4 col-6 col-sm-6 products"
              data-aos="fade-down"
            >
<div class="d-flex">
    <div class="fest-icon"><i class="fa-solid fa-bag-shopping"></i></div>
    <div class="featcontentsdiv">
       <p class="feat-heads"> Shop Our Collection</p>
       <p class="feat-content"> Our hijabs and accessories have been hand-picked to keep you feeling comfortable, confident and on trend, sourced by our dedicated style team</p>
    </div>
  </div>
   
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'?>
    <script>
      AOS.init();
    </script>
  </body>
</html>
