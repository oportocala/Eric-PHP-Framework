
	
	//Sidebar Accordion Menu:
		
		$("#main-nav li ul").hide(); // Hide all sub menus
		$("#main-nav li a.current").parent().find("ul").show();
		
		//.slideToggle("slow"); // Slide down the current menu item's sub menu
		
		$("#main-nav li a.nav-top-item").click( // When a top menu item is clicked...
			function () {
				$(this).parent().siblings().find("ul").slideUp("normal"); // Slide up all sub menus except the one clicked
				$(this).next().slideToggle("normal"); // Slide down the clicked sub menu
				return false;
			}
		);
		
		$("#main-nav li a.no-submenu").click( // When a menu item with no sub menu is clicked...
			function () {
				window.location.href=(this.href); // Just open the link instead of a sub menu
				return false;
			}
		); 

    // Sidebar Accordion Menu Hover Effect:
		
		$("#main-nav li .nav-top-item").hover(
			function () {
				$(this).stop().animate({ paddingRight: "25px" }, 200);
			}, 
			function () {
				$(this).stop().animate({ paddingRight: "15px" });
			}
		);

    //Minimize Content Box
		
		$(".content-box-header h3").css({ "cursor":"s-resize" }); // Give the h3 in Content Box Header a different cursor
		$(".closed-box .content-box-content").hide(); // Hide the content of the header if it has the class "closed"
		$(".closed-box .content-box-tabs").hide(); // Hide the tabs in the header if it has the class "closed"
		
		$(".content-box-header h3").click( // When the h3 is clicked...
			function () {
			  $(this).parent().next().toggle(); // Toggle the Content Box
			  $(this).parent().parent().toggleClass("closed-box"); // Toggle the class "closed-box" on the content box
			  $(this).parent().find(".content-box-tabs").toggle(); // Toggle the tabs
			}
		);

    // Content box tabs:
		var tab_class = "default-tab";
		var hash_tab   = location.hash;
		if(hash_tab){
			var tab_id    = "#tab_" + hash_tab.substr(1);
			$("."+tab_class).removeClass(tab_class);
					
			$(tab_id).addClass(tab_class);
			$("a[href="+tab_id+"]").addClass(tab_class);
			}
		
		
		$content_box = $(".content-box");
		$content_tabs = $content_box.find('.tab-content');
		$content_tabs.hide();
		
		var $default_a   = $('a.default-tab');
		var $default_tab = $('div.default-tab');
		
			$default_a.addClass('current');
			$default_tab.show();
		
		if($default_a[0])
			$.cookie("current_tab", $default_a.attr('href').substr(5), {expires:1});

		$('ul.content-box-tabs li a').click(function(){
			var $this = $(this);
			$this.parents('ul').find('a').removeClass('current');
			$this.addClass('current');
			
			var current_tab = $($this.attr('href'));
				current_tab.show();
				current_tab.siblings('.tab-content').hide();
			
			$.cookie("current_tab", $this.attr('href').substr(5), {expires:1});
			document.location = '#' + $this.attr('href').substr(5);
			return false;
			});

    //Close button:
		
		$(".close").click(
			function () {
				$(this).parent().fadeTo(400, 0, function () { // Links with the class "close" will close parent
					$(this).slideUp(400);
				});
				return false;
			}
		);

    // Alternating table rows:
		
		$('tbody tr:even').addClass("alt-row"); // Add class "alt-row" to even table rows

    // Check all checkboxes when the one in a table head is checked:
		
		$('.check-all').click(
			function(){
				$(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked'));   
			}
		)
$(document).ready(function(){
    // Initialise Facebox Modal window:
		
		$('a[rel*=modal]').facebox(); // Applies modal window to any link with attribute rel="modal"

    // Initialise jQuery WYSIWYG:
		
		$(".wysiwyg").wysiwyg(); // Applies WYSIWYG editor to any textarea with the class "wysiwyg"

});
  
  
  