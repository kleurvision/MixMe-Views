<? // MixeMe Band Profile

include('../global/header.php');?>
<div class="content container">

<div class="row profile_top">
	<h1 class="admin_title pull-left">
		edit <span class="primary">profile</span>
	</h1>

</div>

	<div class="row admin_container">
		<div class="admin_sidebar_container col-md-3">
			<? include ('user-profile/user-profile-sidebar.php');?>
		</div>
		<div class="admin_user_stage_container col-md-9">
			<? include ('user-profile/user-profile-info.php');?>
		</div>
	</div>

</div><!-- content -->
<? include('../global/footer.php'); ?>