<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <script src="./JS/main.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Jumbotron -->
        <div class="p-3 text-center bg-white border-bottom">
            <div class="container">
                <div class="row gy-3">
                    <!-- Left elements -->
                    <div class="col-lg-5 col-sm-4 col-4">
                        <a href="./index.php" class="float-start">
                            <img src="./images/fake_logo.png" alt="logo" height="35" />
                        </a>
                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="order-lg-last col-lg-7 col-sm-8 col-8">
                        <div class="d-flex float-end">
                            <!-- sign up button button -->
                            <a href="./signup.php"
                                class="me-1 border rounded py-1 px-3 nav-link  align-items-center sign-in-btn"> <i
                                    class="fas fa-user-alt m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0 ">Sign in</p>
                            </a>
                            <!-- log in button button -->
                            <a href="./login.php"
                                class="me-1 border rounded py-1 px-3 nav-link  align-items-center log-in-btn"> <i
                                    class="fas fa-user-alt m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0 ">Log in</p>
                            </a>

                            <!-- wish list button -->
                            <a href="./show_wishlist.php"
                                class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"> <i
                                    class="fas fa-heart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">Wishlist</p>
                            </a>
                            <!-- my cart button -->
                            <a href="./show_cart.php"
                                class="border rounded py-1 px-3 nav-link d-flex align-items-center"> <i
                                    class="fas fa-shopping-cart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">My cart</p>
                            </a>

                            <!-- my Orders button -->
                            <a href="./my_orders.php"
                                class="border rounded py-1 px-3 nav-link align-items-center my-orders-btn"
                                style="display:none" ;> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">My Orders</p>
                            </a>

                            <!-- sign out button -->
                            <a class="me-1 border rounded py-1 ml-3 px-3 nav-link  align-items-center sign-out-btn"
                                style="display:none" ;> <i class="fas fa-user-alt m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0 ">Sign Out</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->

        <!-- Jumbotron -->
        <div class="bg-primary text-white py-5">
            <div class="container py-5">
                <h1>
                    Best products & <br />
                    brands in our store
                </h1>
                <p>
                    Trendy Products, Factory Prices, Excellent Service
                </p>
            </div>
        </div>
        <!-- Jumbotron -->
    </header>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>