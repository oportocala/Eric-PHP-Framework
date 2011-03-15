<?

$list_page 	= $list_page?$list_page:SESSION::get('LIST_URI');
$id  		= $id?$id:$_GET['id'];

if($id){
    $item = $table->find($id);
}else{
    $item = new $ClassName();
    }

if(!$h2){
    if(in_array('name', $table->getColumnNames())){
        $h2 = $id?$item->name:"Add";
    }else{
        $h2 = "Edit";
        }
    }

$redirect_to_list = $redirect_to_list?$redirect_to_list:true;
if(isset($_POST['redirect_to_list'])){
    $redirect_to_list = $_POST['redirect_to_list'] == 'true'?true:false;
    unset($_POST['redirect_to_list']);
    }

