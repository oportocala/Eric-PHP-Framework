<?
if(!$pager_data_loaded){
	$get = $_GET;
	unset($get['page']);
	
	$base_url = "?".http_build_query($get)."&page=";
	
	$pager_range = new Doctrine_Pager_Range_Sliding(
				array(
					'chunk' => 5
					)
				);
				
	$pagerLayout = new Doctrine_Pager_Layout(
		 $pager,
		 $pager_range,
		 $base_url.'{%page_number}'
		);
	$pagerLayout->setTemplate('<a href="{%url}" class="number">{%page}</a>');
	$pagerLayout->setSelectedTemplate('<a href="{%url}" class="number current">{%page}</a>');
	
	$first_url = $base_url.$pager->getFirstPage();
	$last_url  = $base_url.$pager->getLastPage();
	$next_url  = $base_url.$pager->getNextPage();
	$prev_url  = $base_url.$pager->getPreviousPage();
	$pager_data_loaded= true;
	}
?>


<div class="pagination">
    <a href="<?=$first_url?>" title="First Page">&laquo; First</a>
    <a href="<?=$prev_url?>" title="Previous Page">&laquo; Previous</a>
    
	<? $pagerLayout->display();?>
	
    <a href="<?=$next_url?>" title="Next Page">Next &raquo;</a>
    <a href="<?=$last_url?>" title="Last Page">Last &raquo;</a>
</div>
<div class="clear"></div>

