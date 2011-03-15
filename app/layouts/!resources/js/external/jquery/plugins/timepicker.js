/* jQuery timepicker
 * replaces a single text input with a set of pulldowns to select hour, minute, and am/pm
 *
 * Copyright (c) 2007 Jason Huck/Core Five Creative (http://www.corefive.com/)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) 
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version 1.0
 */

(function($){
	jQuery.fn.timepicker = function(){
		this.each(function(){
			// get the ID and value of the current element
			var i = this.id;
			var v = $(this).val();
			var disabled = $(this).attr("disabled");
			var disabled_tag = disabled?"disabled='disabled'":"";
			// the options we need to generate
			var hrs = new Array('','01','02','03','04','05','06','07','08','09','10','11','12');
			var mins = new Array('','00','15','30','45');
			var ap = new Array('','am','pm');
			
			// default to the current time
			var d = new Date;

			
			var h,m,p;
			// adjust hour to 12-hour format
			if(h > 12) h = h - 12;
				
			// round minutes to nearest quarter hour
			for(mn in mins){
				if(m <= parseInt(mins[mn])){
					m = parseInt(mins[mn]);
					break;
				}
			}
			
			// increment hour if we push minutes to next 00
			if(m > 45){
				m = 0;
				
				switch(h){
					case(11):
						h += 1;
						p = (p == 'am' ? 'pm' : 'am');
						break;
						
					case(12):
						h = 1;
						break;
						
					default:
						h += 1;
						break;
				}
			}

			// override with current values if applicable
			
			if(v.length){
				
				h = parseInt(v.substr(0,2));
				console.log(h);
				if(h){
					m = parseInt(v.substr(3,2));
					p = 'am';
					if(h>12){
						p = 'pm';
						h-=12;
						}
					if(h < 10){ h = "0"+h}
					}
			}
			
			
			// build the new DOM objects
			var name   = $(this).attr('name');
			var id     = "timepicker_"+name;
			var output = '<div id="'+id+'">';
			
			output += '<select '+disabled_tag+' class="h">';				
			for(hr in hrs){
				output += '<option value="' + hrs[hr] + '"';
				if(hrs[hr] == h) 
					output += " selected='selected'";
				output += '>' + hrs[hr] + '</option>';
			}
			output += '</select>';
	
			output += '<select '+disabled_tag+' class="m">';				
			for(mn in mins){
				output += '<option value="' + mins[mn] + '"';
				if(parseInt(mins[mn]) == m) output += ' selected';
				output += '>' + mins[mn] + '</option>';
			}
			output += '</select>';				
	
			output += '<select '+disabled_tag+' class="p">';				
			for(pp in ap){
				output += '<option value="' + ap[pp] + '"';
				if(ap[pp] == p) output += ' selected';
				output += '>' + ap[pp] + '</option>';
			}
			output += '</select>';
			
			output += '<small> <a href="javascript:void(0)">Clear</a></small>';
							
			output += '</div>';
			// hide original input and append new replacement inputs
			$(this).hide();
			$(this).after(output);
			
			
			var $this = $(this);
			
			var $container = $(this).next();
			
			$("a", $container).click(function(){
				$(".h, .m, .p", $container).val('');
				$this.val('');
				});
			
			$("select", $container).change(
				function(){
					
					var h = $(".h", $container).val();
					var m = $(".m", $container).val();
					var p = $(".p", $container).val();
					
					if(!h || !m || !p)
						v = '';
					else{			
						if(p == "pm")
							h = Number(h)+ 12;
						var v = h + ':' + m;
						}
					$this.val(v);
					});
			
		});
		
		return this;
	};
})(jQuery);



/* SVN: $Id: jquery.timepicker.js 456 2007-07-16 19:09:57Z Jason Huck $ */
