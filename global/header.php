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
									<a href="#" class="global_userNav_name">Elaine Garcia<span class="caret"></span></a>
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
								<a data-placement="bottom" title="" rel="tooltip" class="global_notifyFriends" data-original-title="Friends">Friends</a>
							</li>
							<li class="global_action">
								<a data-placement="bottom" title="" rel="tooltip" class="global_notifyMessages" data-original-title="Messages">Messages</a>
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