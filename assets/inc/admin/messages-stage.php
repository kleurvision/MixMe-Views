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

						<button type="button" class="btn btn-default btn-sm">
							<i class="icon-ok"></i> Send
						</button>
						<button type="button" class="btn btn-default btn-sm">
							 Cancel
						</button>
						<input type="checkbox" class="compose_checkbox"> 
							<span class="checkbox_txt">copy myself</span>
						</input>

						<input type="checkbox" class="compose_checkbox"> 
							<span class="checkbox_txt">send as urgent</span>
						</input>
					</form>
				</div>
				<div class="messages_inbox">
					<div class="messages_inbox_controls">
						<p class="select_section">Select: <a href="#">all</a> | <a href="#">none</a> </p>
						<button type="button" class="btn btn-default btn-sm">
							 Delete
						</button>
						<button type="button" class="btn btn-default btn-sm">
							Archive
						</button>
						<button type="button" class="btn btn-default btn-sm">
							Read
						</button>
						<button type="button" class="btn btn-default btn-sm">
							Unread
						</button>

						<p class="sort_section">Sort: <a href="#">newest</a> | <a href="#">oldest</a> </p>
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

				<!-- targeting map modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog target-dialog">
				        <div class="modal-content">
				            <div class="admin_stage_head">
				                
									<h2 class="admin_stage_title stage_title">Fan Targeting</h2>
								
				        	</div>
				        	<div class="fan_target_content">
				        		<div class="row">
					        		<div class="col-md-4"> 
						        		<form class="messages_target_form">
						        			<div class="form-group">
		    									<label for="groupname">group name</label>
		    									<input type="text" class="form-control" id="groupname">
		    								</div>
	    										<div class="row"> 
		    										<div class="col-md-6">
			    										<div class="form-group">
			    											<label for="gender">gender</label>
			    											<input type="text" class="form-control" id="gender">
			    										</div>
		    										</div>

		    										<div class="col-md-6">
		    											<div class="form-group age_input">
			    											<label for="age">age</label>
			    											<input type="text" class="form-control" id="age">
		    											</div>
		    										</div>
	    										</div>
	    									
	    										<div class="form-group">
		    										<label for="country">country</label>
		    										<input type="text" class="form-control" id="country">
	    										</div>

	    										<div class="form-group">
		    										<label for="searcharea">search area</label>
		    										<input type="text" class="form-control" id="searcharea">
	    										</div>

	    										<div class="form-group">
		    										<label for="range">range (miles)</label>
		    										<input type="text" class="form-control" id="range">
	    										</div>

	    										<div class="form-group">
		    										<div class="btn admin_compose_message global_action_btn btn-block gradient" data-dismiss="modal">
														<i class="icon-envelope-alt" id="save_envelope_icon"></i> Save and Compose
													</div>
												</div>
		 									
						        		</form>

						        		
					        		</div> <!-- end column -->
									<div class="col-md-8 targeting_map_column"> 
						        		
					        		</div>
					        		
					        	</div> <!-- end row -->
					        	<div class="admin_stage_bottom">
				          		
				        		</div>
				        	</div>
				      	</div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div>
		</div>
	</div>
</div>