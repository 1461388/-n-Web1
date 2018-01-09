<?php
 session_start();
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['fullname'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('source\connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

	$fullname      = addslashes($_POST['fullname']);
	$email         = addslashes($_POST['email']);
	$phone         = addslashes($_POST['phone']);
	$address       = addslashes($_POST['address']);
    $id_kh         = addslashes($_POST['id_KH']);
	if (!$fullname || !$email || !$phone || !$address)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a> <a href= 'index.php'> Về trang chủ </a>";
        exit;
    }
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a> <a href= 'index.php'> Về trang chủ </a>";
        exit;
    }

    @$addmember = mysql_query("
        UPDATE khach_hang 
        set ten_khach_hang = '$fullname',email = '$email',so_dien_thoai = '$phone',dia_chi = '$address'
        where id_khach_hang = $id_kh;

    ");

    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='profile.php'>Thử lại</a>";
?>