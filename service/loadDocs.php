<?php

include 'service.inc';

$app = new Sys();

// $data = [];
// $newD = [];
// $all = $app->getAllDocs();
// // $spec = $app->getOneSpec('2');
// // echo json_encode($all);
// // ECHO json_encode($spec);


// foreach ($all as $value) {
//     $data = [
//         'doc_id' => $value['doc_id'],
//         'fname' => $value['fname'],
//         'lname' => $value['lname'],
//         'specialty_id' => $app->getOneSpec($value['doc_id'])['specialty'],
//         'last_seen' => $value['last_seen']
//     ];
//     array_push($newD, $data);

//     echo json_encode($newD);    
    
// }
 
//Our dates
// $date1 = "2014-03-01 04:01:45";
// $date2 = "2014-03-01 04:01:50";
 
// //Convert them to timestamps.
// $date1Timestamp = strtotime($date1);
// $date2Timestamp = strtotime($date2);
 
// //Calculate the difference.
// $difference = $date2Timestamp - $date1Timestamp;
 
// echo $difference;
// // exit;
$date = date('Y-m-d h:i:s', time());
$date = strtotime($date);

$sql = "SELECT d.doc_id, d.fname, d.lname, d.specialty_id, d.last_seen, d.status, s.sp_id, s.specialty FROM md_doctor d INNER JOIN md_specialty s ON s.sp_id = d.specialty_id WHERE {strtotime(last_seen)} - {$date} >30";

// $sql = "SELECT * FROM md_doctor";

$res = $app->getRaw($sql);

echo json_encode($res);