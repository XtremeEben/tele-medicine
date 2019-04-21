<?php

include 'service.inc';

$app = new Sys();
$date = date('Y-m-d h:i:s', time());
$date = strtotime($date);

$sql = "SELECT d.doc_id, d.fname, d.lname, d.specialty_id, d.last_seen, d.status, s.sp_id, s.specialty FROM md_doctor d INNER JOIN md_specialty s ON s.sp_id = d.specialty_id WHERE {strtotime(last_seen)} - {$date} >30";

// $sql = "SELECT * FROM md_doctor";

$res = $app->getRaw($sql);

echo json_encode($res);