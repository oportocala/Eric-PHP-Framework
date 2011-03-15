<?
$_layout 		= $layout;
$_layout_path 	= WWW_LAYOUT;

$css_path = $_layout_path."css/";
$js_path  = $_layout_path."scripts/";
$img_path = $_layout_path."images/";

define('ROOT', WWW_ROOT); // just this once
$js_lib_path = WWW_ROOT."jse/";
$icons_path  = WWW_ROOT."icn/function/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>clujnights.ro - Administration Area</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="<?=$css_path?>reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?=$css_path?>style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?=$css_path?>invalid.css" type="text/css" media="screen" />	
		
        
        <link rel="stylesheet" href="<?=$css_path?>main.css" type="text/css" media="screen" />	
        
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="<?=$css_path?>blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="<?=$css_path?>red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?=$css_path?>ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
  		<script>
		var LAYOUT_ROOT = "<?=WWW_LAYOUT?>";
		</script>
		<!-- jQuery -->
		<script type="text/javascript" src="<?=$js_lib_path?>jquery/jquery-1.4.2.min.js"></script>
		

        
       
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="<?=$js_path?>DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>