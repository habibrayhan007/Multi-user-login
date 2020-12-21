<?php
session_start();

if (isset($_SESSION['role'])) 
{
	if ($_SESSION['role'] != 'Admin') 
	{
		header('Location: index.php');
	}
}
else
{
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
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
<body class="box">
	<div class=".container fluid">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-success mt-5 px-0">
				<h3 class="text-center text-white p-4">Welcome to Admin Panel <br> <?php echo $_SESSION['User'];?> </h3>	
			</div>
			
		</div>
	</div>

</body>
</html>