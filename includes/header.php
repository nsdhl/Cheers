<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
         
                    <a href="./index.php"><img class="img-fluid" src="./admin/uploads/products/cheers.jpg" style="width: 25%;" href="./index.php" alt="Cheers"></a>
               
                <a class="navbar-brand" href="#!">CHEERS !!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['username'])) {
                                echo'<a class="nav-link text-dark px-4">' . " " . $_SESSION['username'];'</a>';
                            } else {
                                echo '<a class="nav-link" href="./login.php">Login</a></li>';
                            }
                            ?>
                            </a>
                        </li>
                        
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="./beer.php">Beer</a></li>
                                <li><a class="dropdown-item" href="./beverage.php">Beverage</a></li>
                                <li><a class="dropdown-item" href="./rum.php">Rum</a></li>
                                <li><a class="dropdown-item" href="./vodka.php">Vodka</a></li>
                                <li><a class="dropdown-item" href="./whisky.php">Whisky</a></li>
                                <li><a class="dropdown-item" href="./wine.php">Wine</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>