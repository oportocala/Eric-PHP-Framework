<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?=WWW_ROOT.APP_DIR.RS.INC_DIR.RS.LIB_DIR.RS?>external/tiny_mce/tiny_mce_gzip.js"></script>
<script type="text/javascript">
tinyMCE_GZ.init({
	plugins : 'file_browser,flash,inlinepopups,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,visualchars,nonbreaking,xhtmlxtras',
	themes : 'simple,advanced',
	languages : 'en',
	disk_cache : true,
	debug : false
});
</script>
<script language="javascript" type="text/javascript">
var APP_DIR = '<?=WWW_ROOT?>';

tinyMCE.init({
	mode : "textareas"
	, editor_selector : "mceEditor"
	, theme : "advanced"
	, plugins : "filemanager,imagemanager,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,"
	, theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect,|,styleprops"
	, theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,upload,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor"
	, theme_advanced_buttons3 : "insertimage,insertfile"
	, theme_advanced_toolbar_location : "top"
	, theme_advanced_toolbar_align : "left"
	, theme_advanced_statusbar_location : "bottom"
	, theme_advanced_resizing : true
	, extended_valid_elements : "hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]"
	, relative_urls : false
	, width: '400'
	, height: 400
	, document_base_url: '<?=WWW_ROOT?>'
	, body_id: 'content'
	, setup: function (ed){
		
	}
});
</script>