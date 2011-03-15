<? require("!bootstrap.php");
$place = Doctrine_Core::getTable('Place')->find($_GET['id']);
?>
<? require(LAYOUT_PATH."header.php");?>
<h1><?=$place->name?></h1>

<a href="<?=$place->url()?>">view</a>
<br/>
Telephone: <?=$place->Contact[0]->value?>
<? $place->incViews(); ?>
<? require(LAYOUT_PATH."footer.php");?>