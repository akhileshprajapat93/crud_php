
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<br><br>
			<h1 class="text-center">Display Table Data</h1>
			<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>ID</th>
				<th>Username</th>
				<th>Passoword</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
			<?php
				include 'config.php';

				$sql="SELECT * from `crudtable`";
				$result=mysqli_query($con,$sql);
				while($final=mysqli_fetch_array($result)){


			?>
			<tr class="text-center">
				<td><?php echo $final['id']?></td>
				<td><?php echo $final['username']?></td>
				<td><?php echo $final['password']?></td>
				<td><button class="btn btn-danger"><a class="text-white" href="delete.php?id=<?php echo $final['id']?>">Delete</a></button></td>
				<td><button class="btn btn-success"><a class="text-white" href="update.php?id=<?php echo $final['id']?>">Update</a></button></td>
			</tr>
			<?php
				}
			?>
			</table>
		</div>
	</div>
</body>
</html>