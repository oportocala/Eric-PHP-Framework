<?
 include("../!bootstrap.php");

$ClassName  = "Place";
$searchable = true;
$hidden_fields = array('state','level','rgt','lft','deleted_at' ,'published_at','created_at', 'updated_at', 'created_by', 'updated_by', 'contact_gr_id', 'schedule_id','slug');


include(PAGE_TEMPLATES."list.php");
