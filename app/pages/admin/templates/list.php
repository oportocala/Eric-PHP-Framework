<?

/* Input */
/*
Required:
	$ClassName - Doctrine_Record class name

Optional:
	$fields - visible fields
	$hidden_fields - fields for hiding
	$searchable - boolean
	
	$actions - primary actions
	$actions_merge - secondary actions
	
	$h2, $h3 - title
*/
SESSION::put('LIST_URI', CURRENT_URI);

if(!$ClassName){
	echo "[Fatal Error] Using List Template: please specify \$ClassName.";
	exit;
	}

$table = Doctrine_Core::getTable($ClassName);

include("list/defaults.php");
include("list/actions.php");
include("list/fields.php");
include("list/query.php");

?>
<? include(LAYOUT_PATH."header.php")?>
<h2><?=$h2?></h2>

<div class="content-box">
	<div class="content-box-header">
		<h3><?=$h3?></h3>
                <? if(is_array($table->filters)){
                    include(LAYOUT_PATH."filters.php");
                    }?>

                <? if($searchable){
			include(LAYOUT_PATH.'search.php');
			}?>
               
               <div class="clear"></div>
	</div>
	<div class="content-box-content">
		
		<? include(LAYOUT_PATH."paginator.php") ?>
		<? include(LAYOUT_PATH."insert.php") ?>
		
		<table class="rel_sortable">
			<thead>
				<tr>
					<? foreach($fields as $field){?>
						<th rel="<?=$field['name']?>"><?=ucwords($field['title'])?></th>
					<? }?>
					<? if(is_array($actions)){
						$width = count($actions)*20;
						?>
						<th width="<?=$width?>">Actions</th>
					<? }?>
				</tr>
			</thead>
			
			<tbody>


			<? if(count($rows)):?>
				<? foreach($rows as $row):?>
				
				<tr>
					<? foreach($fields as $field){
						?>
						<td>
							<? if($field['edit_action']):?>
								<a href="<?=parse_action($actions, 'edit', $row['id'])?>" title="Edit">
							<? endif;?>
								
							 <? if(in_array($field['name'], $relation_fields)):?>
                                                            <a href="?filter=on&filter_type=<?=$field['name']?>&filter_value=<?=$row->$field['name']?>">
                                                        <? endif;?>

                                                            <?=$row->$field['retreive']?>

                                                        <? if(in_array($field['name'], $relation_fields)):?>
                                                            </a>
                                                        <? endif;?>
								
							<? if($field['edit_action']):?>
								</a>
							<? endif;?>
						</td>
					<? }?>
					<? if(is_array($actions)):?>
						<td>
							<? foreach($actions as $action):?>
								<a href="<?=parse_action($actions, $action['name'], $row['id'])?>" title="<?=$action['title']?>" class="<?=$action['class']?>">
									<img src="<?=ICON?><?=$action['icon']?>.png" alt="<?=$action['title']?>" />
								</a>
							<? endforeach;?>
						</td>
					<? endif;?>
				</tr>
				
				<? endforeach;?>
			<? else: ?>
				<tr>
					<td colspan="<?=count($fields)+1?>">
						No records found.
					</td>
				</tr>
			<? endif;?>
			</tbody>
			
		</table>
		
		<? include(LAYOUT_PATH."paginator.php");?>
		<? include(LAYOUT_PATH."insert.php") ?>
	</div> <!-- End .content-box-content -->
</div>
	
<? include(LAYOUT_PATH."footer.php")?>