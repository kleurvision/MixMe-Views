<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Band Profile</h2>
			</div>

				<div class="admin_stage_content following_stage">
					<div class="row profile-row">
						<h3 class="profile-headers">My Profiles</h3>
					</div>
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Gravity A</h4>
							<button type="button" class="btn btn-default btn-sm">
								View
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Edit
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>				

					<!-- 2nd profile row -->
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Gravity B</h4>
							<button type="button" class="btn btn-default btn-sm">
								View
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Edit
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>				

					<!-- 3rd profile row -->
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Gravity C</h4>
							<button type="button" class="btn btn-default btn-sm">
								View
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Edit
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>	

					<div class="row profile-row">
						<div class="btn add_profile_btn global_action_btn gradient" data-toggle="modal" data-target="#add-band-modal">
							<i class="icon-plus"></i> Add Band Profile
						</div>
					</div>	
					<div class="spacer">
					</div>		

				</div>
					<div class="admin_stage_bottom">
				</div>

			</div> <!-- end stage content -->

			<div class="modal fade" id="add-band-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog ">
			        <div class="modal-content">
			            <div class="admin_stage_head">
			                
								<h2 class="admin_stage_title stage_title">Add Band Profile</h2>
							
			        	</div>
			        	<div class="fan_target_content">

			        		<div class="row add-event-row">
				     
					        		<form class="messages_target_form">
					        		
					        			<div class="col-md-4">	
											<div class="" id="thumb-3">
												<img src="<?=ASSETS;?>/img/band_temp.jpg" alt="album image" class="add-event-thumb">
											</div>
											<div class="btn  global_action_btn gradient change-image-btn">
												 Upload Image
											</div>
										</div>
										<div class="col-md-8"> 
						        			<div class="form-group">
		    									<label for="band-display-name">Display Name</label>
		    									<input type="text" class="form-control" id="band-display-name">
		    								</div>
    									
    										<div class="form-group">
	    										<label for="band-date-formed">Date Formed</label>
	    										<textarea type="text" class="form-control" id="band-date-formed"></textarea>
    										</div>

    										<div class="form-group">
												<label for="band-input-country">Country:</label>
										    	<select class="form-control" id="band-input-country">
													<option>United States</option>
													<option>Canada</option>
													<option>France</option>
													<option>Germany</option>
													<option>Brazil</option>
												</select>
											</div>

    										<div class="form-group">
	    										<label for="band-hometown">Hometown</label>
	    										<input type="text" class="form-control" id="band-hometown">
    										</div>
    										<div class="form-group">
	    										<label for="band-zip">Zip Code</label>
	    										<input type="text" class="form-control" id="band-zip">
    										</div>

    										<div class="form-group">
												<label for="band-public" >Profile:</label>
										    	<select class="form-control" id="band-public">
													<option>Display on Mixme (Public)</option>
													<option>Hide on Mixme (Private)</option>
												</select>
											</div>

										</div>

					        		</form>

				        		</div>
				        	</div> <!-- end row -->

				        	<div class="admin_stage_bottom">
				        		<div class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal">
									Save Profile
								</div>

								<div class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal">
									Cancel
								</div>
			        		</div>
			    	</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</div>
	</div>
</div>
<!-- / End Content -->
