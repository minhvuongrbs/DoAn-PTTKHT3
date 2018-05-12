<?php
	$CMND = $_POST['CMND'];
	$AddressNew = $_POST['AddressNew'];
	$AddressCurrent = $_POST['AddressCurrent'];
	require('viet/src/db_connect.php');
    $sql = "INSERT INTO `temporary`(`CitizenID`,`AddressCurrent`, `AddressNew`) VALUES ('{$CMND}','{$AddressCurrent}','{$AddressNew}')";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    header('location: danhsachcongdantamtrutamvang.php');
 ?>
