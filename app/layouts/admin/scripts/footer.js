/* AUTOCOMPLETE */
$("input[autocomp]").each(	
	function(){
		/*
			Adds a hidden field after the autcomplete field
			Takes attributes from the field with autocomp
			and generates autocomplete logic and hidden field 
			for submission
		*/
		
		var $this  = $(this);
		var $autocomp_filed = $this;
		
		var name   = $this.attr('name');
		var value  = $this.attr('rel');
		var source = $this.attr('autocomp');
		
		$this.after("<input type='hidden' name='"+name+"' value='"+value+"' />");
		var $hidden_field = $this.next();
		
		$hidden_field.after(" <small><a href='javascript:void(0)'>Clear</a></small>");
		$hidden_field.next().click(function(){
			$hidden_field.val('');
			$autocomp_filed.val('');
			if($this.attr('clearCallback')){
				var callback = $this.attr('clearCallback');
				var f = eval(callback);
				if(f) f($this);
				}
			});
		$this.removeAttr('name');
		
		$this.click(function(){$this.select();});
		
		$(this).autocomplete({
				source: source,
				minLength: 2,
				select: function(event, ui) {
					var id = ui.item.id;
					$this.next().val(id);
					if($this.attr('callback')){
						var callback = $this.attr('callback');
						var f = eval(callback);
						if(f)
							f(id, ui.item);
						event.stopPropagation();
						}
					}
				}
			);
		});
				
				
/* END AUTOCOMPLETE */



/* CALENDAR */
$("input[type=calendar]").each(
	function(){
		var id   = $(this).attr('name')+"_dp";
		var date = $(this).val();
		
		var $this = $(this);
		$(this).hide().attr('id', id).after("<div></div>");
		
		var div = $(this).next();
			div.after("<small><a href='javascript:void(0)'>Clear</a></small>");
		
		var $clear = div.next();
			$clear.click(function(){
				div.datepicker( "setDate" , null);
				$this.val('');
				});
		
		div.datepicker({altField: "#"+id, altFormat:"yy-mm-dd", dateFormat:"yy-mm-dd"})
		
		if(date == '' || date == '0000-00-00') date = null;
		div.datepicker( "setDate" , date );
		});
		
/* END CALENDAR */


$("input[type=time]").timepicker();


/* BUTTON UI */
$(".buttonset-ui").each(
	function(){
		var $this = $(this);
		$this.buttonset();
		
		$("input", $this).each(
			function(){
				var $btn = $(this);
				
				if($btn.attr('icon')){
					var icon = $btn.attr('icon');
					$btn.button( "option", "icons", {primary:icon})
					}
				});
		
	});
$(".button-ui").each(function(){
	var $this = $(this);
	var icon;
	
	if($this.attr('icon')){
		icon = $this.attr('icon');
		}
	else
	if($this.hasClass("del"))
		icon = "ui-icon-circle-close";
	
	$this.button();
	if(icon){
		$this.button( "option", "icons", {primary:icon});
		}
	
	});
	
/* END BUTTON UI */
$(".del").click(
	function(){
		if(!confirm("Esti sigur ?")) return false;
		var $this = $(this);
		var table  = $this.attr('table');
		var id	   = $this.attr('rel');
		var action = $this.attr('action');
		var url = "?id="+id+"&action="+action+"&table="+table;
		
		document.location = url;
		return false;
	});
	
$(".confirm").click(
	function(){
		return confirm("Esti sigur ?");
		}
	);


$(".i18n-field a.i18n-btn").click(function(){
    var code = $(this).attr('rel');
    var field = $(this).closest('.i18n-field');
        field.find(".current").removeClass('current');
        field.find(".i18n-textarea-wrap[rel="+code+"]").addClass('current');
    
    });

$('input.submit-continue').click(function(){
    $("input[name='redirect_to_list']").val("false");

    });

/* LOG */
function l(t){
	window.console && console.log(t);
	}
