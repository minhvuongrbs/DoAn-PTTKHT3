<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
    
	$TemId = $_POST['TemId'];
	$CMND = $_POST['CMND'];
	$AddressNew = $_POST['AddressNew'];
	$AddressCurrent = $_POST['AddressCurrent'];
	require('viet/src/db_connect.php');
    $sql = "UPDATE `temporary` SET `AddressCurrent`='{$AddressCurrent}',`AddressNew`='{$AddressNew}' WHERE TemId = '{$TemId}'";
    $result = mysqli_query($conn,$sql);
    header('location: danhsachcongdantamtrutamvang.php');
 ?>