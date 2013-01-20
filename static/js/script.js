/* Author: Thomas Randle
   Date: 2012
*/

$(function(){
	/* some page wireups */
	$("ul.sf-menu").superfish();
			
	/* set form field focus */
	var form = $('[data-first-field]').first();
	var field_id = "#" + $(form).attr('data-first-field');
	$(field_id).focus();
	
	/*
	 * Toggle a checkbox value
	 */
	$.fn.toggle_checkbox = function() {
		this.attr('checked', !this.attr('checked'));
	}
	
	/* donation hover */
	
	
	$("#amount").change(function(e){
		
		if ( $("#amount").val() == "other" )
		{
			$("#other_amount").show();
		}
		else
		{
			$("#other_amount").hide();
		}
	}).trigger("change");
	
});
