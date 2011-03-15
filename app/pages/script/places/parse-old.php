<?
include("../!bootstrap.php");
set_time_limit(0);
$userId = 5;
$old_table = "places_old";

/*
$place = Doctrine_Core::getTable('Place')->find(6);
$k = $place->Contact->toArray();
pr($k);
exit;
//*/
$places_streets_ids = array();
$my_streets = array(
	"George Baritiu" => 447, "Victor Babes"=>948, "Calea Motilor" => 85,  "Piata Stefan cel Mare" => 111, "Memorandumului"=>616, 
	"Ion Ratiu"=>525, "Piata Garii" => 103, "Marinescu" => 458, "Calea Dorobantilor" => 83, "Piezisa" => 744,
	"Herman Oberth" => 495, "Universitatii" =>927 , "Mihail Kogalniceanu" => 626, 
	"Bucuresti" => 81,
	"Hasdeu" => 217,
	"Somesului" => 851,
	"Calea Floresti" => 84,
	"Alexandru Vaida Voievod" => 143,
	"Varianta Manastur-Zorilor" => 424, "Brassai Samuel" => 223, "Sextil Puscariu" => 831,
	"Bolyai Ianos" => 219, "Inocentiu Micu Klein" => 515, "I. P. Voinesti" => 540,
	"Ion Creanga" => 529, "Gheorghe Sincai" => 461, "Jozef Attila" => 567,
	"Ploiesti" => 751, "E. Zola" => 990, "Berariei" => 207,
	"Ravasului" => 811, "Padurii" => 780, "David Ferenc" => 375,
	"Traian Mosoiu" => 443, "C. Daicoviciu" => 304, "Dambovitei" => 376,
	"Constanta" => 308, "Sigismund Toduta" => 834, "Petofi Sandor" => 741,
	"Stefan Octavian Iosif" => 1005, "Ion C. Bratianu" => 532, "Calarasilor" => 335,
	"Intre Lacuri" => 993, "Dr. Iuliu Hatieganu" => 550, "Fagetului" => 429,
	"Bd.21 Decembrie 1989" => 76, "Splaiul Independentei" => 112, "Serpuitoare" => 995,
	"Arges" => 165, "Constantin Brancusi" => 301, "Fabricii de Zahar" => 404,
	"Cotita" => 316, "Emil Racovita" => 388, "Cetatii" => 274,
        "S Avram Iancu" => 100,
        "E60 Cluj - Oradea" => 1008
	
	
	);
$rows = Doctrine_Core::getTable('Place')->findAll();
foreach($rows as $row){
	
	$old_slug = Doctrine_Core::getTable("RoutesRedirect")->findOneByNew($row['slug']);
	$old_slug = $old_slug['old'];
	$sth = $dbh->prepare("SELECT * FROM {$old_table} WHERE slug = '$old_slug'");

	$sth->execute();
	$old_row = $sth->fetch(PDO::FETCH_ASSOC);
	$places_streets_ids[$row['id']]['old_id'] = $old_row['id'];
	$sth = $dbh->prepare("SELECT name FROM geo_streets_old WHERE id = '{$old_row['street_id']}'");
	$sth->execute();
	$old_street = $sth->fetch(PDO::FETCH_ASSOC);
	//pr($old_street);
	$street_name = $old_street['name'];
	if(!$my_streets[$street_name]){
		$search = str_replace(array("Bulevardul ", "Calea ", "Aleea ","Piata ", "Prof.", "Gh."), "", $street_name);
		$search = trim($search);
		$q = Doctrine_Core::getTable('Street')->createQuery()->where("`name` LIKE ?", '%'.$search.'%');
		$new_street = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
		//if($new_street)
		//	pr($new_street);
		
		if(!count($new_street[0])){
			$table = Doctrine_Core::getTable('Street');
			$q = $table->createQuery();
			echo '--><span style="color:red">Not found</span>: '.$old_street['name']."<br/>";
		}else{
                    //echo "......Matched: ".$old_street['name']." to <strong>".$new_street[0]['name']."</strong>(".$new_street[0]['id'].")<br/>";
                    $places_streets_ids[$row['id']]['street_id'] =  $new_street[0]['id'];
                    }
	}else{
           // echo "......Matched: ".$old_street['name']." to <strong>".$my_streets[$street_name]."</strong><br/>";
            $places_streets_ids[$row['id']]['street_id'] =  $my_streets[$street_name];
            }
	//pr($new_street->toArray());
	
	}

echo serialize($places_streets_ids);