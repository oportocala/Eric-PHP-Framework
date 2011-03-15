<script src="<?=$JSE?>modernizr-1.6.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?=$JSE?>jquery/jquery-1.4.2.min.js"%3E%3C/script%3E'))</script>

<!-- CUFON -->
<script src="<?=$JSE?>cufon/cufon.js" type="text/javascript"></script>
<script src="<?=$JSE?>cufon/Century_Gothic_400.font.js" type="text/javascript"></script>
<? if(is_array($comments_settings)){?>
	<script type="text/javascript" src="<?=ROOT?>include/js/dynamic/comments.js"></script>
<? }?>