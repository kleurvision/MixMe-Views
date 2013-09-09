<!DOCTYPE html>
<html>
<head>
	<title>MixMe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<! -- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
	<!-- Override -->
	<link href="assets/css/mixme.css" rel="stylesheet" media="screen">
	<link href="assets/css/mixme.responsive.css" rel="stylesheet" media="screen">
	
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
						<? include ('globals/user_account.php'); ?>
					</li>
					<li class="global_user_actions">
						<? include ('globals/user_actions.php'); ?>
					</li>
				</ul>
			</nav>

		</nav><!-- global_header -->
		<div class="main">	