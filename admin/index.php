<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/risol.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fonts/font-awesome.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container" style="margin-top:70px">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-info">
				<div class="panel-heading" style="text-align: center;">L O G I N</div>
				<div class="panel-body">
					<form action="#" method="POST">
						<input type="text" name="user" placeholder="USERNAME" class="form-control">
						<input type="password" name="pass" placeholder="PASSWORD" class="form-control" style="margin-top:15px">
						<input type="submit" value="L O G I N" class="btn btn-info" style="margin-top:15px">
						<hr>
						<br>
						<a href="../index.php" style="margin-left: 43%; font-size: large; font-weight: bold;">Back</a>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<?php
	if (@$_POST['user'] == 'admin' && $_POST['pass'] == 'admin') {
		echo "<script type='text/javascript'>alert('Login sukses');</script>";
		header("Location: ../admin/menu.php");
	}
	?>
	<div id="footer" style="text-align: center;">
		Copyright &copy; 2020 <br>
		Designed by Kelompok 33
	</div>
</body>

</html>