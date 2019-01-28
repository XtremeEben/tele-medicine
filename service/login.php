<?php

include 'service.inc';

$username = $_POST['email'];
$password = $_POST['password'];


print_r($app->canLogin($username, $password));exit;

if ($app->canLogin($username, $password)) {
    if ($app->isAdmin()) {
        $_SESSION['admin'] = true;
        return true;
    } else {
        $_SESSION['patient'] = true;
        return true;
    }
} else {
    echo "Failure login";
}

















