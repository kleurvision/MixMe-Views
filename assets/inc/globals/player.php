<? /* Global Player */ ?>
<div class="player-contents">
	<div class="heading-screws pull-left player-screws-left hidden"></div>
	<div class="heading-screws pull-right player-screws-right hidden"></div>
	<div class="player-container">
		<div class="player-controls-wrap col-sm-3">	
			<!-- Controls -->
			<ul class="player-controls list-inline list-unstyled inline">
				<li class="player-rewind">Rewind</li>
				<li class="pressed player-play">Play</li>
				<li class="player-stop">Stop</li>
				<li class="player-forward">Forward</li>
			</ul>
			<!-- Volume -->
			<div class="player-volume visible-md visible-lg">
				<div class="player-volume-knob"></div>
			</div>
		</div><!-- player-controls-wrap -->
		
		<div class="player-right-wrap col-sm-9">
			<div class="row">
				<div class="player-tracks-left hidden-xs col-sm-4">
					<div class="player-current-song-wrap">
						<div class="player-current-song">
							<div class="player-album-art player-current-album">
								<img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg">
							</div>
							<div class="player-current-track-info">
								<h2 class="player-current-track-band">Cardinal Chase</h2>
								<span class="player-current-track-name-time">Run to the Sun (3:23)</span>
							</div>
						</div>
					</div>
				</div>
				<div class="player-tracks-right hidden-xs col-sm-8">
					<div class="player-track-cue">
						<ul class="list-inline list-unstyled">
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover1.jpg"></li>
							<li class="player-album-art"><img src="<?=ASSETS;?>img/pv2_mixtape_cover2.jpg"></li>
						</ul>
					</div>
				</div>
				
				<div class="clear"></div>
				
				<div class="player-album-add">
					<img src="<?=ASSETS;?>img/player_album_add.jpg">
				</div>
			</div>	
		</div><!-- player-right-wrap -->
	</div><!-- player-container -->
</div>

<div class="player-track-manage-wrap player-track-cue-manage">
	<div class="player-track-cue-inner-wrap">
		
		<div class="player-track-cue-inner row">
			<div class="player-cue-head col-sm-12">
				<h2>Manage Playlist</h2>
				<p>Add and remove new tracks, mark favorites, and share new discoveries.</p>
			
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-6">Track Name</div>
					<div class="col-xs-5">by Band Name</div>
					<div class="col-xs-1">X</div>
				</div>
			</div>
		</div>
		
	</div>
</div><!-- player-track-manage-wrap -->
		