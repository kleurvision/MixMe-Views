<? // MixeMe Band Profile

include('config.php');
include('global/header.php');?>
<div class="content container">

<? include ('public/band-profile/inc/band-top.php'); ?>

	<div class="row profile_container">
		<div class="profile_sidebar_container col-md-3">
			<? include ('public/band-profile/inc/band-sidebar.php');?>
		</div>
		<div class="profile_stage_container col-md-9">
			<? include ('public/band-stage.php');?>
		</div>
	</div>

</div><!-- content -->
<? include('global/footer.php'); ?>