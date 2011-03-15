<?
 include("../../!bootstrap.php");

$ClassName = "PlaceGroup";
//$searchable = true;
//$hidden_fields = array('state','level','rgt','lft','deleted_at' ,'published_at','created_at', 'updated_at', 'created_by', 'updated_by', 'contact_gr_id', 'schedule_id','slug');
$hidden_fields = array('contact_gr_id');
include(PAGE_TEMPLATES."list.php");
