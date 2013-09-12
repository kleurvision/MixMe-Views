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


$('#pull_down_1').click(function() {
  $('.track_list').slideToggle('slow', function() {

  });
    
});



/*////////////// grid dropdown ////////////////*/

$('#thumb-1').click(function() {
  $('.track_list_grid').slideToggle('slow', function() {
   // $('.album_grid_thumb').fadeTo('fast', 0.3);

    // Animation complete.
  });
});


