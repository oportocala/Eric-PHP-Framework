<?php
include("../!bootstrap.php");

set_time_limit(0);
$userId = 5;


$rows = Doctrine_Core::getTable('Place')->findAll();
foreach($rows as $row){
    $state       = $row->state;
    $status      = $row->status;
    $schedule_id = $row->schedule_id?$row->schedule_id:"NULL";
    $id = $row->id;
    $sql = "UPDATE `places` SET `state` = '$state' , `status` = '$status', `schedule_id` = $schedule_id WHERE `id` = $id;";
    pr($sql);
    }