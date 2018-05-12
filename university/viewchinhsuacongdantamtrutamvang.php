<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}


	$TemId = $_GET['TemId'];
	require('viet/src/db_connect.php');
    $sql = "SELECT `TemId`, `CitizenID`, `AddressCurrent`, `AddressNew`,  citizen.FullName, citizen.CMND, citizen.Phone FROM `temporary`,`citizen` WHERE citizen.CitId = temporary.CitizenID AND  TemId = '{$TemId}'";
    $result = mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require('components/header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require('components/sidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Chỉnh sửa thông tin tạm trú tạm vắng</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            
                            <a href="viewthemcongdantamtrutamvang.php" type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>Thêm thông tin TTTV</a>
                        </div>
                    </div>
                </div>
                <div >
                	<div class="row justify-content-center">
	                    <div class="col-lg-6">
	                        <div class="card">
	                            <div class="card-body">
	                                <h4 class="card-title">Chỉnh sửa thông tin tạm trú tạm vắng</h4>
	                                <?php 
									    if (!$result || mysqli_num_rows($result) != 0) {
									        while (true) {
									            $row = mysqli_fetch_assoc($result);
									            if ($row == null) { break;}
									            // echo "<pre>";
									            // echo print_r($row);
									            // echo "</pre>";
									 ?>
	                                <form class="form p-t-20" action="xulichinhsua.php" method="post">
	                                	<input type="number" class="form-control" placeholder="Tên đầy đủ" name="TemId" aria-describedby="basic-addon1" value="<?php echo $row['TemId']  ;?>" style="display: none">
	                                    <div class="form-group">
	                                        <label for="exampleInputuname">Tên đầy đủ</label>
	                                        <div class="input-group mb-3">
	                                            <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
	                                            </div>
	                                            <input type="text" class="form-control" placeholder="Tên đầy đủ" aria-label="Name" name="FullName" aria-describedby="basic-addon1" value="<?php echo $row['FullName']  ;?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="exampleInputEmail1">Số CMND</label>
	                                        <div class="input-group mb-3">
	                                            <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-addon2"><i class=" ti-credit-card"></i></span>
	                                            </div>
	                                            <input type="number" class="form-control" placeholder="Số CMND" name="CMND" aria-label="cmnd" aria-describedby="basic-addon2" value="<?php echo $row['CMND']  ;?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="pwd1">Địa chỉ tạm trú</label>
	                                        <div class="input-group mb-3">
	                                            <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-addon3"><i class="ti-home"></i></span>
	                                            </div>
	                                            <input type="text" class="form-control" placeholder="Địa chỉ tạm trú" name="AddressNew" aria-label="Password" aria-describedby="basic-addon3" value="<?php echo $row['AddressNew']  ;?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="pwd2">Địa chỉ tạm vắng</label>
	                                        <div class="input-group mb-3">
	                                            <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-addon4"><i class="ti-home"></i></span>
	                                            </div>
	                                            <input type="text" class="form-control" placeholder="Địa chỉ tạm vắng" name="AddressCurrent" aria-label="address" aria-describedby="basic-addon4" value="<?php echo $row['AddressCurrent']  ;?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="pwd2">Số điện thoại</label>
	                                        <div class="input-group mb-3">
	                                            <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-addon4"><i class="ti-mobile"></i></span>
	                                            </div>
	                                            <input type="number" class="form-control" placeholder="Số điện thoại" name="Phone" aria-label="phone" aria-describedby="basic-addon4" value="<?php echo $row['Phone']  ;?>">
	                                        </div>
	                                    </div>
	                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
	                                    <a href="danhsachcongdantamtrutamvang.php" class="btn btn-inverse waves-effect waves-light">Cancel</a>
	                                </form>
	                                <?php }} ?>
	                            </div>
	                        </div>
	                    </div>
					</div>
				</div>
                
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>