<? include("head.php")?>
  
<body>
<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
	<? include("side.php")?>
	
	<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			
			<!-- Flash Messages -->
			<? if(FLASH::has('errors')){?>
				<div class="notification error png_bg">
					<a class="close" href="#"><img alt="close" title="Close this notification" src="<?=$img_path?>icons/cross_grey_small.png"></a>
					<div>
						<h3>Errors</h3>
						<? $errors = FLASH::get('errors');?>
						<ul>
							<? foreach($errors as $er){?>
								<li><?=$er?></li>
							<? }?>
						</ul>
					</div>
				</div>
				
			<? }?>
			
			
			<? if(FLASH::has('information')){?>
				<div class="notification information png_bg">
					<a class="close" href="#"><img alt="close" title="Close this notification" src="<?=$img_path?>icons/cross_grey_small.png"></a>
					<div>
						<?=FLASH::get('information')?>
					</div>
				</div>
			<? }?>
			
			
			<? if(FLASH::has('success')){?>
				<div class="notification success png_bg">
					<a class="close" href="#"><img alt="close" title="Close this notification" src="<?=$img_path?>icons/cross_grey_small.png"></a>
					<div>
						<?=FLASH::get('success')?>
					</div>
				</div>
			<? }?>