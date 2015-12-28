/*jshint browser: true, devel: true, jquery: true*/
// remap jQuery to $ - needed in Wordpress
(function($){

	$(document).ready(function (){
		
	
	//-------------------- Remove empty p tags added by wordpress --------------------//
	$('p:empty').remove();
	
	
	
	
	//-------------------- Position Dropdown Menu --------------------//
	
	
	//Add dropdown class first level dropdown elements.
	//Positioning of dropdown menu relies on ONLY the first level of nested ul having the .dropdown class.
	$('#menu-primary-nav > li > ul').addClass('dropdown');
	
	
	//Function to determine dropdown menu elements and sizes.
	function dropdown_elements (container_element, element) {
		
		//Get dropdown container width and parent position.
		var container = container_element,
			container_width = container.width(),
			container_offset = container.offset(),
			container_left = container_offset.left,
			parent = $(element).offset(),
			parent_left = parent.left,
			final_left = parent_left - container_left;
		
		return { width: container_width,
				 final_left: final_left	
				};
	}
	
	
	//Function to position and size dropdown menu.
	function dropdown_position (hover_element) {
		
		//Get dropdown menu elements.
		var dropdown = $(hover_element),
			dropdown_1 = dropdown.children('.dropdown'),
			dropdown_2 = dropdown_1.children(),
			dropdown_2_items = dropdown_2.children(),
			parent = dropdown_elements($('#top'), dropdown);
		
		
		//Variables for setting menu height and width.
		var level_1_height = 100;//setting minimum height value to 100.	
		var children_width = 0,
			children_height = level_1_height;
			
		//Get width of children.
		for (var i = 0; i < dropdown_2.length; i++) {
			var child_width = dropdown_2.width();
			children_width = children_width + child_width;
		}
		
		//Get height of children.
		for (i = 0; i < dropdown_2_items.length; i++) {
			var child_height = dropdown_2_items.height();
			children_height = children_height + child_height;
		}
		
		var gutter = (parent.width - children_width) / 2,
			dropdown_height = level_1_height + children_height;
		
		//Set width, height and position of dropdown.
		$('#menu-primary-nav .dropdown').css({
			left: '-' + parent.final_left + 'px',
			width: (parent.width - gutter) + 'px',
			height: dropdown_height + 'px',
			'padding-left': gutter + 'px'
   		});
			
	}
	
	
	//Style dropdown menu when parent is in hover state.
	$('#menu-primary-nav > li').hover( 
		function() {
			dropdown_position(this);
			},
					
		function() {
			$('.dropdown').css({
        		left: '-9999px',
   			});		
			}			
	);
	
	
	//changes to occur on resize
	$(window).resize(function(){
		$('#menu-primary-nav > li').hover( function(){
			dropdown_position(this);
			});
		
		});
	
	
	});// end document ready

})(window.jQuery);