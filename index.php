<? // MixeMe Band Profile

define('URL','http://mixme.com');
define('ASSETS', URL.'/assets/');

include('assets/inc/header.php');?>
<div class="content container">

<? include ('assets/inc/profile/band-top.php'); ?>

	<div class="row profile_container">
		<div class="profile_sidebar_container col-md-3">
			<? include ('assets/inc/profile/band-sidebar.php');?>
		</div>
		<div class="profile_stage_container col-md-9">
			<? include ('assets/inc/profile/band-stage.php');?>
		</div>
	</div>

</div><!-- content -->
<? include('assets/inc/footer.php'); ?>