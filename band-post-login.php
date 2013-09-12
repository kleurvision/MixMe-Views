<? // MixeMe Band Profile

include('config.php');
include('assets/inc/header.php');?>
<div class="content container">

<? include ('assets/inc/profile/band-recommendations-bar.php'); ?>

	<div class="row profile_container">
		<div class="profile_sidebar_container col-md-3 pull-right login_sidebar_container">
			<? include ('assets/inc/profile/band-post-login-sidebar.php');?>
		</div>
		<div class="col-md-9 login_container">
			
			<? include ('assets/inc/profile/band-stage.php');?>
			
		</div>
	</div>

</div><!-- content -->
<? include('assets/inc/footer.php'); ?>