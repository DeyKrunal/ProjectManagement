<?php
echo "Hello";
require_once("connection.php");
// $idd = $_GET['upd'];
$x = $idd;
$q = "select * from emp where id='$idd'";
$d = mysqli_query($con, $q);
$row = mysqli_fetch_array($d);

if (isset($_REQUEST['b1'])) {

    $fname = $_POST['fname'];
    $pass = $_POST['pass1'];

    $fac_img = $_FILES['f1']['name'];
    $path = "upload/" . $fac_img;

    $sql = mysqli_query($con, "insert into emp (name,pass,img) values ('$fname','$pass','$fac_img')");



    move_uploaded_file($_FILES['f1']['tmp_name'], $path);
    header('location:students.php');




}
if (isset($_POST['updbtn'])) {
    $a = $_GET['upd'];
    $id = $_REQUEST['hid'];
    $name = $_POST['fname'];
    $pass = $_REQUEST['pass1'];

    $fac_img = $_FILES['f1']['name'];
    $path = "upload/" . $fac_img;

    $sql = "update emp set name='$name',pass='$pass',img='$fac_img' where id='$id'";
    $b = mysqli_query($con, $sql);
    if ($b) {
        move_uploaded_file($_FILES['f1']['tmp_name'], $path);
        header("location:students.php");
    }

}
?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/add-students.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 15:37:36 GMT -->

