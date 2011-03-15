	</div>
    
    <footer>
		<? include(LAY_ELEMS."footer/footer.php");?>
    </footer>
  </div> <!-- end of #container -->
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="<?=$JSE?>dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->

<? if(ENV_TYPE == ENV_TYPE_DEV){?>
  <!-- yui profiler and profileviewer - remove for production -->
  <script src="<?=$JSE?>profiling/yahoo-profiling.min.js"></script>
  <script src="<?=$JSE?>profiling/config.js"></script>
  <!-- end profiling code -->
<? }?>

<? if(ENV_TYPE == ENV_TYPE_LIVE){?>
	  <!-- change the UA-XXXXX-X to be your site's ID -->
	  <script>
	   var _gaq = [['_setAccount', '<?=$DOMAIN_CONFIG['g_analytics']?>'], ['_trackPageview']];
	   (function(d, t) {
		var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
		g.async = true;
		g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
	   })(document, 'script');
	  </script>
	<? }?>
</body>
</html>