<?php
session_start();
include('./config.php');
// insert the data of session(cart, wishlist) in db
echo "<pre></pre>";
$user_id = $_COOKIE['user'];
foreach ($_SESSION['wishlist'] as $product_id => $qty) {
    // if id doesn't exist as product id in the db, then insert, 
    $find_sql = "SELECT * FROM `wishlist` WHERE `user_id` = '$user_id' AND `product_id` = '$product_id'";
    $result = mysqli_query($conn, $find_sql);
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
        $sql = "INSERT INTO `wishlist`(`user_id`, `product_id`) VALUES ('$user_id','$product_id')";
        $result = mysqli_query($conn, $sql);
    }
    // if id exist in db, but not in session, then delete it
    $sql = "SELECT * FROM `wishlist`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['user_id'] == $user_id) {
                if (!$_SESSION['wishlist'][$row['product_id']]) {
                    $sql = "DELETE FROM `wishlist` WHERE `product_id` = $row[product_id]";
                    $result = mysqli_query($conn, $sql);
                }
            }
        }
    }
}

foreach ($_SESSION['cart'] as $k => $arr) {
    foreach ($arr as $id => $quantity) {
        // if $id exist as product_id, then update quantity
        
        // if $id doesn't exist in db, then insert in db
        // if $id exist in db, but not in session, delete it from db
    }
}
// clear cookies and sessions

// finally refer to homepage in jQuery
?>