/* Author: Thomas Randle
   Date: 2012
*/

$(function(){
		
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

    $('.modal').on('hidden', function () {
		$('.youtube').each(function(){
			this.stopVideo();
		});
    })
	
});
