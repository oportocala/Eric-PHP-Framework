<?
/* Input:
 *
 * Required:
 *  $ClassName - Doctrine_Record class name
 *  $tabs_path - string
 *  $tabs - array
 *
 */


include(PAGE_TEMPLATES.'item/table.php');
include(PAGE_TEMPLATES.'item/defaults.php');
include(PAGE_TEMPLATES.'item/save.php');
?>
<? include(LAYOUT_PATH."header.php")?>
<h2><?=$h2?></h2>
<p id="page-intro">Editare detalii</p>
<div class="clear"></div>

<div class="content-box">

	<div class="content-box-header">

		<h3>Editare detalii</h3>

		<ul class="content-box-tabs">
                        <?  $i = 0;
                        foreach($tabs as $tabid=>$tab){?>
                            <li><a href="#tab_<?=$tabid?>" class="<?=$i==0?'default-tab':''?>"><?=$tab['name']?></a></li>

                        <? $i++;} ?>
		</ul>

		<div class="clear"></div>
	</div>

	<div class="content-box-content">

		<form method="post" action="<?=CURRENT_URI?>" enctype="multipart/form-data">
                        <input type="hidden" name="redirect_to_list" value="<?=$redirect_to_list?'true':'false';?>"/>

                         <?  $i = 0;
                        foreach($tabs as $tabid=>$tab){?>
                            <div class="tab-content <?=$i==0?'default-tab':''?>" id="tab_<?=$tabid?>">
				<? include(CURRENT_PAGE_PATH.$tabs_path.$tab['file'])?>
                            </div>
                        <? $i++;} ?>
                        
			<p>
                            <input class="button bluebutton submit-continue" type="submit" value="Submit & Continue" />
                            <input class="button" type="submit" value="Submit" />
			</p>
		</form>

	</div>


</div>
<? include(LAYOUT_PATH."footer.php")?>