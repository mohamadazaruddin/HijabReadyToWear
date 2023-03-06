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
     <style>
      
.cartbtn {
    background-color: #000 !important;
    color:#fff !important;
margin-bottom:10px !important;

}


.buybtn {
    border:1px solid #000 !important;
    color:#000 !important;
}

@media only screen and (max-width: 768px) {
       
.cartbtn {
    background-color: #000 !important;
    color:#fff !important;
margin-bottom:10px !important;
}
}
     </style>
</head>
<body  onload="myFunction()">
    <main class="myporducts">
       <div class="text-center">
      <div class="title" data-aos="fade-down" data-aos-delay="900">
        ENJOY ONLINE HIJAB SHOPING HERE — ALL OVER MUMBAI SHIPPING OPTIONS
        AVAILABLE
      </div>
      <div class="logo" data-aos="flip-up" data-aos-duration="2000">
        <img src="../images/logo.png" width="150px" alt="Hijab Ready To Wear" />
      </div>
    </div>
       <nav class="mynav d-flex justify-content-center bg-dark py-2" data-aos="zoom-in">
      <p class='m-0'><a href="/HiJAbREADYTOWEAR/index.php">Home</a> <span> <i class="fa-solid fa-chevron-right"></i></span> Carts</p>
      </nav> 
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
        let getcartDetail= JSON.parse(localStorage.getItem('productsList'))
        if(getcartDetail){
     document.getElementById("scrafrow").innerHTML = getcartDetail.map((item)=>(
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
                                <div class="">
                                  <button class="btn cartbtn w-100 "  onclick ="removefromcart(${item.id})" id="addcart${item.id}">Remove from cart</button>
                                  <button class="btn buybtn w-100 "> Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div> `
        )
        ).join(" ")
        }
   else{
      document.getElementById("scrafrow").innerHTML=`<h1 class="card-title m-0 text-center">Your cart is empty</h1>`
   }
    }

    let getcartDetail= JSON.parse(localStorage.getItem('productsList'))
    function removefromcart(id) {
let x= getcartDetail.splice(id-1,1)
        console.log(x,"firat");
        console.log(getcartDetail,"getcartDetail");
 localStorage.setItem('productsList', JSON.stringify(getcartDetail))
         myFunction()
        }
</script>
</body>
</html>