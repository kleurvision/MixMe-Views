<?php include('../../config.php'); ?>
<? include ('inc/user-statusbar.php');?>

<div class="profile_stage_content">
	<div class="action_activity_inner">
		<ul class="list-unstyled">
			<li class="action_activity row-fluid">
				<div class="col-md-1 action_activity_left">
					<div class="global_userAvatar">
						<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
					</div>
					<a><img src="<?=ASSETS;?>/img/activity_status_icon.png"></a>
				</div>
				<div class="col-md-11 action_activity_right">
					<? include ('inc/activity_username.php'); ?>
					<div class="action_activity_content">
						<div class="activity-status">
							<p>Check this out... <a href="">google.com</a> #searchengine #bingsucks</p>
						</div>
						<? include ('inc/activity_meta.php'); ?>
					</div>
				</div>
			</li>
			<li class="action_activity row-fluid">
				<div class="col-md-1 action_activity_left">
					<div class="global_userAvatar">
						<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
					</div>
					<a><img src="<?=ASSETS;?>/img/activity_mixtape_icon.png"></a>
				</div>
				<div class="col-md-11 action_activity_right">
					<? include ('inc/activity_username.php'); ?>
					<div class="action_activity_content">
						<div class="activity-status">
							<p>I created a Mixtape! Yay!</p>
							<div class="action_activity_mixtape_wrap">
								<div class="action_activity_mixtape">
									<div style="background:orange;" class="mixColorStrip"></div>
								</div>
								<div class="action_activity_mixtape_content">
									<h4 class="activity-content-titles">Mixtape Title</h4>
									<i class="icon-play-circle mixtape-play-btn"></i>
									<p class="album_list_info genre-txt"><span>14 Tracks</span> <span>&#8226;</span> <a href="#">Hip Hop</a> <span>&#8226;</span>  <a href="#">dance</a> <span>&#8226;</span>  <a href="#">party</a> <span>&#8226;</span>  <a href="#">drink</a> <span>&#8226;</span>  <a href="#">twerk it gurl</a></p>
								</div>
							</div>
						</div>
						<? include ('inc/activity_meta.php'); ?>

						<div class="user-activity-comment row">
							<div class="activity-comment-avatar-wrapper pull-left">
								<img src="<?=ASSETS;?>/img/temp_avatar.jpg" class="comment-user-avatar pull-left">
								<img src="<?=ASSETS;?>/img/user-comment-arrow.png" class="comment-user-arrow pull-left">
							</div>

							<div class="activity-comment-txt-wrapper pull-left">
								<p class="action_activity_meta activity-username"><a href="">Elaine Garcia &nbsp;</a> This mixtape is awesome Elaine!</p>
								<p class="action_activity_meta pull-left activity-comment-meta">45 minutes ago&nbsp;&middot;&nbsp;<a href="">reply</a></p> 
							</div>
						</div>

						<div class="user-activity-comment row">
						<div class="activity-comment-avatar-wrapper pull-left">
							<img src="<?=ASSETS;?>/img/temp_avatar.jpg" class="comment-user-avatar pull-left">
							<img src="<?=ASSETS;?>/img/user-comment-arrow.png" class="comment-user-arrow pull-left">
						</div>

						<div class="activity-comment-txt-wrapper pull-left">
							<p class="action_activity_meta activity-username"><a href="">Elaine Garcia &nbsp;</a> I agree this mixtape is both dubious and outrageous, a real headbanger with quite the catchy tune if I do say so!</p>
							<p class="action_activity_meta pull-left activity-comment-meta">45 minutes ago&nbsp;&middot;&nbsp;<a href="">reply</a></p> 
						</div>
					</div>

					</div>
				</div>
			</li>
			<li class="action_activity row-fluid">
				<div class="col-md-1 action_activity_left">
					<div class="global_userAvatar">
						<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
					</div>
					<a><img src="<?=ASSETS;?>/img/activity_status_icon.png"></a>
				</div>
				<div class="col-md-11 action_activity_right">
					<? include ('inc/activity_username.php'); ?>
					<div class="action_activity_content">
						<div class="activity-status">
							<p>Photos from the Cardinal Chase show!</p>
							<ul class="action_activity_photo_group list-unstyled">
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
								<li class="action_activity_photo">
									<img src="<?=ASSETS;?>/img/band_temp.jpg">
								</li>
							</ul>
						</div>
						<? include ('inc/activity_meta.php'); ?>
					</div>
				</div>
			</li>
			<li class="action_activity row-fluid">
				<div class="col-md-1 action_activity_left">
					<div class="global_userAvatar">
						<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
					</div>
					<a><img src="<?=ASSETS;?>/img/activity_event_icon.png"></a>
				</div>
				<div class="col-md-11 action_activity_right">
					<? include ('inc/activity_username.php'); ?>
					<div class="action_activity_content">
						<div class="activity-status">
							<div class="action-event-wrapper">
								<div class="activity-event-thumb-wrapper pull-left" id="event-thumb">
									<img class="action_activity_photo action-event-photo" src="<?=ASSETS;?>/img/band_temp.jpg">
									<!-- /////////////////////// Event Hover ///////////////////////-->
									<div class="event_meta" id="meta-3">
										<p class="event_txt_month">SEPT</p>
										<p class="event_txt_day">28</p>
									</div><!-- End hover -->
								</div>
									<div class="action-event-info-wrapper">
										<h4 class="activity-content-titles">Event Title</h4>
										<p class="activity-event-time">September 28th 2013 at 7:30pm</p>
										<p class="activity-event-location">Molson Ampitheatre</p>
										<p class="activity-event-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent leo nulla, vestibul.</p>
										<p class="album_list_info genre-txt"><a href="#">Event Category</a></p>
									</div>
							</div>
						</div>
						<? include ('inc/activity_meta.php'); ?>
					</div>
				</div>
			</li>
			<li class="action_activity row-fluid">
				<div class="col-md-1 action_activity_left">
					<div class="global_userAvatar">
						<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
					</div>
					<a><img src="<?=ASSETS;?>/img/activity_music_icon.png"></a>
				</div>
				<div class="col-md-11 action_activity_right">
					<? include ('inc/activity_username.php'); ?>
					<div class="action_activity_content">
						<div class="activity-status">
							<div class="acivity-music-status">
								<img class="action_activity_photo pull-left" src="<?=ASSETS;?>/img/band_temp.jpg">
								<div class="action-music-info-wrapper">
									<h4 class="activity-content-titles">Album Title Goes Here</h4>
									<p class="activity-event-location">Bandname Goes Here</p>
									<p class="album_list_info genre-txt"><span class="activity-track-number">12 Tracks</span> <span>&#8226;</span> <a href="#">Punk Rock</a></p>
									<i class="icon-play-circle music-play-btn"></i>
									<p class="activity-event-location">Like the band to unlock the full album</p>
								</div>
							</div>
						</div>
						<? include ('inc/activity_meta.php'); ?>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>