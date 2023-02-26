<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/scarfs.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/7f5049b87a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
     <title>Hijab Ready to Wear</title>
</head>
<body  onload="myFunction()">
    <main class="myporducts">
        <?php include 'header.php'?>
       <nav class="mynav d-flex justify-content-center bg-dark py-2" data-aos="zoom-in">
      <p><a href="/HiJAbREADYTOWEAR/index.php">Home</a> <span> <i class="fa-solid fa-chevron-right"></i></span> Extension Sleeves </p>
      </nav> 
      <div class="container d-block d-md-flex ">

      <a href="./" class='items_card my-4'>
        <div class="items_card_image">
          <img class="fullImg" src="./images/extension_sleeves1.jpg" alt="" data-preload="" width='50px' >
        </div>
        <div class="items_card_texts">
        <h2>premium Georgette hijab</h2>
        </div>
        <div class='ml-2'><i class="fa-solid fa-arrow-right"></i></div>
      </a>

        <a href="" class='items_card my-4'>
        <div class="items_card_image">
          <img class="fullImg" src="./images/magnetic_pins1.jpg" alt="" data-preload="" width='50px' >
        </div>
        <div class="items_card_texts">
        <h2>Magnetic Hijab Pins</h2>
        </div>
        <div class='ml-2'><i class="fa-solid fa-arrow-right"></i></div>
      </a>
    </div>
     
     <section class=" myporducts py-4">
            <div class="container">
                <div class="row" id="scrafrow">

                </div>
            </div>
        </section>
        <?php include 'footer.php'?>
        </main>
<script>
   setTimeout(() => {
            AOS.init();
        }, 1000);
 
var myVar;
function myFunction() {
           fetch("./data/sleeves.json").then(res => res.json()).then(data => {
            console.log(data,"data");
        document.getElementById("scrafrow").innerHTML = data.map(getFullName).join(" ")
    })
                  }
        function getFullName(item) {
  return `<div class="col-md-3 col-6 col-sm-6   products" data-aos="fade-down" onclick ="opencard(${item.id})">
                        <div class="card"  id=${item.id}>
                             <img src="${item.image}"
                                class="card-img-top"
                                id="card-img"
                               alt="Scarf Image" />
                            <div class="card-body" style="box-shadow: 1px -5px 16px 0px #00000038; padding:10px">
                                <h5 class="card-title">${item.title}</h5>
                                <p class="card-text">${item.color} </p>
                                <p class="price"> <i class="fa-solid fa-indian-rupee-sign"></i>${item.price}</p>
                               
                            </div>
                        </div>
                    </div> `
                    }
                    function opencard(id) {
    console.log(id,"id");
}
</script>
</body>
</html>