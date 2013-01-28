/* Author: Thomas Randle
 Date: 2012
 */

$(function() {

	$("#amount").change(function(e) {

		if ($("#amount").val() == "other") {
			$("#other_amount").show();
		} else {
			$("#other_amount").hide();
		}
	}).trigger("change");

	$('.modal').on('hidden', function() {
		$('.modal-backdrop').remove();
		$(this).find('.youtube').each(function() {
			if ( typeof this.stopVideo == 'function') {
				this.stopVideo();
			}
		});

	})
	/* ppau tv countdown */
	var nextShow = new Date("2013-02-03T21:00:00.000+" + dst_offset);

	$('div#clock').countdown(nextShow, function(event) {
		$this = $(this);
		switch(event.type) {
			case "seconds":
			case "minutes":
			case "hours":
			case "days":
			case "weeks":
			case "daysLeft":
				$this.find('span#' + event.type).html(event.value);
				break;
			case "finished":
				$this.fadeTo('slow', .5);
				break;
		}
	});

});
