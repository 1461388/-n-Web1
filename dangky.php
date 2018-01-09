<?php
session_start();
include ('source/connect.php');
require_once './vendor/autoload.php';
use Gregwar\Captcha\CaptchaBuilder;


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
				<form id="f" action="xulydnagky.php" method="POST" role="form">
					<legend>Đăng ký tài khoản</legend>
				
					<div class="form-group">
						<label for="txtUsername">Tên đăng nhập: </label>
						<input type="text" class="form-control" id="txtUsername" name="txtUsername">
					</div>
					<div class="form-group">
						<label for="txtPWD">Mật Khẩu: </label>
						<input type="password" class="form-control" id="txtPWD" name="txtPWD">
					</div>
					<div class="form-group">
						<label for="txtPWD2">Xác nhận mật khẩu: </label>
						<input type="password" class="form-control" id="txtPWD2" name="txtPWD2">
					</div>
					<div class="form-group">
						<label for="txtEmail">Email: </label>
						<input type="text" class="form-control" id="txtEmail" name="txtEmail">
					</div>
					<div class="form-group">
						<label for="txtFullname">Full name: </label>
						<input type="text" class="form-control" id="txtFullname" name="txtFullname">
					</div>
					<div class="form-group">
						<label for="txtPhone">Điện thoại: </label>
						<input type="text" class="form-control" id="txtPhone" name="txtPhone">
					</div>
					<div class="form-group">
						<label for="txtAddress">Địa chỉ: </label>
						<input type="text" class="form-control" id="txtAddress" name="txtAddress">
					</div>
					<div class="form-group">
						<?php
							$builder = new CaptchaBuilder;
							$builder->build();
							$_SESSION["captcha"] = $builder->getPhrase();
						?>
						<img src="<?= $builder->inline() ?>" alt="captcha" />
					</div>
					<div class="form-group">
						<label for="txtUserInput">Captcha</label>
						<input type="text" class="form-control" id="txtUserInput" name="txtUserInput">
					</div>
					<button name="btnRegister" type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-ok"></span>
						Đăng ký
					</button>
					<button name="btnReset" type="reset" class="btn btn-primary">
						<span class="glyphicon glyphicon-ok"></span>
						Nhập lại
					</button>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	
</body>
</html>		