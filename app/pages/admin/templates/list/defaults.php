<?
/* Defaults */
$item_page  = "item.php";
$insert_url = $item_page;
$searchable = $searchable?$searchable:false;

$per_page = $per_page?$per_page:10;

$h2 = $h2?$h2:$ClassName." List";
$h3 = $h3?$h3:$ClassName." List";

$actions = array();

$actions []= array(
	'name'	=> 'edit',
	'title'	=> 'Edit',
	'icon'	=> 'pencil',
	'action' => $item_page.'?id=%id%'
	);
	
$actions []= array(
	'name'		=> 'delete',
	'title'		=> 'Delete',
	'icon'		=> 'cross',
	'action' 	=> '?item_action=delete&id=%id%',
	'class'		=> 'confirm'
	);
	
if(isset($actions_merge) && is_array($actions_merge)){
	$actions = array_merge($actions, $actions_merge);
	}
	
