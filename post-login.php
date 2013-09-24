<? // MixeMe Band Profile

include('config.php');
include('global/header.php');?>
<div class="content container">

<? include ('post-login-inc/post-login-recommend-bar.php'); ?>

	<div class="row profile_container">
		<div class="profile_sidebar_container col-md-3 pull-right login_sidebar_container">
			<? include ('post-login-inc/post-login-sidebar.php');?>
		</div>
		<div class="col-md-9 login_container">
			
			<? include ('public/band-profile/activity.php');?>
			
		</div>
	</div>

</div><!-- content -->
<? include('global/footer.php'); ?>