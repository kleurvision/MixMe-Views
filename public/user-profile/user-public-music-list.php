<?php include('../../config.php'); ?>
<? include ('inc/user-statusbar.php');?>

<div class="row">
	<div class="col-md-12">
		<div class="profile_stage_content">
			<div class="sections_header">
				<h4 class="section_title">Music</h4>
				<div class="view_btns">
					<a class="ajax-load" data-link="public-music-grid" href="#music-grid-view-content" data-toggle="tab">
						<div class="album_view_grid" data-toggle="tab">
							<i class="icon-th pull-right music-view-icons"></i>
						</div>
					</a>
					<a class="ajax-load" data-link="public-music-list" href="#music-list-view-content" data-toggle="tab">
						<div class="album_view_list" data-toggle="tab">
							<i class="icon-th-list pull-right music-view-icons"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="profile_music_content tab-content">

				<!-- album section -->
				<div class="tab-pane" id="music-list-view-content">
					<div class="profile_album_section row">
						<div class="album_background">
								<img src="<?= ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile_album_thumb" />
								<h3 class="list_album_title">Album Title</h3>
								<h4 class="list_bandname_title">Bandname</h4>
								<p class="list_bandname_genre">Genre</p>
								<a href="#" class="profile_album_icons"><i class="icon-plus-sign"></i></a>
								<p class="album_list_info"><a href="#">14 Tracks</a> <span>&#8226;</span> <a href="#">789 Likes</a> <span>&#8226;</span>  <a href="#">42 Comments</a></p>
								<a href="#" class="profile_album_icons"><i class="icon-star pull-right album_fav"></i></a> 
								<a href="#" class="profile_album_icons"><i class="icon-share pull-right album_share"></i></a>
								<a class="profile_album_icons"><i class="icon-angle-down pull-right album_pulldown" id="pull_down_1"></i></a>
						</div>
					</div>
					<!--/end album section -->

					<!-- track list dropdown example -->
					<div class="track_list row">
					<table class="table table-striped">
						<tr class="">
							<td class="track_no">1/</td>
							<td class="track_name">Introduction (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">2/</td>
							<td class="track_name">Walk into the Sun (3:03)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">3/</td>
							<td class="track_name">Jumper (3:03)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">4/</td>
							<td class="track_name">Shouting the Blues (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">5/</td>
							<td class="track_name">Shotgun Wedding (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">6/</td>
							<td class="track_name">I'm Awesome (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
					</table>
					</div>
					<!-- /end track list dropdown example -->

					<!-- album section -->
					<div class="profile_album_section row">
						<div class="album_background">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile_album_thumb" />
								<h3 class="list_album_title">Album Title</h3>
								<h4 class="list_bandname_title">Bandname</h4>
								<p class="list_bandname_genre">Genre</p>
								<a href="#" class="profile_album_icons"><i class="icon-plus-sign"></i></a>
								<p class="album_list_info"><a href="#">14 Tracks</a> <span>&#8226;</span> <a href="#">789 Likes</a> <span>&#8226;</span>  <a href="#">42 Comments</a></p>
								<a href="#" class="profile_album_icons"><i class="icon-star pull-right album_fav"></i></a> 
								<a href="#" class="profile_album_icons"><i class="icon-share pull-right album_share"></i></a>
								<a href="#" class="profile_album_icons"><i class="icon-angle-down pull-right album_pulldown"></i></a>
						</div>
					</div>
					<!--/end album section -->

					<!-- album section -->
					<div class="profile_album_section row">
						<div class="album_background">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile_album_thumb" />
								<h3 class="list_album_title">Album Title</h3>
								<h4 class="list_bandname_title">Bandname</h4>
								<p class="list_bandname_genre">Genre</p>
								<a href="#" class="profile_album_icons"><i class="icon-plus-sign"></i></a>
								<p class="album_list_info"><a href="#">14 Tracks</a> <span>&#8226;</span> <a href="#">789 Likes</a> <span>&#8226;</span>  <a href="#">42 Comments</a></p>
								<a href="#" class="profile_album_icons"><i class="icon-star pull-right album_fav"></i></a> 
								<a href="#" class="profile_album_icons"><i class="icon-share pull-right album_share"></i></a>
								<a href="#" class="profile_album_icons"><i class="icon-angle-down pull-right album_pulldown"></i></a>
						</div>
					</div>
					<!--/end album section -->

					<!-- album section -->
					<div class="profile_album_section row">
						<div class="album_background">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile_album_thumb" />
								<h3 class="list_album_title">Album Title</h3>
								<h4 class="list_bandname_title">Bandname</h4>
								<p class="list_bandname_genre">Genre</p>
								<a href="#" class="profile_album_icons"><i class="icon-plus-sign"></i></a>
								<p class="album_list_info"><a href="#">14 Tracks</a> <span>&#8226;</span> <a href="#">789 Likes</a> <span>&#8226;</span>  <a href="#">42 Comments</a></p>
								<a href="#" class="profile_album_icons"><i class="icon-star pull-right album_fav"></i></a> 
								<a href="#" class="profile_album_icons"><i class="icon-share pull-right album_share"></i></a>
								<a href="#" class="profile_album_icons"><i class="icon-angle-down pull-right album_pulldown"></i></a>
						</div>
					</div>
					<!--/end album section -->
				</div>

				<div class="tab-pane active" id="music-grid-view-content">
						<!-- first thumbnail row -->
					<div class="row profile_grid_content">
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb" id="thumb-1">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
								<!-- Hidden information overlay, shows on hover -->
								<div class="album_meta" id="meta-1">
									<p class="album_pink_txt">32,043</p>
									<p class="album_info">Fans</p>
									<p class="album_pink_txt">1.2 Million</p>
									<p class="album_info">Plays</p>
										<i class="icon-play-circle music-grid-play-btn"></i>
										<i class="icon-star activity-icons music-grid-fav"></i><i class="icon-share activity-icons music-grid-share activity-icons-share"></i>
								</div>
								<!--/end information overlay -->
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname <br/> On two lines</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>

						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb" id="thumb-2">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb" id="thumb-3">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb" id="thumb-4">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
					</div>	

					<div class="track_list_grid row">
					<table class="table table-striped">
						<tr class="">
							<td class="track_no">1/</td>
							<td class="track_name">Introduction (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">2/</td>
							<td class="track_name">Walk into the Sun (3:03)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">3/</td>
							<td class="track_name">Jumper (3:03)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">4/</td>
							<td class="track_name">Shouting the Blues (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">5/</td>
							<td class="track_name">Shotgun Wedding (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
						<tr class="">
							<td class="track_no">6/</td>
							<td class="track_name">I'm Awesome (3:23)</td>
							<td class="plus_icon"><a href="#" class=""><i class="icon-plus-sign"></i></a></td>
							<td class="play_icon"><a href="#" class=""><i class="icon-play"></i></a></td>
						</tr>
					</table>
					</div>

					<!-- second thumbnail row -->
					<div class="row profile_grid_content">
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname <br/> On two lines</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>

						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
					</div>	

					<!-- third thumbnail row -->
					<div class="row profile_grid_content">
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname <br/> On two lines</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>

						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Album Thumbnail -->
							<div class="album_grid_thumb">
								<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image">
							</div>
							<!-- /end album thumbnail -->
							<div class="band_info_container">
								<p class="grid_bandname">Bandname</p>
								<p class="grid_genre">Genre</p>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>