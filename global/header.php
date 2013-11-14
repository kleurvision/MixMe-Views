<?php include('../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MixMe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<! -- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
	<!-- Styles -->
	<link href="<?=ASSETS;?>/css/mixme.css" rel="stylesheet" media="screen">
	
	<!-- Gradient Override for IE9 -->
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->

</head>

<body>

	<div class="wrap">

	<!-- Global Header -->
		<nav class="navbar global_header row navbar-fixed-top">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navigation">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand mixme-logo global_logo" href="#">MixMe</a>
			</div>
			<nav class="collapse navbar-collapse main-navigation" role="navigation">
				<ul class="global_nav list-inline">
					<li><a>Home</a></li>
					<li><a class="active">Discover</a></li>
					<li><a>Marketplace</a></li>
				</ul>
				<ul class="user-profile pull-right list-inline">
					<li class="global_user_account">
						
						<ul class="global_userDetails list-inline">
							<li class="global_userAvatar pull-left">
								<a><img src="<?=ASSETS;?>/img/temp_avatar.jpg"></a>
							</li>
							<li class="global_userNav pull-right">
								<div class="dropdown">
									<a href="#" class="global_userNav_name" id="header-user-dropdown">Elaine Garcia<span class="caret"></span></a>
								</div>

								<div id="header-user-dropdown-wrapper" class="header-dropdown-wrapper">
									<img src="<?=ASSETS;?>/img/dropdown_arrow.png" class="dropdown-box-arrow">
									<div class="edit-dropdown">
										<div class="row edit-profile-row">
											<div class="col-md-4">
												<img src="<?=ASSETS;?>/img/edit_band_dropdown_example.jpg" class="dropdown-img">
											</div>
											<div class="col-md-8">
												<p class="dropdown-title">Breaking Even</p>
												<button type="button" class="btn dropdown-btn">Edit Profile</button>
											</div>
										</div>

										<div class="row edit-profile-row">
											<div class="col-md-4">
												<img src="<?=ASSETS;?>/img/band_temp.jpg" class="dropdown-img">
											</div>
											<div class="col-md-8">
												<p class="dropdown-title">Dance Gavin Dance</p>
												<button type="button" class="btn dropdown-btn">Edit Profile</button>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>

					</li>
					<li class="global_user_actions">
					
						<ul class="global_userActions list-inline">
							<li class="global_action">
								<a data-placement="bottom" title="" rel="tooltip" class="global_notifyMusic" data-original-title="Music">Music</a>
							</li>
							<li class="global_action">
								<a data-placement="bottom" title="" rel="tooltip" class="global_notifyMixtapes" data-original-title="Mixtapes">Mixtapes</a>
							</li>
							<li class="global_action">
								<a id="header-friend-dropdown" data-placement="bottom" title="" rel="tooltip" class="global_notifyFriends" data-original-title="Friends">Friends</a>
								<div id="header-friend-dropdown-wrapper" class="header-dropdown-wrapper">
									<img src="<?=ASSETS;?>/img/dropdown_arrow.png" class="dropdown-box-arrow">
									<div class="edit-dropdown">
										<div class="row edit-profile-row">
											<div class="col-md-4">
												<img src="<?=ASSETS;?>/img/edit_band_dropdown_example.jpg" class="dropdown-img">
											</div>
											<div class="col-md-8">
												<p class="dropdown-title">Breaking Even</p>
												<button type="button" class="btn dropdown-btn">Edit Profile</button>
											</div>
										</div>

										<div class="row edit-profile-row">
											<div class="col-md-4">
												<img src="<?=ASSETS;?>/img/band_temp.jpg" class="dropdown-img">
											</div>
											<div class="col-md-8">
												<p class="dropdown-title">Dance Gavin Dance</p>
												<button type="button" class="btn dropdown-btn">Edit Profile</button>
											</div>
										</div>
									</div>
								</div>
								
							</li>
							<li class="global_action">
								<a id="header-messages-dropdown" data-placement="bottom" title="" rel="tooltip" class="global_notifyMessages" data-original-title="Messages">Messages</a>
								
								<div id="header-messages-dropdown-wrapper" class="header-dropdown-wrapper">
									<img src="<?=ASSETS;?>/img/dropdown_arrow.png" class="dropdown-box-arrow">
									<div class="edit-dropdown">
										<ul id="global_messageContent">
							         		<li class="row">
												<div class="global_userAvatar col-md-2">&nbsp;</div>
												<div class="global_messageDetails col-md-10">
													<span class="global_messageUserName">User Name or Band Name</span>
													<div class="global_message">
														<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit...</p>
													</div>
													<span class="global_dateTime">9:15am | Monday, September 24</span>
												</div>
											</li>
											
											<li class="row">
												<div class="global_userAvatar col-md-2">&nbsp;</div>
												<div class="global_messageDetails col-md-10">
													<span class="global_messageUserName">User Name or Band Name</span>
													<div class="global_message">
														<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit...</p>
													</div>
													<span class="global_dateTime">9:15am | Monday, September 24</span>
												</div>
											</li>
											
											<li class="row">
												<div class="global_userAvatar col-md-2">&nbsp;</div>
												<div class="global_messageDetails col-md-10">
													<span class="global_messageUserName">User Name or Band Name</span>
													<div class="global_message">
														<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit...</p>
													</div>
													<span class="global_dateTime">9:15am | Monday, September 24</span>
												</div>
											</li>
											
								        </ul>
										<a class="btn btn-primary btn-sm">View All</a>
									</div>
								</div>
								
							</li>
							<li class="global_action">
								<a data-placement="bottom" title="" rel="tooltip" class="global_notifyChat" data-original-title="Chat">Chat</a>
							</li>
						</ul>
					
					</li>
				</ul>

				
			</nav>

		</nav>
	<!-- / End Global Header -->
		<div class="main">	