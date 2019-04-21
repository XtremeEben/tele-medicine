<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 4/17/2019
 * Time: 10:42 AM
 */
include "service.inc";

$cu = $app->getCurrentUser()['doc_id'];

$sql = "select * from md_doctor_patients inner join md_patient on md_doctor_patients.pat_id = md_patient.pat_id WHERE doc_id = $cu";

$res = $app->getRaw($sql);

echo json_encode($res);