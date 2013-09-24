<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Who You're Following</h2>
			</div>

			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#artists-following" data-toggle="tab">Artists</a>
				</li>
				<li>
					<a href="#friends-following" data-toggle="tab">Friends</a>
				</li>

				<div class="btn admin_compose_message global_action_btn gradient pull-right">
					<i class="icon-search"></i> Find Friends
				</div>
			</ul>
				<div class="admin_stage_content following_stage">
					<div class="tab-content">
						<!-- ///////////////// Artists following tab content ///////////////// -->
						<div class="tab-pane active" id="artists-following">
							<!-- 1st row of thumbnails -->
							<div class="row">
								<div class="col-md-3">
									<!-- Album Thumbnail -->
									<div class="album_thumb" id="thumb-1">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
										<!-- Hidden information overlay, shows on hover -->
										<div class="album_meta" id="meta-1">
											<p class="album_pink_txt">32,043</p>
											<p class="album_info">Fans</p>
											<p class="album_pink_txt">1.2 Million</p>
											<p class="album_info">Plays</p>
												<a href="#"><img src="<?=ASSETS;?>/img/play_icon.png" alt="album image" class="pull-left album_play_icon"></a>
												<a href="#"><img src="<?=ASSETS;?>/img/heart_icon.png" alt="album image" class="pull-right album_heart_icon"></a>
										</div>
										<!--/end information overlay -->
									</div>
									<!-- /end album thumbnail -->
									<p class="album_bandname">Bandname <br/> On two lines</p>
								</div>

								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">  
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
							</div>				

							<!-- 2nd row of thumbnails -->
							<div class="row">
								<div class="col-md-3">
									<div class="album_thumb" id="thumb-1">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">  
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
							</div>	

							<!-- 3rd row of thumbnails -->
							<div class="row">
								<div class="col-md-3">
									<div class="album_thumb" id="thumb-1">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">  
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Bandname</p>
								</div>
							</div>	
						</div>

						<!-- ///////////////// Friends following tab content ///////////////// -->
						<div class="tab-pane" id="friends-following">
							<!-- 1st row of thumbnails -->
							<div class="row">
								<div class="col-md-3">
									<!-- Album Thumbnail -->
									<div class="album_thumb" id="thumb-2">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image">
										<!-- Hidden information overlay, shows on hover -->
										<div class="album_meta" id="meta-2">
											<p class="friends_pink_txt">Gravity A- <br/> Renegade Masters</p>
											<a href="#" data-toggle="tooltip" id="message-tooltip" title="Send Message"><i alt="album image" class="pull-left friends_following_icon icon-envelope"></i></a>
											<a href="#" data-toggle="tooltip" id="unfollow-tooltip" title="Unfollow"><i alt="album image" class="pull-right friends_following_icon icon-minus-sign unfollow-icon"></i></a>
											
											
										</div>
										<!--/end information overlay -->
									</div>
									<!-- /end album thumbnail -->
									<p class="album_bandname">Friends name <br/> On two lines</p>
								</div>

								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image">  
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
							</div>				

							<!-- 2nd row of thumbnails -->
							<div class="row">
								<div class="col-md-3">
									<div class="album_thumb" id="thumb-1">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image">
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image">  
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
							</div>	

							<!-- 3rd row of thumbnails -->
							<div class="row">
								<div class="col-md-3">
									<div class="album_thumb" id="thumb-1">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image">
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image">  
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
								<div class="col-md-3">
									<div class="album_thumb">
										<img src="<?=ASSETS;?>/img/fan_temp.jpg" alt="album image"> 
									</div>
									<p class="album_bandname">Friends name</p>
								</div>
							</div>	
						</div> <!-- end friends following content -->
					</div> <!-- end tab content -->
				</div> <!-- end stage content -->

			<div class="admin_stage_bottom">
			</div>
		</div>
	</div>
</div>
<!-- / End Content -->
