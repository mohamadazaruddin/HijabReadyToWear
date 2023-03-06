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
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/scarfs.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/7f5049b87a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <title>Hijab Ready to Wear</title>
</head>

<body onload="myFunction()">
    <main class="myporducts">
        <div class="text-center">
            <div class="title" data-aos="fade-down" data-aos-delay="900">
                ENJOY ONLINE HIJAB SHOPING HERE — ALL OVER MUMBAI SHIPPING OPTIONS
                AVAILABLE
            </div>
            <div class="container">
                <div class="logo d-flex justify-content-between align-items-center" data-aos="flip-up"
                    data-aos-duration="2000">
                    <div class="" onclick="sharefunction()"><i class="fa-solid fa-share-nodes"></i></div>
                    <img src="../images/logo.png" width="150px" alt="Hijab Ready To Wear" />
                    <div> <a href="/HiJAbREADYTOWEAR/carts/mycart.php" style="text-decoration:none;color:black;"><i
                                class="fa-solid fa-cart-shopping"></i></a></div>
                </div>
            </div>
        </div>
        <nav class="mynav d-flex justify-content-center align-items-center bg-dark py-2" data-aos="zoom-in">
            <p class='m-0'><a href="/HiJAbREADYTOWEAR/index.php">Home</a> <span> <i
                        class="fa-solid fa-chevron-right"></i></span> Extension Sleeves </p>
        </nav>
        <div class="container d-block d-md-flex ">

            <a href="scarfs.php" class='items_card my-4' data-aos="fade-down">
                <div class="items_card_image">
                    <img class="fullImg" src="../images/scarf2.jpg" alt="" data-preload="" width='50px' height='50px'>
                </div>
                <div class="items_card_texts">
                    <h2> PREMIUM GEORGETTE HIJAB </h2>
                </div>
                <div class='ml-2'><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="pins.php" class='items_card my-4' data-aos="fade-down">
                <div class="items_card_image">
                    <img class="fullImg" src="../images/magnetic_pins1.jpg" alt="" data-preload="" width='50px'
                        height='50px'>
                </div>
                <div class="items_card_texts">
                    <h2>MAGNETIC HIJAB PINS </h2>
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
        <?php include '../footer.php'?>
    </main>
    <script>
        setTimeout(() => {
            AOS.init();
        }, 1000);

        var myVar;

        function myFunction() {
            fetch("../data/sleeves.json").then(res => res.json()).then(data => {
                console.log(data, "data");
                document.getElementById("scrafrow").innerHTML = data.map((item) => (
                    `<div class="col-md-3 col-6 col-sm-6   products" data-aos="fade-down" >
                        <div class="card"  id=${item.id}>
                             <img src="${item.image}"
                                class="card-img-top"
                                id="card-img"
                               alt="Scarf Image" />
                            <div class="card-body" style="box-shadow: 1px -5px 16px 0px #00000038; padding:10px">
                                <h5 class="card-title m-0">${item.title}</h5>
                                <p class="card-text m-0">${item.color} </p>
                                <p class="price"> <i class="fa-solid fa-indian-rupee-sign"></i>${item.price}</p>
                                <div>
                                <div class="">
                                <button class="btn cartbtn w-100 "  onclick ="addtocart(${item.id})" id="addcart${item.id}"> Add to cart</button>
                                <button class="btn buybtn w-100 "> Buy Now</button>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> `
                )).join(" ")
            })
        }

        function addtocart(id) {
            fetch("../data/sleeves.json").then(res => res.json()).then(data => {
                let itemsList = []
                const getCarStorage = localStorage.getItem('productsList')
                if (getCarStorage) {
                    itemsList = JSON.parse(localStorage.getItem('productsList'))
                    itemsList.push(data[id-1])
                    localStorage.setItem('productsList', JSON.stringify(itemsList))
                    document.getElementById(`addcart${id}`).innerHTML = "added to cart";
                    document.getElementById(`addcart${id}`).setAttribute("disabled", "disabled");
                } else {
                    itemsList.push(data[id-1])
                    localStorage.setItem('productsList', JSON.stringify(itemsList))
                    document.getElementById(`addcart${id}`).innerHTML = "added to cart";
                    document.getElementById(`addcart${id}`).setAttribute("disabled", "disabled");
                }

            })

        }
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