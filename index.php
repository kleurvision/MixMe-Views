<? // MixeMe Band Profile

include('config.php');
include('global/header-ext.php');?>
<div class="content container">


<div class="row">
	<div class="col-md-7">
		<h3 class="home-tagline">Music Discovery <span>Reinvented</span></h3>
		<div class="home-stage container">
			Welcome to MixMe	
		</div>
	</div>
	<div class="home-form col-md-5">
		<form class="form">
			<h3>Already Registered?</h3>
			<div class="row">
				<div class="col-md-12">
					<input type="text" class="form-control home-input" name="username" placeholder="Username"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<input type="password" class="form-control home-input" name="password" placeholder="Password"/>
				</div>
				<div class="col-md-3">
					<button type="button" class="btn btn-primary form-control">Login</button>
				</div>
			</div>
		</form>
		<form class="form">
			<h3>New to MixMe? Request Beta Account</h3>
			<div class="row">
				<div class="col-md-12">
					<input type="text" class="form-control home-input" name="username" placeholder="Username"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<input type="text" class="form-control home-input" name="email" placeholder="Email Address"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<input type="password" class="form-control home-input" name="password" placeholder="Password"/>
				</div>
				<div class="col-md-6">
					<input type="password" class="form-control home-input" name="conf-password" placeholder="Confirm Password"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button type="button" class="btn btn-primary form-control">Register</button>
				</div>
			</div>
			
		</form>
	</div>
</div>			

<div class="row home-features">
	<div class="col-md-4">
	1
	</div>
	<div class="col-md-4">
	2
	</div>
	<div class="col-md-4">
	3
	</div>
</div>

</div><!-- content -->
<? include('global/footer-ext.php'); ?>