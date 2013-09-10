$(document).ready(function() {
	$('#thumb-1').hover(
		function () {
		$('#meta-1').fadeIn('fast');
		}, 
		function () {
		$('#meta-1').fadeOut('fast');
		}
	);
$(function() {
    $('.ajax-load').click(function() {
        var link = this.getAttribute('data-link');
        $(".profile_stage_container").load("/assets/inc/profile/band-"+link+".php");
        return false;
    });
});
});
