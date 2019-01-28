<?php

include 'class/class.SYS.php';

$app = new Sys();

// echo($app->is_conn());

// $login = $app->canLogin('hgibson@gmail.com', 'a5a2e76e2044aedc63dfde9bcaa8c98951efb08f');

// print_r($login);
print_r($app->isLoggedIn());
echo '<br>';
// print_r($app->isAdmin());
// print_r($app->getCurrentUser());
// print_r($app->unsetAllSession());
// print_r($app->getAllDocs());

print_r($app->getOnlineStatus());