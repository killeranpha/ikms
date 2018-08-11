<?php
	//đăng ký phiên làm việc của người dùng trên Server
session_start();
$dns = 'mysql:dbname=tv;host=127.0.0.1';
$user = 'root';
$password = '123456';
	// bắt lỗi
try{
	$db = new PDO($dns,$user,$password);
}catch(Exception $ex){
	echo 'error';
}
