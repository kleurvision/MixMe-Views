<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Profile Information</h2>
			</div>

			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#my-info" data-toggle="tab">My Information</a>
				</li>
				<li>
					<a href="#social-links" data-toggle="tab">Social Links</a>
				</li>
				<li>
					<a href="#piggy-bank" data-toggle="tab">Piggy Bank</a>
				</li>

			</ul>
				<div class="admin_stage_content following_stage">
					<div class="tab-content">

						<!-- ///////////////// my info tab content ///////////////// -->
						<div class="tab-pane  active" id="my-info">
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
								<div class="spacer">
								</div>
							</form>
							
						</div> <!-- end my info content -->

						<!-- /////////////////  Social links tab content ///////////////// -->
						<div class="tab-pane" id="social-links">
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
							</form>
							<div class="spacer">
							</div>
						</div>

						<div class="tab-pane" id="piggy-bank">
							<!-- 1st row of thumbnails -->
							<div class="row profile-row">
								<h3 class="profile-headers">Your Account</h3>
							</div>
							<div class="row profile-row">
								<div class="col-md-2">
									<span>Balance:</span>
								</div>
								<div class="col-md-10">
									<span>$0.00</span> <a href="#">Deposit</a> <small class="pull-right">You will be passed to PayPal for balance deposit completion</small>
								</div>
							</div>
							<div class="row profile-row">
								<h3 class="profile-headers spacer">Transactions</h3>
							</div>
							<div class="row profile-row">
								<div class="col-md-2">
									<span>Transactions:</span>
								</div>
								<div class="col-md-10">
									<span>$0.00</span> <small class="pull-right">MixMe is proud to use PayPal as a secure and trusted payment method</small>
								</div>
							</div>
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
