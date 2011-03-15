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

    $sch = new PlaceSchedule();
    $ok = true;
    for($i=0;$i<=6 && $ok;$i++){
        $sql = "SELECT * FROM places_schedule_old WHERE `place_id` = {$old_row['id']} AND `weekday` = $i";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $schedule = $sth->fetch(PDO::FETCH_ASSOC);
        
         $day = new PlaceScheduleDays();
         $day->weekday = $i;
         $day->time_start = $schedule['start'];
         $day->time_end = $schedule['end'];
         $day->nonstop =  $schedule['nonstop'];
         $day->closed  =  $schedule['closed'];

        $sch->Days []= $day;
        if($day->isValid()){
            //$day->save();
            
            }else{
                $ok = false;
                echo "ts:".$day->time_start."<br/>";
                echo "te:".$day->time_end."<br/>";
            }
        }
        
    if($ok && $sch->isValid()){
        $sch->save();
        $row->Schedule = $sch;
        if($row->isValid()){
            $row->save();
            }
        }
    
   
    
    }
