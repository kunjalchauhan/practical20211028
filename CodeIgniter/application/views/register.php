<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="padding-top: 50px">
		<div class="row">
			<?php
			// $sucess_msg = $this->session->flashdata('sucess_msg');
			// $error_msg = $this->session->flashdata('error_msg');
			// if($sucess_msg){
			?>
			<!-- <div class="alert alert-sucess">
				<?php echo $sucess_msg?>
			</div> -->
			<?php
			// }
			// if($error_msg){
			?>
			<!-- <div class="alert alert-danger">
				<?php echo $error_msg?>
			</div> -->
			<?php
			// }
			// $sucess_msg ='';
			// $error_msg ='';
			?>
			<div class="col-md-6">
				<h3>Register Here</h3>
				<form method="post" action="<?php echo 'index.php/register'?>">
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" type="text" name="name" placeholder="Enter your name">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email" placeholder="Enter your Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="text" name="password" placeholder="Enter your password">
					</div>
					<input type="submit" class="btn btn-lg btn-sucess">
				</form>
			</div>
			<div class="col-md-6">
				<h3>Login</h3>
				<span>Already a have an account</span>
				<form method="post" action="<?php echo 'index.php/login'?>">
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="text" name="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="text" name="password">
					</div>
					<input type="submit" class="btn btn-lg btn-sucess">
				</form>
			</div>
			<div class="col-md-12" style="text-align: center;">
				<a href="<?php echo 'index.php/all-blogs'?>"><button class="btn btn-lg">View Blogs</button></a>
			</div>
		</div>
	</div>
</body>
</html>