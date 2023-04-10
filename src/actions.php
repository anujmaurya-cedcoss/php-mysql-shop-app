<?php
session_start();
$id = $_POST['id'];
$method = $_POST['type'];

switch ($method) {
    case 'increment':
        $_SESSION['cart'][$_POST['id']]
        // foreach ($_SESSION['cart'] as $k => $arr) {
        //     foreach ($arr as $key => $value) {
        //         if($key == $_POST['id']) {
        //             $_SESSION['cart'][$key][$value]++;
        //         }
        //     }
        // }
        break;

    case 'decrement':
        $_SESSION['cart'][$id]--;
        break;

    default:
        break;
}

echo "<pre></pre>";
print_r($_SESSION);

// session_unset();
// session_destroy();
?>