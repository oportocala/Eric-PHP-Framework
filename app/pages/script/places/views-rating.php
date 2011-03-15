<?
include("../!bootstrap.php");

$userId = 5;

$place = Doctrine_Core::getTable('Place')->find(410);
$place->hardDelete();

exit;
$rows = Doctrine_Core::getTable(Place)->findAll();

$table = 'places';
foreach($rows as $row){
	
	$id = $row->id;
	
	$data = array (
	        'foreign_id'    => $id,
	        'foreign_table' => $table,
	        'number_votes'  => 0,
	        'total_points'  => 0,
	        'dec_avg'       => 0,
	        'whole_avg'     => 0
	);
	
	insert_row('publishable_ratings', $data);
	
	$data = array (
	        'foreign_id'    => $id,
	        'foreign_table' => $table,
	        'views'         => 0,
	        'unique_views'  => 0
	);
	
	insert_row('publishable_views', $data);

	
	}
