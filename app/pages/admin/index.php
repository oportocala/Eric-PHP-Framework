<?
include("!bootstrap.php");
?>
<? include(LAYOUT_PATH."header.php")?>
<h2>Bine ai venit, <?=$admin->username?></h2>
<p id="page-intro">Ce ai vrea sa faci?</p>

<ul class="shortcut-buttons-set"> <!-- Replace the icons URL's with your own -->
				
	<li><a class="shortcut-button" href="event.php"><span>
		<img src="<?=$icons_path?>add_48.png" alt="icon" /><br />
		Adauga eveniment
	</span></a></li>
	
	<li><a class="shortcut-button" href="#"><span>
		<img src="<?=$icons_path?>spanner_48.png" alt="icon" /><br />
		Setari
	</span></a></li>
	
	<li><a class="shortcut-button" href="#"><span>
		<img src="<?=$icons_path?>mail_48.png" alt="icon" /><br />
		Inbox
	</span></a></li>
	
	<li><a class="shortcut-button" href="#"><span>
		<img src="<?=$icons_path?>mail_spam_48.png" alt="icon" /><br />
		Contact Admin
	</span></a></li>
	
</ul><!-- End .shortcut-buttons-set -->
<div class="clear"></div> <!-- End .clear -->


<? include(LAYOUT_PATH."footer.php")?>