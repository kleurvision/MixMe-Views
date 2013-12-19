		</div><!-- main -->
		<div class="push"></div>
		
		<div class="home-footer container">
			<div class="pull-left"><small>&copy; <?=date('Y');?> MixMe.com. All rights reserved.</small></div>
			<div class="pull-right">
				<? include 'global/social.php';?>
			</div>
		</div>
	</div><!-- wrapper -->
	
	
	
	<div class="global_vign">
	</div>
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?=ASSETS;?>/js/bootstrap.min.js"></script>
	<script src="<?=ASSETS;?>/js/backstretch.js"></script>
	<script src="<?=ASSETS;?>/js/app.js"></script>
	<script src="<?=ASSETS;?>/js/switch.js"></script>
	<script src="<?=ASSETS;?>/js/list-dropdown.js"></script>

	<script>
		$(document).ready(function(){
			$('.player-album-add img').click(function(){
				$('.player-track-manage-wrap').animate({top: 'toggle'}, 800);
			})
		});
	</script>

</body>