<!DOCTYPE html>
<html>
<head>
	<title>Add Blogs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="padding-top: 50px">
		<div class="row">
			<div class="col-md-12">
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
		</div>
	</div>
</body>
</html>