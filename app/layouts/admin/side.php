<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
	<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
  
	<!-- Logo (221px wide) -->
	<a href="<?=$pages_path?>"><img id="logo" src="<?=$img_path?>logo.png" alt="Simpla Admin logo" /></a>
  
	<? include("welcome.php")?>   
	
	<? include("nav.php")?>
	
	<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
		
		<h3>3 Messages</h3>
	 
		<p>
			<strong>17th May 2009</strong> by Admin<br />
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
			<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
		</p>
	 
		<p>
			<strong>2nd May 2009</strong> by Jane Doe<br />
			Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
			<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
		</p>
	 
		<p>
			<strong>25th April 2009</strong> by Admin<br />
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
			<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
		</p>
		
		<form action="" method="post">
			
			<h4>New Message</h4>
			
			<fieldset>
				<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
			</fieldset>
			
			<fieldset>
			
				<select name="dropdown" class="small-input">
					<option value="option1">Send to...</option>
					<option value="option2">Everyone</option>
					<option value="option3">Admin</option>
					<option value="option4">Jane Doe</option>
				</select>
				
				<input class="button" type="submit" value="Send" />
				
			</fieldset>
			
		</form>
		
	</div> <!-- End #messages -->
	
</div></div> <!-- End #sidebar -->