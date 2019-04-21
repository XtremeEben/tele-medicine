<?php
/**
 * Created by PhpStorm.
 * User: Bonuz
 * Date: 19/04/2019
 * Time: 13:15
 */

include "../service/service.inc";

$app;

$cu = $app->getCurrentUser()['pat_id'];



$apiKey = "46261912";
$apiSecret = "0e051fe2074cfdd6132b4e37c7287049d48d6bb5";

require '../vendor/autoload.php';

use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\Session;
use OpenTok\Role;

$check = $app->getRaw('SELECT * from md_video_chat_room where pat_id = $cu AND doc_id = $doc');
if ($check == null) {

    $opentok = new OpenTok($apiKey, $apiSecret);
    $session = $opentok->createSession();
//print_r($session);exit;
    $sessionId = $session->getSessionId();
    $insertData = ['session_id' => $sessionId, 'pat_id' => $cu];

    $app->insert('md_video_chat_room', $insertData);

    $data = array(
        'role' => Role::PUBLISHER,
        'expireTime' => time() + (7 * 24 * 60 * 60)
    );
//$token = $session->generateToken($data);
    $token = $opentok->generateToken($sessionId, $data);
    $data = ['apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'token' => $token, "sessionId" => $sessionId];

    echo json_encode($data);
}