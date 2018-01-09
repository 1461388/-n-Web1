<?php 
	require_once "../source/connect.php";

	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "delete from danh_muc where id_danh_muc = $id";
		mysql_query($sql);
		header('Location: TrangAdminCate.php');
	}
 ?>