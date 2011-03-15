<?
if($hidden_fields){
	$hidden_fields = array_merge($hidden_fields, array('id'));
	}else $hidden_fields = array('id');
if(!$field_assocs){
	$field_assocs = array();
	}
$primary_fields = array('name', 'title', 'id', $primary_field);
$relation_fields = array();

if(!is_array($fields)){

	$final_fields = array();
	$fields		 = $table->getColumns();
	$relations 	 = $table->getRelations();
	foreach($relations as $relation){
		$local = $relation->getLocal();
		if($local != 'id'){
			$field_assocs[$local] = $relation->getAlias();
			$rel[$local] = $relation->getAlias();
                        $relation_fields []= $local;
			}
		}
	
	foreach($fields as $fn=>$fd){
		if(!in_array($fn, $hidden_fields)){
			$f = array(
				'name' 		=> $fn,
				'title'		=> ($field_assocs[$fn])?$field_assocs[$fn]:ucwords(str_replace("_", " ",$fn)),
				'retreive' 	=> $rel[$fn]?$rel[$fn]:$fn
				);

			if(in_array($fn, $primary_fields)){
				$f['edit_action'] = true;
				}
			$final_fields []= $f;
			}
		}
		
	$fields = $final_fields;
	}