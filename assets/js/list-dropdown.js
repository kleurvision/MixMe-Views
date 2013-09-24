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

/*////////////// User messages tabs ////////////////*/
$('#inbox a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#sent a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#archived a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#trashed a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/*//////////////  user following tabs ////////////////*/
$('#artists-following a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#friends-following a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#message-tooltip').tooltip();
$('#unfollow-tooltip').tooltip();

/*////////////// user profile info tabs ////////////////*/
$('#piggy-bank a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#my-info a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#social-links a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/*////////////// user profile images tabs ////////////////*/
$('#profile-image a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#cover-image a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/*////////////// band profile info tabs ////////////////*/
$('#band-my-info a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#band-social-links a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#band-artist-info a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#band-piggy-bank a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/*////////////// band profile images tabs ////////////////*/
$('#band-profile-image a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#band-cover-image a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/*////////////// Band messages tabs ////////////////*/
$('#band-inbox a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#band-sent a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#band-archived a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#band-trashed a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})



