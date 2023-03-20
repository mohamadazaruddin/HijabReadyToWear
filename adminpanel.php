<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./styles/index.css" />
   <link rel="stylesheet" href="./styles/admin.css" />
   <link rel="stylesheet" href="./styles/login.css" />
         <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />  <script src="https://kit.fontawesome.com/7f5049b87a.js" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
</head>
<body>
       <div class="text-center" style="background-color: #f9f2e7;">
      <div class="title" data-aos="fade-down" data-aos-delay="900">
        ENJOY ONLINE HIJAB SHOPING HERE — ALL OVER MUMBAI SHIPPING OPTIONS
        AVAILABLE
      </div>
         <div class="container">
                 <div class="logo d-flex justify-content-center align-items-center w-100" data-aos="flip-up"
                     data-aos-duration="2000">
                     <img src="images/logo.png" width="150px" alt="Hijab Ready To Wear" />
                 </div>
             </div>
      
    </div>
      <nav
        class="mynav d-flex justify-content-center bg-dark"
        data-aos="zoom-in"
      >
        <ul style="margin-bottom: 0px;">
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
            <a href="./features.php">Contact us</a>
          </li>
          <li>
            <a href="login.php">Login</a>
          </li>
        </ul>
      </nav>
    </div>
    <div id="formdiv">


            <div class="login-box mt-4">

            
            <form id="formId">
              <h2>Admin Login</h2>
                <div class="container">
                    <div class="input-div">
                        <input type="text" placeholder=" Username" name="uname" id="uname" required>
                    </div>
                    <div class="input-div">
                        <input type="password" placeholder=" Password" name="password" id="pass" required>
                    </div>
                    <button id="login-btn" type="submit">Login</button>
                </div>
</form>
        </div>
    </div>
    <section id="products_table">
        <div class='row'>
            <div class="col-md-3 col-12 col-sm-6">
                <h5 class="text-center">
                  	Extension Sleeves
                </h5>
       <table class="table-bordered">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <?php
include "db.php";
$sql = "SELECT * FROM premium_georgette_hijab";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>
    <td> " .$row["id"] . "</td>
    <td>". $row["title"] . "</td>
    <td>" . $row["description"] . "</td> 
    <td>" .$row["price"] . "</td>
  </tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</table>
<div class="d-flex justify-content-center py-2">
<button class="btn btn-primary p-2">Add Product</button>
</div>
 </div>
 <div class=" col-md-3 col-12 col-sm-6 ">
 <h5 class="text-center">
 Premium Georgette Hijab
 </h5>
 <table class="table-bordered">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <?php
include "db.php";
$sql = "SELECT * FROM caps";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>
    <td> " .$row["id"] . "</td>
    <td>". $row["title"] . "</td>
    <td>" . $row["description"] . "</td> 
    <td>" .$row["price"] . "</td>
  </tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</table>
<div class="d-flex justify-content-center py-2">
<button class="btn btn-primary p-2">Add Product</button>
</div>
 </div>
<div class="col-md-3 col-12 col-sm-6  ">
<h5 class="text-center">
Magnetic Hijab Pins
</h5>
<table class="table-bordered">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <?php
include "db.php";
$sql = "SELECT * FROM pins";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>
    <td> " .$row["id"] . "</td>
    <td>". $row["title"] . "</td>
    <td>" . $row["description"] . "</td> 
    <td>" .$row["price"] . "</td>
  </tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</table>
<div class="d-flex justify-content-center py-2">
<button class="btn btn-primary p-2">Add Product</button>
</div>
 </div>
<div class=" col-md-3 col-12 col-sm-6 ">
<h5 class="text-center">
Bonnet hijab cap
</h5>
<table class="table-bordered">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <?php
include "db.php";
$sql = "SELECT * FROM caps";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>
    <td> " .$row["id"] . "</td>
    <td>". $row["title"] . "</td>
    <td>" . $row["description"] . "</td> 
    <td>" .$row["price"] . "</td>
  </tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</table>
<div class="d-flex justify-content-center py-2">
<button class="btn btn-primary p-2">Add Product</button>
</div>
 </div> 
            </div>
    
    </section>
    <script>
       var form = document.getElementById("formId");
      function handlesubmit(event){
         event.preventDefault();
       username = document.getElementById(`uname`).value;
       password = document.getElementById(`pass`).value;
       if(username == "Sardar_Sadiya" && password =="Sardar13"){
         document.getElementById(`products_table`).style.display = "block"
         document.getElementById(`formdiv`).style.display = "none"

       }
       else{
        alert("invalid Credentials")
       }
        
      }
          form.addEventListener('submit', handlesubmit);
    </script>
</body>
</html>