<?php
if (!isset($_SESSION['username'])) {
    $_SESSION['count'] = 1;
} else {
    ++$_SESSION['count'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- js for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/cheers.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>About | Cheers</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

</head>


<body>
     <?php require './includes/menu.php'; ?> 
    
    <header class="bg-dark p-1">
        <div class="container my-4">
            <div class="text-center text-white">
                <h1 class="display-3 fw-bolder">About Cheers</h1>
                <h5 class="mt-4">We don't just sell bottles, we sell the stories behind them.</h5>
            </div>
        </div>
    </header>

    <div>
        <img src="./admin/uploads/products/about.jpg" class="container d-flex img-fluid mb-5 mt-5" width="100%">
    </div>

    <section class="section mb-3 ">
        <div class="container ">
            <div>
                <div class="d-flex justify-content-center font">
                    <h2 class="mb-4">Who We Are ?</h2>
                </div>

                <h4>
                    The Scenario
                </h4>
                <p class="">
                Cheers is the largest online store in Nepal that offers an extensive selection of genuine liquors and daily groceries. 
                We provide free delivery right at your doorstep within 45 minutes, with distance coverage up to 6km outside Ring Road. 
                Our delivery hours are from 10am to 10pm, and we are open 365 days.
                </p>
                <h4>Solution</h4>
                <p class="text-justify">Cheers online store provides an extensive selection of genuine liquors.It is a store from where you can buy Raksi online in Nepal.
                We have all kinds of Whiskey, Rum, Beer, Wine, Vodka, Brandy, and Gin.
                We do have products of both national and international brands.</p>

                <!-- <h4>Mission</h4>
                <p>
                    The Mission of ‘Kisan Area’ is to use all available information and expertise to enable the automation of sustainable process in farming.
                </p> -->
                <h4>Objectives</h4>
                <ul>
                    <li style=" list-style: disc; list-style-position: inside;">It helps to uplifts the socio-economic status of farmers.
                    </li>
                    <li style="list-style: disc; list-style-position: inside;">It helps to remove the broker system i.e. middlemen.
                    </li>
                    <li style="list-style: disc; list-style-position: inside;">It helps farmers to be modernize about the marketing and trading.
                    </li>
                    <li style="list-style: disc; list-style-position: inside;">It allows farmers to make smart decisions about farming.

                    </li>

                </ul> -->
                <p class="col-lg-MB-20">&nbsp;</p>
                <p>
                  <a class="custom-btn primary big" href="#">Get in touch</a>
                </p>
              </div> 

                 <div class="col-lg-4 offset-lg-1">
                  <div class="col-MB-30">
                    <img
                      class="d-block mx-auto img-fluid"
                      src="../img/l2.png"
                      alt="demo"
                    />
                  </div>
                  <div class="col-MB-30">
                    <img class="img-fluid" src="../img/slogan.png" alt="demo" />
                  </div>
                </div>
            </div>
        </div>
    </section>





    <!-- <h2 style="text-align:center" class="mt-1 mb-1">Team</h2> -->
    <!-- <div class="row justify-content-center mt-3">
        <div class="col mb-3">
            <div class="card h-100 m-auto w-50 justify-content-center border-secondary font">
                <img src="./image/bim.jpg" alt="Bimo" style="width:90%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Bimochan Bajimaya</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">bimochanbajimaya@tuicms.edu.np</p>
                    <p class="my-1">+977-9860232480</p> -->
    <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div> -->
    <!-- </div>
            </div>
        </div> 
        
        <div class="col mb-3">
          <div class="card h-100 m-auto w-50 justify-content-center border-secondary font">
                <img src="./images/nischal.jpg" alt="Nischal" style="width:100%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Nischal Dahal</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">nischaldahal@tuicms.edu.np</p>
                    <p class="my-1">+977-9805940865</p> 
    <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div> 

    </div> 
    </div>
   <-- </div>
    </div>  -->
</body>
<!-- <?php require './includes/footer.php'; ?> -->

</html>



<!-- Cheers is the largest online store in Nepal that offers an extensive selection of genuine liquors and daily groceries. 
We provide free delivery right at your doorstep within 45 minutes, with distance coverage up to 6km outside Ring Road. 
Our delivery hours are from 10am to 10pm, and we are open 365 days.

Liquor World, incorporated on December 2013 is one of the biggest Online and Offline Liquor Store in Kathmandu, 
Nepal offers widest selection of genuine domestic and foreign wines, whiskies, beers, bourbons, scotches, tequilas, vodkas, rums, liqueurs, beverages, cigarettes, mixers and other spirits at best price. 
We provide Free Delivery inside ringroad of Kathmandu with purchase of Rs. 1500 and above, below Rs. 1500 and Outside Ringroad (Extra Rs. 150-250) will be added. 
Our delivery hours are from 10:30AM to 8:30PM currently and we are 365 days open at your service. Store Opens: 10AM – 9PM.

We are Online Liquor Nepal. It is a store from where you can buy Raksi online in Nepal.
 We have all kinds of Whiskey, Rum, Beer, Wine, Vodka, Brandy, and Gin.
 We do have products of both national and international brands.


Address : Dhumbarahi, Kathmandu
phone: 9805940865, 01-4444536
Email: info@cheers.com.np  -->