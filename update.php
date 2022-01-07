<?php
include 'config.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$id=$_GET['id'];
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$password=mysqli_real_escape_string($con,$_POST['password']);

		$sql="UPDATE crudtable set id=$id, username='$username', password='$password' where id=$id";
		$result=mysqli_query($con,$sql);
		header('location:display.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="row">
	<div class="col-lg-6 m-auto"><br><br>
		<form method="POST">
		<div class="card">	
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Update Operations</h1>
			</div>
			<label>Username:</label>
			<input type="text" name="username" class="form-control"><br>
			<label>Password:</label>
			<input type="password" name="password" class="form-control"><br>
			<button class="btn btn-success" type="submit">Submit</button>


		</div>
		</form>
	</div>
	</div>
</body>
</html>
