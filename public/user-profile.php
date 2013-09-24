<? // MixeMe Band Profile

include('../config.php');
include('../global/header.php');?>
<div class="content container">

<? include ('user-profile/inc/user-top.php'); ?>

	<div class="row profile_container">
		<div class="profile_sidebar_container col-md-3">
			<? include ('user-profile/inc/user-sidebar.php');?>
		</div>
		<div class="profile_stage_container col-md-9">
			
			<? include ('user-profile/user-activity.php');?>
			
		</div>
	</div>

</div><!-- content -->
<? include('../global/footer.php'); ?>