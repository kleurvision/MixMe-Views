<? // MixeMe Band Profile

include('config.php');
include('assets/inc/header.php');?>
<div class="content container">
<!-- Top Bar -->
<? include ('assets/inc/admin/-top.php'); ?>
<!-- /End Top Bar -->
<!-- Content -->
	<div class="row admin_container">
		<div class="admin_sidebar_container col-md-3">
			<? include ('assets/inc/admin/albums-sidebar.php');?>
		</div>
		<div class="admin_stage_container col-md-9">
			<? include ('assets/inc/admin/albums-stage.php');?>
		</div>
	</div>
<!-- / End Content -->
</div>
<? include('assets/inc/footer.php'); ?>