<? $r = 1;?>
<div class="row">
	<p class="action_activity_meta pull-left">an hour ago&nbsp;&middot;&nbsp;<a data-toggle="collapse" data-target="#reply<?=$r;?>">reply</a></p> 
	<a href="#"><i class="icon-star activity-icons pull-right"></i></a><a href="#"><i class="icon-share activity-icons pull-right activity-icons-share"></i></a>
</div>
<div class="row">
	<div id="reply<?=$r;?>" class="collapse reply_stage">
		<div class="row">
			<div class="col-md-1 action_activity_left">
				<div class="global_userAvatar">
					<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
				</div>
			</div>
			<div class="col-md-11 action_activity_right">
				Reply
			</div>
		</div>
	</div>
</div>
<? $r++;?>