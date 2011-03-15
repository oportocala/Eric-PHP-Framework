        	<!-- jQuery UI -->
        	<script type="text/javascript" src="<?=$js_lib_path?>jquery/ui-1.8.2/js/jquery-ui-1.8.2.custom.min.js"></script>
			<link rel="stylesheet" href="<?=$js_lib_path?>jquery/ui-1.8.2/css/smoothness/jquery-ui-1.8.2.custom.css" type="text/css" media="screen" /> 
			
			<script src="<?=WWW_ROOT?>jsi/jquery/table.rel.sortable.js"></script>
			
			<?
			$jquery_plugin_path = $js_lib_path."jquery/plugins/";
			?>
			
			<script src="<?=$jquery_plugin_path?>timepicker.js"></script>
			<script src="<?=$jquery_plugin_path?>cookie.js"></script>
			
			<script src="<?=$js_path?>simpla.jquery.configuration.js"></script>
			<script src="<?=$js_path?>footer.js"></script>
			<script src="<?=$js_path?>facebox.js"></script>
			<script src="<?=$js_path?>jquery.wysiwyg.js"></script>
			
			<? if($load_gogole_maps_js){?>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&region=RO"></script>
			<? }?>
            <div id="footer">
				<small>
						&#169; Copyright <?=date("Y")?> clujnights.ro | Powered by <a href="#">Webeatall</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
	</body>  
</html>
