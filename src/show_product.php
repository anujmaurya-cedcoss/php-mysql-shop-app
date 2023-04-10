<?php
session_start();
include_once('header.php');
echo $_SESSION['current_prod'];
include_once('footer.php');
?>