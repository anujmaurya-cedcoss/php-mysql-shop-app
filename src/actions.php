<?php
session_start();
$method = $_POST['type'];
require('./config.php');

// update all the queries in db also
switch ($method) {
    case 'increment':
        foreach ($_SESSION['cart'] as $idx => $arr) {
            foreach ($arr as $key => $quant) {
                if ($key == $_POST['id']) {
                    $_SESSION['cart'][$idx][$key]++;
                }
            }
        }
        break;

    case 'decrement':
        foreach ($_SESSION['cart'] as $idx => $arr) {
            foreach ($arr as $key => $quant) {
                if ($key == $_POST['id']) {
                    $_SESSION['cart'][$idx][$key]--;
                    if ($_SESSION['cart'][$idx][$key] < 1) {
                        unset($_SESSION['cart'][$idx]);
                    }
                }
            }
        }
        break;

    case 'delete':
        foreach ($_SESSION['cart'] as $idx => $arr) {
            foreach ($arr as $key => $quant) {
                if ($key == $_POST['id']) {
                    unset($_SESSION['cart'][$idx]);
                }
            }
        }
        break;

    case 'emptyCart':
        unset($_SESSION['cart']);
        break;

    case 'checkout':
        if (isset($_COOKIE['user'])) {
            // insert everything in db, and then unset session['cart']
            foreach ($_SESSION['cart'] as $idx => $arr) {
                foreach ($arr as $id => $quant) {
                    $sql = "INSERT INTO `orders`
                    (`prod_id`, `quantity`,`user_id`) 
                    VALUES ('$id','$quant','$_COOKIE[user]')";
                    $result = mysqli_query($conn, $sql);
                    echo "true";
                }
            }
            // unset session
            unset($_SESSION['cart']);
        } else {
            echo "false";
        }
        break;

    
    default:
        break;
}

// echo "<pre></pre>";
// print_r($_SESSION);

// session_unset();
// session_destroy();
?>