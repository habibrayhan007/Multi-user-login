<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

<!-- internal css start -->
	<style>
body {
  background-image: url('cpcf.jpg');
  background-size: cover;
}
</style>

<!-- internal css end -->


<link rel="stylesheet" type="text/css" href="css/style.css">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<!-- Body -->

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light mt-5 px-0">
				<h3 class="text-center text-light bg-danger p-3">Login Here</h3>

				<form action="" method="POST">
					<div class="form-group">
						<input type="text" name="username" class="form-control form-control-lg" placeholder="username" required>
						
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control form-control-lg" placeholder="password" required>
						
					</div>
					
					
					
					<div class="form-group">
						<input type="submit" name="btnLogin" value="submit" class="btn btn-danger btn-block">
					</div>

				</form>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>