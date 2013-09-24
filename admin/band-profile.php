<? // MixeMe Band Profile

include('../global/header.php');?>
<div class="content container">

<div class="row profile_top">
	<h1 class="admin_title pull-left">
		edit <span class="primary"> band profile</span>
	</h1>

</div>

	<div class="row admin_container">
		<div class="admin_sidebar_container col-md-3">
			<? include ('band-profile/band-profile-sidebar.php');?>
		</div>
		<div class="admin_stage_container col-md-9">
			<? include ('band-profile/band-profile-info.php');?>
		</div>
	</div>

</div><!-- content -->
<? include('../global/footer.php'); ?>