<head>

    <title>Preview Image Before Upload</title>
    <script type="text/javascript">
        function previewImage(event) {
            var input = event.target;
            var image = document.getElementById('preview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <style>
        img{
            background-image: url('upload/no.png');
            width: 50px;
            height: 50px;xsd
        }
        #preview {
            border-radius:50px ;
            width: 50px;
            height: 50px;
        }
    </style>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo University Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Dropzone Css -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.svg" width="48" height="48"
                    alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Top Bar -->
    <nav class="navbar p-l-5 p-r-5">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.php"><img src="assets/images/logo.svg" width="30"
                            alt="Oreo"><span class="m-l-10">Oreo</span></a>
                </div>
            </li>
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a>
            </li>
            <li><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
            <li><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
            <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                    role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu pullDown">
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <span class="time">30min ago</span></span>
                                            <span class="message">There are many variations of passages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <span class="time">31min ago</span></span>
                                            <span class="message">There are many variations of passages of Lorem
                                                Ipsum</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella <span class="time">35min ago</span></span>
                                            <span class="message">There are many variations of passages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander <span class="time">35min ago</span></span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum random</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="assets/images/xs/avatar6.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson <span class="time">1hr ago</span></span>
                                            <span class="message">There are many variations of passages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
                </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                    role="button"><i class="zmdi zmdi-flag"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <ul class="dropdown-menu pullDown">
                    <li class="header">Department</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="progress-container progress-primary">
                                        <span class="progress-badge">Computer</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="86"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li>
                                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="progress-container progress-info">
                                        <span class="progress-badge">Medical</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                <span class="progress-value">45%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li>
                                                <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="progress-container progress-warning">
                                        <span class="progress-badge">Art & Design</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="29"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                                <span class="progress-value">29%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li>
                                                <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All</a></li>
                </ul>
            </li>
            <li>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>
            <li class="float-right">

                <a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
                <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            </li>
        </ul>
    </nav>
    <!-- Left Sidebar -->
    <?php include "sidebar.php"; ?>
    <!-- Right Sidebar -->
    <!-- <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i
                        class="zmdi zmdi-comments"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane slideRight active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Skins</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush" class="active">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="card theme-light-dark">
                        <h6>Left Menu</h6>
                        <button class="t-light btn btn-default btn-simple btn-round">Light Menu</button>
                        <button class="t-dark btn btn-default btn-round">Dark Menu</button>
                        <button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox" checked="">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox" checked="">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>Information Summary</h6>
                        <div class="row m-b-20">
                            <div class="col-7">
                                <small class="displayblock">MEMORY USAGE</small>
                                <h5 class="m-b-0 h6">512</h5>
                            </div>
                            <div class="col-5">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="25px"
                                    data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8
                                </div>
                            </div>
                        </div>
                        <div class="row m-b-20">
                            <div class="col-7">
                                <small class="displayblock">CPU USAGE</small>
                                <h5 class="m-b-0 h6">90%</h5>
                            </div>
                            <div class="col-5">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="25px"
                                    data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4
                                </div>
                            </div>
                        </div>
                        <div class="row m-b-20">
                            <div class="col-7">
                                <small class="displayblock">DAILY TRAFFIC</small>
                                <h5 class="m-b-0 h6">25 142</h5>
                            </div>
                            <div class="col-5">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="25px"
                                    data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <small class="displayblock">DISK USAGE</small>
                                <h5 class="m-b-0 h6">60.10%</h5>
                            </div>
                            <div class="col-5">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="25px"
                                    data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane right_chat stretchLeft" id="chat">
                <div class="slim_scroll">
                    <div class="card">
                        <div class="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Recent</h6>
                        <ul class="list-unstyled">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia</span>
                                            <span class="message">There are many variations of passages of Lorem Ipsum
                                                available</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson</span>
                                            <span class="message">All the Lorem Ipsum generators on the</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella</span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="me">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">John</span>
                                            <span class="message">It is a long established fact that a reader</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander</span>
                                            <span class="message">Richard McClintock, a Latin professor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>Contacts</h6>
                        <ul class="list-unstyled">
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline inlineblock">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="slim_scroll">
                    <div class="card user_activity">
                        <h6>Recent Activity</h6>
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <img class="user rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="sl-content">
                                    <h5 class="m-b-0">Admin Birthday</h5>
                                    <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                                </div>
                            </div>
                            <div class="sl-item">
                                <img class="user rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="sl-content">
                                    <h5 class="m-b-0">Add New Contact</h5>
                                    <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                    <small><strong>P:</strong> +264-625-2323</small>
                                    <small><strong>E:</strong> maryamamiri@gmail.com</small>
                                </div>
                            </div>
                            <div class="sl-item">
                                <img class="user rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                <div class="sl-content">
                                    <h5 class="m-b-0">Code Change</h5>
                                    <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                    <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                                </div>
                            </div>
                            <div class="sl-item">
                                <img class="user rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                <div class="sl-content">
                                    <h5 class="m-b-0">New Email</h5>
                                    <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel
                                            Tonn</a>.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Recent Attachments</h6>
                        <ul class="list-unstyled activity">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-collection-pdf l-blush"></i>
                                    <div class="info">
                                        <h4>info_258.pdf</h4>
                                        <small>2MB</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-collection-text l-amber"></i>
                                    <div class="info">
                                        <h4>newdoc_214.doc</h4>
                                        <small>900KB</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-image l-parpl"></i>
                                    <div class="info">
                                        <h4>MG_4145.jpg</h4>
                                        <small>5.6MB</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-image l-parpl"></i>
                                    <div class="info">
                                        <h4>MG_4100.jpg</h4>
                                        <small>5MB</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-collection-text l-amber"></i>
                                    <div class="info">
                                        <h4>Reports_end.doc</h4>
                                        <small>780KB</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-videocam l-turquoise"></i>
                                    <div class="info">
                                        <h4>movie2018.MKV</h4>
                                        <small>750MB</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside> -->
    <!-- Chat-launcher -->
    <div class="chat-launcher"></div>
    <div class="chat-wrapper">
        <div class="card">
            <div class="header">
                <ul class="list-unstyled team-info margin-0">
                    <li class="m-r-15">
                        <h2>Pro. Team</h2>
                    </li>
                    <li>
                        <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                    </li>
                    <li>
                        <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                    </li>
                    <li>
                        <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                    </li>
                    <li>
                        <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="chat-widget">
                    <ul class="chat-scroll-list clearfix">
                        <li class="left float-left">
                            <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">
                                <a class="name" href="javascript:void(0);">Alexander</a>
                                <span class="datetime">6:12</span>
                                <span class="message">Hello, John </span>
                            </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi,
                                    Alexander<br> How are you!</span> </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are
                                    many variations of passages of Lorem Ipsum available</span> </div>
                        </li>
                        <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle"
                                alt="">
                            <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span
                                    class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What
                                    are you doing?</span> </div>
                        </li>
                        <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle"
                                alt="">
                            <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span
                                    class="datetime">6:28</span> <span class="message">I would love to join the
                                    team.</span> </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello,
                                    <br>Michael</span> </div>
                        </li>
                    </ul>
                </div>
                <div class="input-group p-t-15">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-mail-send"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <section class="content profile-page">
        <form method="POST" enctype="multipart/form-data">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Add Student
                            <small class="text-muted">Welcome to Oreo</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Student</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Student</strong> Information <small>Description text here...</small> </h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                                            <li><a href="javascript:void(0);"
                                                    class="waves-effect waves-block">Action</a></li>
                                            <li><a href="javascript:void(0);" class="waves-effect waves-block">Another
                                                    action</a></li>
                                            <li><a href="javascript:void(0);" class="waves-effect waves-block">Something
                                                    else</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            if ($idd == "") {
                                ?>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="fname" class="form-control"
                                                    placeholder="First Name" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="password" name="pass1" class="form-control"
                                                    placeholder="password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="row" >
                                                    <div class="lg-col-6">
                                                        <input type="file" name="f1" class="form-control" accept="image/*"
                                                            onchange="previewImage(event)" placeholder="chooses a file"
                                                            required multiple>
                                                    </div>
                                                    <div class="lg-col-6">
                                                        <img id="preview" alt="Not Found" >
                                                    </div>
                                                   
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="fname" class="form-control"
                                                        placeholder="First Name" required value="<?php echo $row[1] ?>">
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" name="pass1" class="form-control"
                                                        placeholder="password" required value="<?php echo $row[2] ?>">
                                                </div>
                                                <div class="fallback">
                                                    <div class="form-group">
                                                        <div class="row">
                                                        <div class="lg-col-6">
                                                                <img id="preview" src="upload/<?php echo $row[3]; ?>" alt="Preview Image">
                                                            </div>
                                                            <div class="lg-col-6">
                                                                <input type="file" name="f1" class="form-control"
                                                                    accept="image/*" onchange="previewImage(event)"
                                                                    placeholder="chooses a file" required multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <input name="f1" type="file" id="f1" multiple /> -->
                                            </div>
                                            <input type="hidden" value="<?php echo $idd; ?>" name="hid" />
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone No.">
                                </div>
                            </div>-->
                                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="datetimepicker form-control" placeholder="Date of Birth">
                                </div>
                            </div> -->
                                <!--  <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">                                
                                <select class="form-control show-tick">
                                    <option value="">-- Gender --</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">                                
                                <select class="form-control show-tick">
                                    <option value="">-- Department --</option>
                                    <option value="10">BCA</option>
                                    <option value="20">MCA</option>
                                    <option value="20">BCom</option>
                                    <option value="20">MCom</option>
                                </select>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div> -->
                                <!-- <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div> -->
                                <!-- <div class="row clearfix">                             -->
                                <!-- <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" placeholder="Description"></textarea>
                                </div>
                            </div> -->
                                <div class="col-sm-12">
                                    <?php
                                    if ($idd == "") {
                                        ?>
                                        <input type="submit" class="btn btn-raised btn-round btn-primary" value="Submit"
                                            name="b1">
                                        <?php
                                    } else {
                                        ?>
                                        <input type="submit" class="btn btn-raised btn-round btn-primary" value="Update"
                                            name="updbtn">
                                    <?php }
                                    ?>
                                    <button type="submit" class="btn btn-raised btn-round">Cancel</button>
                                </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Account</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                                <button type="submit" class="btn btn-raised btn-round">Cancel</button>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div> -->
            </div>
        </form>
    </section>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Bootstrap JS and jQuery v3.2.1 -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js -->
    <script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
    <script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="assets/js/pages/forms/basic-form-elements.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/add-students.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 15:37:39 GMT -->

</html>