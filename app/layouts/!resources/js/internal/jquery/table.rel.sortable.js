/*
Takes tables with class rel_sortable, and appends paramters
order and dir
to the uri for processing by a list page
*/
$.extend({
  getUrlVars: function(){
    var vars = {}, hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars[hash[0]] = hash[1];
    }
    return vars;
  },
  getUrlVar: function(name){
    return $.getUrlVars()[name];
  }
});

$('table.rel_sortable').each(function(){

	var data 	= {order: 'id', dir:'asc'};
	var classes = {
			th:{
				sort: {up:'up', down:'down'},
				sortable: 'sortable'
				}
			};
	
	var $this  = $(this),
		$thead = $this.find('thead'),
		params = $.getUrlVars();
	
	if(params.order){
		data.order = params.order;
		}
	if(params.dir){
		data.dir = params.dir;
		}
		
	$thead.find('th').each(function(){
		var order,
			$th = $(this);
		
		if(order = $th.attr('rel')){
			
			$th.addClass(classes.th.sortable)
			if(order == data.order){
				var class = (data.dir == 'asc')?classes.th.sort.up:classes.th.sort.down;
				$th.addClass(class);
				}
				
			$th.click(function(){
				var send_params =  jQuery.extend(false, {}, params);
					send_params.order = order;
				
				if(order == data.order){
					send_params.dir  = (data.dir != 'asc')?'asc':'desc';
					}
				
				document.location = '?'+$.param(send_params);
				});
			}
		});
		
	});