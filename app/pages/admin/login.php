<? 
include("!bootstrap.php");

if(count($_POST)){
	
	
	$success  	= $admin->login($_POST);
	
	$last_page 	= $_SESSION[LAST_PAGE_CT_NAME];
	$location 	= $last_page?$last_page:"index.php";
	
	if($success) redirect($location);
	
	$error_string = "Username sau parola incorecta!";
	$error = (!$success)?$error_string:"Success!";
	}

?>
<? include(LAYOUT_PATH."head.php")?>
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="<?=$img_path?>logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="?" method="post">
				
					<div class="notification information png_bg <?=$error?"":"hide"?>">
						<div>
							<?=$error?>
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="username"/>
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password"/>
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
  
</html>