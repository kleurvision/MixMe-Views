<? // MixeMe Band Profile

include('../global/header.php');?>
<div class="content container">

<div class="row profile_top">
	<h1 class="admin_title pull-left">
		edit <span class="primary"> band profile</span>
	</h1>
	<div class="edit-band-dropdown-btn pull-left" id="edit-band-btn"><i class="icon-caret-down dropdown-icon"></i></div>
</div>
<div class="dropdown-wrapper">
	<img src="<?=ASSETS;?>/img/dropdown_arrow.png" class="dropdown-box-arrow">
	<div class="edit-dropdown">
		<div class="row edit-profile-row">
			<div class="col-md-4">
				<img src="<?=ASSETS;?>/img/edit_band_dropdown_example.jpg" class="dropdown-img">
			</div>
			<div class="col-md-8">
				<p class="dropdown-title">Breaking Even</p>
				<button type="button" class="btn dropdown-btn">Edit Profile</button>
			</div>
		</div>

		<div class="row edit-profile-row">
			<div class="col-md-4">
				<img src="<?=ASSETS;?>/img/band_temp.jpg" class="dropdown-img">
			</div>
			<div class="col-md-8">
				<p class="dropdown-title">Dance Gavin Dance</p>
				<button type="button" class="btn dropdown-btn">Edit Profile</button>
			</div>
		</div>
	</div>
</div>


	<div class="row admin_container">
		<div class="admin_sidebar_container col-md-3">
			<? include ('band-profile/band-profile-sidebar.php');?>
		</div>
		<div class="admin_band_stage_container col-md-9">
			<? include ('band-profile/band-profile-info.php');?>
		</div>
	</div>

</div><!-- content -->
<? include('../global/footer.php'); ?>