<?php session_start();

if(!isset($_SESSION['username'])){
   header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="vi">

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
    <link href="dist/css/pages/file-upload.css" rel="stylesheet">
    <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
<?php 
if(isset($_POST['btn-insert'])){
$host="localhost";
$database="quanlycongdan";
$username="root";
$password="";
try{
$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);
$sql="Insert into citizen (FullName,Birthday,HomeAddress,HomeTown,PlaceofBirth,Nation,Gender,Nationality,Religion,Date,IssuedBy,
Description,StatusMarriage,Academiclevel,Phone,CMND,Email,Status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt=$pdo->prepare($sql);

$stmt->bindParam(1, $name);
$stmt->bindParam(2, $birthday);
$stmt->bindParam(3, $homeaddress);
$stmt->bindParam(4, $hometown);
$stmt->bindParam(5, $placeofbirth);
$stmt->bindParam(6, $nation);
$stmt->bindParam(7, $gender);

$stmt->bindParam(8, $nationality);
$stmt->bindParam(9, $religion);
$stmt->bindParam(10,$date);
$stmt->bindParam(11, $issuedby);
$stmt->bindParam(12, $description);
$stmt->bindParam(13, $statusmarriage);
$stmt->bindParam(14, $academiclevel);
$stmt->bindParam(15, $phone);
$stmt->bindParam(16, $CMND);
$stmt->bindParam(17, $email);
$stmt->bindParam(18, $status);

$name=$_POST['name'];
$birthday=$_POST['bdate'];

$homeaddress=$_POST['address'];
$hometown=$_POST['hometown'];
$placeofbirth=$_POST['placeofbirth'];
$nation=$_POST['nation'];
if($_POST['gender']=='M'){
    $gender=true;
}else $gender=false;
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$description=$_POST['description'];
$academiclevel=$_POST['academiclevel'];
$phone=$_POST['phone'];
$CMND=$_POST['cmnd'];
$date=$_POST['cmnddate'];
$issuedby=$_POST['issuedby'];
$email=$_POST['email'];
if($_POST['status']=='Y'){
    $status=true;
}else $status=false;
if($_POST['statusmarriage']=='Y'){
    $statusmarriage=true;
}else $statusmarriage=false;

$stmt->execute();
header("Location: quan_ly_cong_dan.php");
}catch (PDOException $e){
    die($e);
}
}
?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require('components/header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
          <?php require('components/sidebar.php'); ?>
        
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
                        <h4 class="text-themecolor">Thêm công dân</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active"><a href="quan_ly_cong_dan.php">Quản lý công dân</a></li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Thông tin công dân</h5>
                                <form method="post" class="form-material form-horizontal">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Họ và tên</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="name" name="name" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" ><span>Ngày sinh</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="date" id="bdate" name="bdate" >
                                            </div>
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Địa chỉ</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="address" name="address" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Quê quán</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="hometown" name="hometown" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Nơi sinh</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="placeofbirth" name="placeofbirth" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Quốc gia</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="nation" name="nation" class="form-control text-muted" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Giới tính</label>
                                            <div class="col-sm-12">
                                                <select name="gender" class="form-control text-muted">
                                                    
                                                    <option value="M" selected="selected">Male</option>
                                                    <option value="F">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                  	<div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Quốc tịch</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="nationality" name="nationality" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Tôn giáo</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="religion" name="religion" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Mô tả</label>
                                            <div class="col-md-12">
                                                <textarea id="description" name="description" class="form-control text-muted" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Ảnh đại diện</label>
                                            <div class="col-sm-12">
                                                <img class="img-responsive" src="../assets/images/users/profile.png" alt="" style="max-width:120px;">
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control text-muted" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Tình trạng hôn nhân</label>
                                            <div class="col-sm-12">
                                                <select name="statusmarriage" class="form-control text-muted">
                                                    
                                                    <option value="Y" selected="selected">Đã kết hôn</option>
                                                    <option value="N">Chưa kết hôn</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Trình độ học vấn</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="academiclevel" name="academiclevel" class="form-control text-muted"">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Số điện thoại</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="phone" name="phone" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Chứng minh nhân dân</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="cmnd" name="cmnd" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="bdate">Ngày cấp</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="date" id="cmnddate" name="cmnddate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Nơi cấp</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="issuedby" name="issuedby" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Email</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="email" name="email" class="form-control text-muted">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Tình trạng công dân</label>
                                            <div class="col-sm-12">
                                                <select name="status" class="form-control text-muted">
                                                    
                                                    <option value="Y" selected="selected">Có quyền</option>
                                                    <option value="N">Đã bị khóa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                   <input type="submit" name="btn-insert" value="Nhập">
                                    <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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
    <!-- Date Picker Plugin JavaScript -->
    <script src="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
    // Date Picker
    jQuery('.mydatepicker').datepicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/pages/jasny-bootstrap.js"></script>
    <script src="dist/js/pages/mask.js"></script>
</body>

</html>