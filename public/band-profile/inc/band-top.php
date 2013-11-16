<div class="row profile_top">
	<h1 class="profile_name pull-left">
		Dance Gavin Dance
	</h1>
	<div class="profile_controls pull-right">
		<div class="btn-group">
			<button type="button" role="button" class="btn btn-default" href="#tipModal" data-toggle="modal"><i class="icon-dollar"></i></button>
			<button type="button" class="btn btn-default" href="#notificationsModal" data-toggle="modal"><i class="icon-ok"></i></button>
			<button type="button" class="btn btn-default"><i class="icon-thumbs-up"></i></button>
			<button type="button" class="btn btn-default"><i class="icon-thumbs-down"></i></button>
		</div>
		<div class="btn profile_broadcasting gradient">
		Online
		</div>
	</div>
</div>

<!-- Notifications Modal -->
<div id="notificationsModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header admin_stage_head">
				<h2 class="admin_stage_title stage_title">Artist Notifications</h2>
			    <button type="button" class="close" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body public_modal_content">
				<div class="row notification_setting">
					<div class="col-md-4">
						<p>Email Notifications</p>
					</div>
					<div class="col-md-7 offset1">
						<div class="make-switch switch">
							<input type="checkbox" name="email_notifications" checked>
						</div>
					</div>
				</div>
				<div class="row notification_setting">
					<div class="col-md-4">
						<p>SMS Notifications</p>
					</div>
					<div class="col-md-7 offset1">
						<div class="make-switch switch">
							<input type="checkbox" name="sms_notifications" checked>
						</div>
					</div>
				</div>
				<div class="row notification_setting">
					<div class="col-md-4">
						<p>Chat Notifications</p>
					</div>
					<div class="col-md-7 offset1">
						<div class="make-switch switch">
							<input type="checkbox" name="chat_notifications" checked>
						</div>
					</div>
				</div>
			</div>
			<div class="admin_stage_bottom">
					<button class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!-- Tip Modal -->
<div id="tipModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tipModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-horizontal">
			<div class="modal-header admin_stage_head">
			    	<h2 class="admin_stage_title stage_title">Tip Artist</h2>
			    	<button type="button" class="close" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body fan_target_content">
				<div class="t_modal_content">
					<div class="form-group">
						<label class="modal_form_label_tip control-label col-md-4">Your Account Balance:</label>
						<div class="col-md-5">
							<input class="form-control" value="23.95" type="text" disabled></input>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary pull-right"><i class="icon-dollar"></i> Add Funds</button>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<label class="modal_form_label_tip control-label col-md-4">Tip Amount:</label>
						<div class="col-md-8">
							<input class="form-control" placeholder="0.00" type="text"></input>
						</div>
					</div>
		 			
				</div>
			</div>
			<div class="admin_stage_bottom">
					<button class="btn modal-save-cancel global_action_btn gradient pull-right">Send Tip!</button>
					<button class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button>
			</div>
			</form>
		</div>
	</div>
</div>