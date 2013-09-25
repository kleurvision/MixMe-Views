<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Band Profile Information</h2>
			</div>

			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#band-my-info" data-toggle="tab">My Information</a>
				</li>
				<li>
					<a href="#band-social-links" data-toggle="tab">Social Links</a>
				</li>
				<li>
					<a href="#band-artist-info" data-toggle="tab">Artist Info</a>
				</li>

			</ul>
				<div class="admin_stage_content following_stage">
					<div class="tab-content">

						<!-- ///////////////// my info tab content ///////////////// -->
						<div class="tab-pane  active" id="band-my-info">
							<!-- 1st row of thumbnails -->
							<div class="row profile-header-row">
								<h3 class="profile-headers">Basic Information</h3>
							</div>

							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="input-display-name" class="col-md-2 profile-form-label">Display Name:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-display-name" placeholder="Display Name">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-firstname" class="col-md-2 profile-form-label">First Name:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-firstname" placeholder="First Name">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-lastname" class="col-md-2 profile-form-label">Last Name:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-lastname" placeholder="Last Name">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-dob" class="col-md-2 profile-form-label">Date of Birth:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-dob" placeholder="Date of Birth">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-gender" class="col-md-2 profile-form-label">Gender:</label>
								    <div class="col-md-6">
								    	<select class="form-control" id="input-gender">
											<option>Male</option>
											<option>Female</option>
										</select>
								    </div>
								</div>
								<div class="form-group">
									<label for="input-country" class="col-md-2 profile-form-label">Country:</label>
								    <div class="col-md-6">
								    	<select class="form-control" id="input-country">
											<option>United States</option>
											<option>Canada</option>
											<option>France</option>
											<option>Germany</option>
											<option>Brazil</option>
										</select>
								    </div>
								</div>
								<div class="form-group">
									<label for="input-hometown" class="col-md-2 profile-form-label">Hometown:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-hometown" placeholder="Hometown">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-zip" class="col-md-2 profile-form-label">Zip Code:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-zip" placeholder="Zip Code">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-profile" class="col-md-2 profile-form-label">Profile:</label>
								    <div class="col-md-6">
								    	<select class="form-control" id="input-profile">
											<option>Display on Mixme (Public)</option>
											<option>Hide on Mixme (Private)</option>
										</select>
								    </div>
								</div>
								<div class="spacer">
								</div>
								<div class="row profile-header-row">
									<h3 class="profile-headers">Contact</h3>
								</div>

								<div class="form-group">
									<label for="input-email" class="col-md-2 profile-form-label">Email:</label>
								    <div class="col-md-6">
								    	<input type="email" class="form-control" id="input-email" placeholder="Email">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-cell" class="col-md-2 profile-form-label">Cell Number:</label>
								    <div class="col-md-6">
								    	<input type="email" class="form-control" id="input-cell" placeholder="Cell Number">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-carrier" class="col-md-2 profile-form-label">Cell Carrier:</label>
								    <div class="col-md-6">
								    	<select class="form-control" id="input-carrier">
											<option>AT &amp; T</option>
											<option>Sprint</option>
											<option>Verizon</option>
											<option>unspecified</option>
										</select>
								    </div>
								</div>

								<div class="row">
									<div class="btn add_profile_btn global_action_btn gradient">
										Save Changes
									</div>
								</div>	
								<div class="spacer">
								</div>

							</form>
							
						</div> <!-- end my info content -->

						<!-- /////////////////  Social links tab content ///////////////// -->
						<div class="tab-pane" id="band-social-links">
							<div class="row profile-header-row">
								<h3 class="profile-headers">Social Links</h3>
							</div>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="input-twitter" class="col-md-2 profile-form-label">Twitter:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-twitter" placeholder="Twitter"> 
								    </div>
								</div>
								<div class="form-group">
									<label for="input-facebook" class="col-md-2 profile-form-label">Facebook:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-facebook" placeholder="Facebook">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-google" class="col-md-2 profile-form-label">Google+:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-google" placeholder="Google+">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-linkedin" class="col-md-2 profile-form-label">Linkedin:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-linkedin" placeholder="Linkedin">
								    </div>
								</div>
								<div class="row">
									<div class="btn add_profile_btn global_action_btn gradient">
										Save Changes
									</div>
								</div>	
							</form>
							<div class="spacer">
							</div>
						</div>
						<!-- /////////////////  artist info tab content ///////////////// -->
						<div class="tab-pane" id="band-artist-info">
							<!-- 1st row of thumbnails -->
							<div class="row profile-header-row">
								<h3 class="profile-headers">Artist Information</h3>
							</div>

							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="input-display-name" class="col-md-2 artist-form-label">Your Influences:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-your-influences" placeholder="Your Influences">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-firstname" class="col-md-2 artist-form-label">Musical Genres:</label>
								    <div class="col-md-6">
								    	<input type="text" class="form-control" id="input-musical-genres" placeholder="Musical Genres">
								    </div>
								</div>

								<div class="spacer">
								</div>

								<div class="row profile-header-row">
									<h3 class="profile-headers">Contact Information</h3>
								</div>
								<div class="row">
									<div class="col-md-4">
											<h3 class="profile-headers band-contact-headers">Manager</h3>
										<div class="bcontact-form-group">
											<label for="input-display-name" class="">Name:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-manager-name" placeholder="Manager Name">
										    </div>
										</div>
									    <div class="bcontact-form-group">
											<label for="input-display-name" class="">Phone:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-manager-phone" placeholder="Manager Phone">
										    </div>
										</div>
										<div class="bcontact-form-group">
											<label for="input-display-name" class="">Email:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-manager-email" placeholder="Manager Email">
										    </div>
										</div>
									</div>
									<div class="col-md-4">
											<h3 class="profile-headers band-contact-headers">Bookings</h3>
										<div class="bcontact-form-group">
											<label for="input-display-name" class="">Name:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-booking-name" placeholder="Booking Name">
										    </div>
										</div>
									    <div class="bcontact-form-group">
											<label for="input-display-name" class="">Phone:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-booking-phone" placeholder="Booking Phone">
										    </div>
										</div>
										<div class="bcontact-form-group">
											<label for="input-display-name" class="">Email:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-booking-email" placeholder="Booking Email">
										    </div>
										</div>
									</div>
									<div class="col-md-4">
											<h3 class="profile-headers band-contact-headers">Publicist</h3>
										<div class="bcontact-form-group">
											<label for="input-display-name" class="">Name:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-publicist-name" placeholder="Publicist Name">
										    </div>
										</div>
									    <div class="bcontact-form-group">
											<label for="input-display-name" class="">Phone:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-publicist-phone" placeholder="Publicist Phone">
										    </div>
										</div>
										<div class="bcontact-form-group">
											<label for="input-display-name" class="">Email:</label>
										    <div class="">
										    	<input type="text" class="form-control" id="input-publicist-email" placeholder="Publicist Email">
										    </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="btn add_profile_btn global_action_btn gradient">
										Save Changes
									</div>
								</div>	

							</form>
							<div class="spacer">
							</div>
						</div>

					</div> <!-- end tab content -->
				</div> <!-- end stage content -->

			<div class="admin_stage_bottom">
			</div>
		</div>
	</div>
</div>
<!-- / End Content -->
