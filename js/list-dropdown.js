/*
$(document).ready(function() {
	$('#thumb-1').toggle(
		function () {
		$('.track_list_grid').slideDown('fast');
		}, 
		function () {
		$('.track_list_grid').slideUp('fast');
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
/*////////////// list dropdown ////////////////*/
$("#pull_down_1").toggle(function(e) {
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

/*////////////// grid dropdown ////////////////*/

$("#thumb-1").click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    // do your worst, i.e. slide down
    $(".track_list_grid").slideDown("fast");
});

$(document).click(function() {
    // slide up
    $(".track_list_grid").slideUp("fast");
});

$(".track_list_grid").click(function(e) {
    e.preventDefault();
    e.stopPropagation();
});

