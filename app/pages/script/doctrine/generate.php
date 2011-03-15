<? 

include('../!bootstrap.php');

$models_folder   = "models";
$schemas_folder  = "schemas";
$fixtures_folder = "fixtures";

$package = "places";
if($package){
	$schemas_folder  .= DS.$package.DS;
	$fixtures_folder .= DS.$package.DS;
	}
$yaml_options = array(
    'generateTableClasses' => true,
    'generateBaseClasses'  => false

    );
Doctrine_Core::generateModelsFromYaml($schemas_folder, $models_folder, $yaml_options);
//Doctrine_Core::createTablesFromModels($models_folder);
//Doctrine_Core::loadData($fixtures_folder);