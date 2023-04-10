<?php
session_start();
include('header.php');
include('config.php');
echo "<h1 class = 'text-center'>My Wishlist</h1>";
if (isset($_SESSION['wishlist'])) {
    // get id from session
    foreach ($_SESSION['wishlist'] as $key => $value) {
        if ($value == 1) {
            $sql = "SELECT * FROM products WHERE prod_id = $key";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $left = $row['quantity_remaining'];
                $str = "";
                if ($left < 5) {
                    $str = "Only few left, hurry up !";
                }
                if ($left < 1) {
                    $str = "Out of Stock";
                }
                echo "<div class=\"row\">";
                echo "<div class=\"col-lg-3 col-md-6 col-sm-6 d-flex\">
                        <div class=\"card w-100 my-2 shadow-2-strong\">
                            <img src=\"$row[image]\" class=\"card-img-top\"
                                style=\"aspect-ratio: 1 / 1\" />
                            <div class=\"card-body d-flex flex-column\">
                                <h5 class=\"card-title\">$row[title]</h5>
                                <p class=\"card-text\">$ $row[price]</p>
                                <div class=\"card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto\">
                                <a href=\"#!\" class=\"m-3 btn btn-primary shadow-0 me-1 buy-now\" id=\"$row[prod_id]\">Buy Now</a>
                                    <a href=\"#!\" class=\"m-3 btn btn-primary shadow-0 me-1 delete-from-cart\" id=\"$row[prod_id]\">Delete</a>
                                    </div>
                                    <p style = 'color : red' class = 'text-center'>$str</p>      
                            </div>
                        </div>
                    </div>";
                echo "</div>";
            }
        }
    }
}
// show all products here
include('footer.php');
?>