<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Mixtapes</h2>
			</div>

				<div class="admin_stage_content following_stage">
					<div class="row profile-row">
						<h3 class="profile-headers">My Mixtapes</h3>
					</div>
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/mixtape_example.jpg" alt="album image" class="pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="mixtape-name">Super Awesome Mixtape 1</h4>
							<button type="button" class="btn btn-default btn-sm">
								Launch
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>				

					<!-- 2nd profile row -->
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/mixtape_example.jpg" alt="album image" class="pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="mixtape-name">Super Awesome Mixtape 2</h4>
							<button type="button" class="btn btn-default btn-sm">
								Launch
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>				

					<!-- 3rd profile row -->
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/mixtape_example.jpg" alt="album image" class="pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="mixtape-name">Super Awesome Mixtape 3</h4>
							<button type="button" class="btn btn-default btn-sm">
								Launch
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>	

					<div class="row profile-row">
						<div class="btn add_profile_btn global_action_btn gradient" data-toggle="modal" data-target="#create-mixtape-modal">
							<i class="icon-plus"></i> Add Mixtape
						</div>
					</div>	
					<div class="spacer">
					</div>		

				</div>
					<div class="admin_stage_bottom">
				</div>

			</div> <!-- end stage content -->

			<div class="modal fade" id="create-mixtape-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog ">
			        <div class="modal-content">
			            <div class="admin_stage_head">
			                
								<h2 class="admin_stage_title stage_title">Create Mixtapes</h2>
							
			        	</div>
			        	<div class="fan_target_content">

			        		<div class="row add-event-row">
				     
					        		<form class="messages_target_form">
					        		
					        			<div class="col-md-4">	
											<div class="" id="thumb-3">
												<img src="<?=ASSETS;?>/img/mixtape_example_large2.jpg" alt="album image" class="add-event-thumb">
											</div>
											<div class="btn  global_action_btn gradient change-image-btn">
												 Upload Image
											</div>
										</div>
										<div class="col-md-8"> 
						        			<div class="form-group">
		    									<label for="event-name">Mixtape Name</label>
		    									<input type="text" class="form-control" id="event-name">
		    								</div>

    										<div class="form-group">
	    										<label for="event-location">Mixtape Tags</label>
	    										<input type="text" class="form-control" id="event-location">
    										</div>	

											<div class="btn  global_action_btn gradient change-image-btn">
													<i class="icon-plus"> Add Tracks</i>
											</div>

										</div>

					        		</form>

				        		</div>
				        	</div> <!-- end row -->

				        	<div class="admin_stage_bottom">
				        		<div class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal">
									Save Mixtape
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
