<?php 
require 'class/class.SYS.php';
$app = new Sys();

$loggedin = false;

if($app->isLoggedIn()) {
    // print_r("I am loooooooged"); exit;
    $loggedin = true;
} 
// else {
    // print_r("I am not loggggggggggggg"); print_r($app->isLoggedIn()); exit;
// }

include 'includes/header.php';

if (isset($_GET['p'])) {
    
    $page = $_GET['p'];


    if ($page == '') {
        header("Location:?p=dashboard");        
    } if ($page == 'dashboard') {
        include 'includes/mainpage.php';
    } elseif ($page == 'about') {
        include 'includes/about.php';
    } elseif ($page == 'contact') {
        include 'includes/contact.php';
    } elseif ($page == 'portfolio') {
        include 'includes/portfolio.php';
    } elseif ($page == 'pricing') {
        include 'includes/pricing.php';
    } elseif ($page == 'services') {
        include 'includes/services.php';
    } elseif ($page == 'see-a-doctor') {
        include 'includes/see-a-doctor.php';
    } elseif ($page == 'video-call') {
        header('Location: video/');
    }
} else {
    header("Location:?p");
}




include 'includes/footer.php';

