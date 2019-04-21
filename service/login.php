<?php

include 'service.inc';

$username = $_POST['email'];
$password = $_POST['password'];


print_r($app->canLogin($username, $password));exit;
















