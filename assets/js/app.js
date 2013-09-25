/*////////////// artists following hover //////////////*/
$(document).ready(function() {
	$('#thumb-1').hover(
		function () {
		$('#meta-1').fadeIn('fast');
		}, 
		function () {
		$('#meta-1').fadeOut('fast');
		}
	);
// event hover
	$('#event-thumb').hover(
		function () {
		$('#meta-3').fadeIn('fast');
		}, 
		function () {
		$('#meta-3').fadeOut('fast');
		}
	);
// Mixtape hover
	$('#mixtape-thumb').hover(
		function () {
		$('#meta-4').fadeIn('fast');
		}, 
		function () {
		$('#meta-4').fadeOut('fast');
		}
	);
// public  band profile	
$(function() {
    $('.ajax-load').click(function() {
        var link = this.getAttribute('data-link');
        $(".band_profile_stage_container").load("/public/band-profile/band-"+link+".php");
        return false;
    });
});
// public user profile
$(function() {
    $('.ajax-load').click(function() {
        var link = this.getAttribute('data-link');
        $(".user-profile_stage_container").load("/public/user-profile/user-"+link+".php");
        return false;
    });
});
// band profile admin
$(function() {
    $('.ajax-load').click(function() {
        var link = this.getAttribute('data-link');
        $(".admin_band_stage_container").load("/admin/band-profile/band-"+link+".php");
        return false;
    });
});
// user profile admin
$(function() {
    $('.ajax-load').click(function() {
        var link = this.getAttribute('data-link');
        $(".admin_user_stage_container").load("/admin/user-profile/user-"+link+".php");
        return false;
    });
});

	$('.profile_post_input_wrapper').hover(
		function () {
			$('.profile_post_input_wrapper').animate({
				height: "104px"
			});
		}, 
		function () {
			$('.profile_post_input_wrapper').animate({
				height: "59px"
			});
		}
	);



});
/*////////////// friends following hover //////////////*/
$(document).ready(function() {
	$('#thumb-2').hover(
		function () {
		$('#meta-2').fadeIn('fast');
		}, 
		function () {
		$('#meta-2').fadeOut('fast');
		}
	);
});

/*////////////// Band Profile Sidebar //////////////*/


