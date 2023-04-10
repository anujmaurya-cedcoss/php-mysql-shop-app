<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [[]];
}
if (isset($_COOKIE['user'])) {
    // add the wishlist in db
} else {
    // add the wishlist in session
    // add the product id in session
}

$found = false;

foreach ($_SESSION['cart'] as $key => $arr) {
    foreach ($arr as $key => $value) {
        if($key == $_POST['id']) {
            $found = true;
        }
    }
}
$arr = Array ($_POST['id'] => 1);
if(!$found) {
    array_push($_SESSION['cart'], $arr);
}

echo "<pre></pre>";
print_r($_SESSION['cart']);

// session_unset();
// session_destroy();
?>