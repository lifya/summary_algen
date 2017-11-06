<!DOCTYPE html>
<html>
<head>
	<title>eBook's Store</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>element/css/bootstrap-theme.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>element/css/bootstrap.css"/>
      
</head>
<body>
	<div class="jumbotron"></div>
	<div class="container" style="margin-top: -500px; position: relative;">
		<form action="<?php echo base_url('C_login') ?>" method="POST" style="margin-top: 80px; margin-bottom: 50px;">
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
		<div class="form-group">
        	<input type="text" name="username" id="username" class="form-control" placeholder="Username">
      	</div>

      	<div class="form-group">
        	<input type="password" name="password" id="password" class="form-control" placeholder="Password">
      	</div>
		<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign In</button> <h1>HELLO</h1>
	        
		</form>
</div>

</body>
</html>