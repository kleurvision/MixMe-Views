<? // MixeMe Band Profile

include('../config.php');
include('../global/header.php');?>
<div class="content container">

<? include ('band-profile/inc/band-top.php'); ?>
<? include ('band-profile/inc/band-profile-coverphoto.php'); ?>

	<div class="row profile_container">
		<div class="profile_sidebar_container col-md-3">
			<? include ('band-profile/inc/band-sidebar.php');?>
		</div>
				
		<div class="band_profile_stage_container col-md-9">
			<? include ('band-profile/band-public-activity.php');?>
			
		</div>
	</div>

</div><!-- content -->
<? include('../global/footer.php'); ?>