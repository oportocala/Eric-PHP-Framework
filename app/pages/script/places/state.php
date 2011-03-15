<?php
include("../!bootstrap.php");

set_time_limit(0);
$userId = 5;
$old_table = "places_old";

$rows = Doctrine_Core::getTable('Place')->findAll();
foreach($rows as $row){

    $old_slug = Doctrine_Core::getTable("RoutesRedirect")->findOneByNew($row['slug']);
    $old_slug = $old_slug['old'];
    $sth = $dbh->prepare("SELECT * FROM {$old_table} WHERE slug = '$old_slug'");

    $sth->execute();
    $old_row = $sth->fetch(PDO::FETCH_ASSOC);
    $status = $old_row['status'];
    if($status == 1){
        $row->publish();
        }
    }