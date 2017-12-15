<?php
session_start();
if (isset($_SESSION["dang_nhap_chua"])) {
	unset($_SESSION["dang_nhap_chua"]);
	unset($_SESSION["username"]);
	unset($_SESSION["pass"]);
}

header('Location: login.php');
?>