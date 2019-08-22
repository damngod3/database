<?php
	
	require('config/config.php');
	require('config/db.php');

	#Create Query
	$query = 'SELECT * FROM users';

	#get result
	$result = mysqli_query($conn, $query);

	#fetch data
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

	#free result
	mysqli_free_result($result);

	#close connection
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<style >
		h3{
			color: white;
		}
		small {
			color: powderblue;
		}

	</style>
	<title>User Account</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="jumbotron">
		<h1 style="font-family: impact; text-align: center; font-size: 100px;">USERS</h1><br>
		<?php foreach($users as $user): ?>
				<table>
				<div class="container" style="background-color:grey;text-align: center">
				<h3><?php echo $user['username']; ?></h3>
				<small>Created on <?php echo $user['created_at']; ?></small>
				<br>	
				<br>
				<a class="btn btn-primary" href="<?php echo root_url; ?>post.php?id=<?php echo $user['id']; ?>	">Read more</a>
			<hr class="my-4">
				</div>

		
			</table>

	<?php endforeach; ?>
	</div>
	
</body>
</html>
		