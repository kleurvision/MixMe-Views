<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Linked Users</h2>
			</div>

				<div class="admin_stage_content following_stage">
					<div class="row profile-row">
						<h3 class="profile-headers">Users</h3>
					</div>
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Frodo Baggins</h4>
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
							<h4 class="profile-name">Samwise Gamgee</h4>
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
							<h4 class="profile-name">Peregrin Took</h4>
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
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Meriadoc Brandybuck</h4>
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
						<div class="btn add_profile_btn global_action_btn gradient" data-toggle="modal" data-target="#add-user-modal">
							<i class="icon-plus"></i> Add User
						</div>
					</div>	
					<div class="spacer">
					</div>		

				</div>
					<div class="admin_stage_bottom">
				</div>

			</div> <!-- end stage content -->

			<div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog ">
			        <div class="modal-content">
			            <div class="admin_stage_head">
			                
								<h2 class="admin_stage_title stage_title">Link a New User</h2>
							
			        	</div>
			        	<div class="link-user-content">
			        		<div class="col-md-12">

			        		<div class="row add-event-row">
		     					<label for="band-display-name">Search Users</label>
								<form class="admin_search admin_form" action="" name="admin_search">
									<div class="row-fluid clearfix">
										<div class="col-md-9">
											<input type="text" class="admin_search_input" />
										</div>
										<div class="col-md-3">
											<span class="admin_form_directive"><i class="icon-search"></i> Search</span>
										</div>
									</div>
								</form>
			        		</div>

			        		<form>
								<label for="band-display-name">Search Results</label>

								<div class="row profile-row">
									<div class="col-md-2">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
									</div>
									<div class="col-md-10">
										<h4 class="search-results-name">Aragorn Elessar</h4>
										<button type="button" class="btn btn-default btn-sm">
											<i class="icon-plus"></i> Link User
										</button>
										
									</div>
								</div>	

								<div class="row profile-row">
									<div class="col-md-2">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
									</div>
									<div class="col-md-10">
										<h4 class="search-results-name">Legolas Greenleaf</h4>
										<button type="button" class="btn btn-default btn-sm">
											<i class="icon-plus"></i> Link User
										</button>
										
									</div>
								</div>

								<div class="row profile-row">
									<div class="col-md-2">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
									</div>
									<div class="col-md-10">
										<h4 class="search-results-name">Gimli</h4>
										<button type="button" class="btn btn-default btn-sm">
											<i class="icon-plus"></i> Link User
										</button>
										
									</div>
								</div>

								<div class="row profile-row">
									<div class="col-md-2">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
									</div>
									<div class="col-md-10">
										<h4 class="search-results-name">Gandalf the Gray</h4>
										<button type="button" class="btn btn-default btn-sm">
											<i class="icon-plus"></i> Link User
										</button>
										
									</div>
								</div>		
							</form>
						</div>
				        	</div> <!-- end row -->

				        	<div class="admin_stage_bottom">
			        		</div>
			    	</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</div>
	</div>
</div>
<!-- / End Content -->
