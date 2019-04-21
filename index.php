<?php 
require 'class/class.SYS.php';
$app = new Sys();

$loggedin = false;
$isadmin = false;

if($app->isLoggedIn()) {
    $loggedin = true;
//    print_r($app->isAdmin()); exit;
    if($app->isAdmin()){
        $isadmin = true;
    }
}

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
    } elseif ($page == 'see-patients') {
        include 'includes/see-patients.php';
    } elseif ($page == 'video-call') {
        header('Location: video/');
    }
} else {
    header("Location:?p");
}


include 'talk.html';

include 'includes/footer.php';

