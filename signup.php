<!Doctype html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logos/webw.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/webw.png" />
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Cheers | Signup</title>

</head>

<body class="font bg-dark">

<?php include('./includes/menu.php');?>

    <!-- Main Section-->
    <!-- <section class="mt-0 overflow-hidden vh-100 d-flex justify-content-center align-items-center p-5 "> -->
    <section class="bg-dark col-12">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-5 d-flex justify-content-center m-auto mt-5 mb-5">
                    <div class="card mt-5  wid text-black border w-100 mb-xxl-auto" style="border-radius: 20px;">
                        <div class="card-body p-3">
                            <span class="d-flex justify-content-end">
                                <a href="./index.php" class="myA">Go Back</a>
                            </span>
                            <img class="d-flex justify-content-center m-auto img-fluid"  width="35%" src="./admin/uploads/products/cheers.jpg" />
                            <h4 class="text-center mb-3">Signup</h4>
                            <form action="./registerdb.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">

                                <div class="form-group mb-2">
                                    <input type="text" required name="fname" id="fname" placeholder="Name" class="form-control border-secondary" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="email" required name="email" id="email" class="form-control border-secondary" placeholder="E-mail" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="address" required name="address" id="address" class="form-control border-secondary" placeholder="Address" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="number" required name="phone" id="phone" class="form-control border-secondary" placeholder="Phone Number" />
                                    <span class="text-danger phone-not-found"></span>
                                </div>


                                <div class="form-group mb-2">
                                    <input type="number" required name="age" id="age" placeholder="age" class="form-control border-secondary" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="username" required name="username" id="username" class="form-control border-secondary" placeholder="Username" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="password" required name="password" id="password" placeholder="Password" class="form-control border-secondary" />
                                </div>

                                <div class=" text-white form-group mt-3">
                                    <input type="submit" value="Submit" name="login" id="login" class="btn btn-dark text-white d-flex justify-content-center m-auto" />
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require './includes/footer.php'; ?> 

</body>

</html>