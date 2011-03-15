<?

if($data = $_POST){

           $fields  = $table->getColumns();
           foreach($fields as $fieldname=>$field){
                if(isset($data[$fieldname]) && $data[$fieldname] == '' && !isset($field->notnull)){
                    $data[$fieldname] = NULL;
                    }
                }

            if(is_file(CURRENT_PAGE_PATH.$pre_save)){
                include(CURRENT_PAGE_PATH.$pre_save);
                }
                
            //pr($data);
            $item->fromArray($data);
            $valid  = $item->isValid();
           // pr($item->toArray());
            //exit;
	if(!$valid){
		$errors = array();
		$errorStack = $item->getErrorStack();
		
		foreach ($errorStack as $field => $error) {
           	$errors[] = count($error) . " validator" . (count($error) > 1 ?  's' : null) . " failed on $field (" . implode(", ", $error) . ")\n";
            }
		FLASH::put('errors', $errors);
	}else{

		$item->save();
		
		FLASH::put('success',"Save successful!");
		}
		
	if($valid && $redirect_to_list){
		unset($_COOKIE['current_tab']);
		headerRedirect($list_page);
	}else{
		headerRedirect('?id='.$item->id."#".$_COOKIE['current_tab']);
		}
	}