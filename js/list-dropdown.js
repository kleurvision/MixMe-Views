/*$(document).ready(function() {
	$('#pull_down_1').click(
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
*/
$("#pull_down_1").click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    // do your worst, i.e. slide down
    $(".track_list").slideDown("fast");
});

$(document).click(function() {
    // slide up
    $(".track_list").slideUp("fast");
});

$(".track_list").click(function(e) {
    e.preventDefault();
    e.stopPropagation();
});
