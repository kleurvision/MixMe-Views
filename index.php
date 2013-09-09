<? // MixeMe Band Profile
<<<<<<< HEAD
include('config.php');
=======

define('URL','http://local.mixme.com');
define('ASSETS', URL.'/assets/');

>>>>>>> a91fd75d045fec5664a4370b3b895f0d5f682892
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