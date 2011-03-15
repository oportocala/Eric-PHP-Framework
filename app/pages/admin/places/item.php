<? include("../!bootstrap.php") ?>
<?
$ClassName = "Place";

$tabs_path = 'item'.DS;
$tabs = array(
    'generic' => array(
        'name' => 'Generic',
        'file' => 'generic.php'
        ),
    'address' => array(
        'name' => 'Adresa',
        'file' => 'address.php'
        ),
    'contact' => array(
        'name' => 'Contact',
        'file' => 'contact.php'
        ),
    'categories' => array(
        'name' => 'Categorii &amp; Etichete',
        'file' => 'categories.php'
        ),
    'schedule' => array(
        'name' => 'Orar',
        'file' => 'schedule.php'
        ),
    'actions' => array(
        'name' => 'Actiuni',
        'file' => 'actions.php'
        )
    );

$pre_save = $tabs_path."pre.save.php";

include(PAGE_TEMPLATES.'item.php');