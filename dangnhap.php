<?php
session_start();

require_once './vendor/autoload.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title>D15</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
	<br />
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-2">
				<form id="f" action="xulydangnhap.php" method="POST" role="form">
					<legend>Đăng nhập tài khoản</legend>
				
					<div class="form-group">
						<label for="txtUsername">Tên đăng nhập: </label>
						<input type="text" class="form-control" id="txtUsername" name="txtUsername">
					</div>
					<div class="form-group">
						<label for="txtPWD">Mật Khẩu: </label>
						<input type="password" class="form-control" id="txtPWD" name="txtPWD">
					</div>
					<button name="btnLogin" type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-ok"></span>
						Đăng nhập
					</button>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	
</body>
</html>		