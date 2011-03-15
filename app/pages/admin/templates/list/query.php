<?
$order = $_GET['order']?$_GET['order']:'id';
if($dir = $_GET['dir']){
	$order = $order." ".strtoupper($dir);
	}

$q = $table->createQuery()->orderBy($order);

if(isset($_GET['filter'])){

    $filterType  = $_GET['filter_type'];
    $filterValue = $_GET['filter_value'];

    if($filterType){
        $q = $table->filter($q, $filterType, $filterValue);
        }

    }
    
if(isset($_GET['search'])){
    $search = $_GET['search'];
    if($search){
            $q = $table->search($search, $q);
    }else{
            headerRedirect(CURRENT_URL);
            }
    }

$pager = new Doctrine_Pager($q, $_GET['page']?$_GET['page']:0, $per_page);
$rows  = $pager->execute();
