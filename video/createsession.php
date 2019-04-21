<?php
/**
 * Created by PhpStorm.
 * User: Bonuz
 * Date: 20/04/2019
 * Time: 10:24
 */

require '../vendor/autoload.php';

use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\Session;
use OpenTok\Role;
include "../service/service.inc";

$app;

if (!$app->isAdmin()) {
//$cu = $app->getCurrentUser()['pat_id'];
    $cu = '39';
    $doc = $_POST['doc_id'];
//print_r($doc);exit;


    $apiKey = "46261912";
    $apiSecret = "0e051fe2074cfdd6132b4e37c7287049d48d6bb5";



    $opentok = new OpenTok($apiKey, $apiSecret);

    $check = $app->getRaw("SELECT * from md_video_chat_room where pat_id = '$cu' AND doc_id = '$doc'");


    if ($check != null) {


        $data = array(
            'expireTime' => time() + (7 * 24 * 60 * 60)
        );
        $check = $check[0];
//$token = $session->generateToken($data);
        $sessionId = $check['session_id'];
        $token = $opentok->generateToken($check['session_id'], $data);
        $data = ['apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'token' => $token, "sessionId" => $sessionId];

        echo json_encode($data);

    } else {

        $session = $opentok->createSession();
//print_r($session);exit;
        $sessionId = $session->getSessionId();
        $insertData = ['session_id' => $sessionId, 'pat_id' => $cu, 'doc_id' => $doc];

        $res = $app->insert('md_video_chat_room', $insertData);
        print_r($res);
        exit;

        $data = array(
            'expireTime' => time() + (7 * 24 * 60 * 60)
        );
//$token = $session->generateToken($data);
        $token = $opentok->generateToken($sessionId, $data);
        $data = ['apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'token' => $token, "sessionId" => $sessionId];

        echo json_encode($data);
    }
} else {
    //$cu = $app->getCurrentUser()['doc_id'];
    $cu = '1';
//    $pat = $_POST['pat_id'];
    $pat = 39;
//print_r($doc);exit;


    $apiKey = "46261912";
    $apiSecret = "0e051fe2074cfdd6132b4e37c7287049d48d6bb5";



    $opentok = new OpenTok($apiKey, $apiSecret);

    $check = $app->getRaw("SELECT * from md_video_chat_room where doc_id = '$cu' AND pat_id = '$pat'");


    if ($check != null) {


        $data = array(
            'expireTime' => time() + (7 * 24 * 60 * 60)
        );
        $check = $check[0];
//$token = $session->generateToken($data);
        $sessionId = $check['session_id'];
        $token = $opentok->generateToken($check['session_id'], $data);
        $data = ['apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'token' => $token, "sessionId" => $sessionId];

        echo json_encode($data);

    } else {

        $data = ['errorCode' => '505', 'message' => "How come you're here, pass through the right way"];

        echo json_encode($data);
    }
}