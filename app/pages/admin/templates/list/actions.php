<?
if($action = $_GET['item_action']){
	$id 	= $_GET['id'];
	$item   = $table->find($id);
	
	switch($action){
		case "delete":
			$item->delete();
			$message = "Record was deleted.";
		break;
		
		case "hard_delete":
			$item->hardDelete();
			$message = "Record was deleted forever.";
		break;
		}
		
	FLASH::set('success', $message);
	unset($_GET['id'], $_GET['item_action']);
	$redirect = CURRENT_URL.'?'.http_build_query($_GET, '','&');
	headerRedirect($redirect);
	}
	
	
	
function parse_action($arr, $name, $id){
	foreach($arr as $i){
		if($i['name'] == $name){
			return str_replace("%id%",$id, $i['action']);
			}
		}
	return '';
	}