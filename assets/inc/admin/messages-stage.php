<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Compose Message</h2>
			</div>
			<div class="admin_stage_controls">
				<button type="button" class="btn btn-default btn-sm">
					<i class="icon-ok"></i> Send
				</button>
				<button type="button" class="btn btn-default btn-sm">
					Cancel
				</button>
			</div>
			<div class="admin_stage_content">
				<div class="messages_compose">
					<form name="compose_message" action="">
						<div class="form-group col-12-md">
							<label>To</label>
							<input class="form-control" placeholder="Start typing name or drag group tags here..." />
						</div>
						<div class="form-group col-12-md">
							<label>Subject</label>
							<input class="form-control" placeholder="What do you want to talk about?" />
						</div>
						<div class="form-group col-12-md">
							<label>message</label>
							<textarea rows="8" class="form-control"></textarea>
						</div>
					</form>
				</div>
				<div class="messages_inbox">
					<div class="messages_inbox_controls">
					</div>
					<div class="messages_inbox_messages">
						<div class="messages_message">
							<div class="col-md-7">
								<input class="pull-left" type="checkbox" name="message_select" />
								<img class="img-circle pull-left message_avatar" src="<?=ASSETS;?>img/temp_avatar.jpg">
								<div class="message_details pull-left">
									<span class="message_from">John Smith</span>
									<span class="message_subject message_read">This is the subject line of a new message</span>
								</div>
							</div>
							<div class="col-md-5">
								<span class="message_date">July 1</span>
								<ul class="message_controls list-inline">
									<li><i class="icon-mail-reply"></i> reply</li>
									<li><i class="icon-mail-forward"></i> forward</li>
									<li><i class="icon-remove"></i> delete</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>