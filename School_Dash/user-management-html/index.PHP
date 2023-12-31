<?php
include('connect.php');
$qurry6="SELECT * FROM `school6` ORDER by Application_Number DESC LIMIT 1";
$data6= mysqli_query($conn,$qurry6);
$qurry7="SELECT * FROM `school7` ORDER by Application_Number DESC LIMIT 1";
$data7= mysqli_query($conn,$qurry7);
$qurry8="SELECT * FROM `school8` ORDER by Application_Number DESC LIMIT 1";
$data8= mysqli_query($conn,$qurry8);
$qurry9="SELECT * FROM `school9` ORDER by Application_Number DESC LIMIT 1";
$data9= mysqli_query($conn,$qurry9);
if ($data6) {
    $row = mysqli_fetch_array($data6);
    $n6 = $row[0];
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
if ($data7) {
    $row = mysqli_fetch_array($data7);
    $n7 = $row[0];
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
if ($data8) {
    $row = mysqli_fetch_array($data8);
    $n8 = $row[0];
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
if ($data9) {
    $row = mysqli_fetch_array($data9);
    $n9 = $row[0];
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

?>



<!DOCTYPE html>
<html lang="zxx">


<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>School Management </title>
    <link rel="icon" href="img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="index-2.html"><img src="img/logo.png" alt></a>
            <a class="small_logo" href="index-2.html"><img src="img/mini_logo.png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>School </span>
                    </div>
                </a>
                <ul>
                    <li><a href="Registration6.php">6th Standard</a></li>
                    <li><a href="Registration7.php">7th Standardr</a></li>
                    <li><a href="Registration8.php">8th Standard</a></li>
                    <li><a href="Registration9.php">9th Standard</a></li>
                </ul>
            </li>

            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/4.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Admins</span>
                    </div>
                </a>
                <ul>
                    <li><a href="admin_list.html">Admin List</a></li>
                    <li><a href="add_new_admin.html">Add New Admin</a></li>
                    <li><a href="role_permissions.html">Role & Permissions</a></li>
                </ul>
            </li>

        </ul>
    </nav>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="line_icon open_miniSide d-none d-lg-block">
                            <img src="img/line_img.png" alt>
                        </div>

                        <div class="header_right d-flex justify-content-between align-items-center">

                            <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Neurologist </p>
                                        <h5>Dr. Robar Smith</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                <div class="bg-primary white_card p-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Page header -->
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0  text-white">Dashboard</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Total Students</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary
                      rounded-2">
                                            <i data-feather="target" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="  mb-1 fw-bold">
                                            <?php echo $n6+$n7+$n8+$n9 ?>
                                        </h1>
                                        <!-- <p class="mb-0"><span class="text-success me-2">5</span>Completed</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">6th</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="target" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">

                                        <h1 class="  mb-1 fw-bold">
                                            <?php echo $n6 ?>
                                        </h1>
                                        <!-- <p class="mb-0"><span class="text-success me-2">5</span>Completed</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">7th</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="target" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="  mb-1 fw-bold">
                                            <?php echo $n7 ?>
                                        </h1>
                                        <!-- <p class="mb-0"><span class="text-success me-2">5</span>Completed</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">8th</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="target" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="  mb-1 fw-bold">
                                            <?php echo $n8 ?>
                                        </h1>
                                        <!-- <p class="mb-0"><span class="text-success me-2">5</span>Completed</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">9th</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="target" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="  mb-1 fw-bold">
                                        <?php echo $n9 ?>
                                        </h1>
                                        <!-- <p class="mb-0"><span class="text-success me-2">5</span>Completed</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Registered Students</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <button class="btn btn-outline-primary mb-3" onclick="show6()">6th</button>
                                        <button class="btn btn-outline-primary mb-3" onclick="show7()">7th</button>
                                        <button class="btn btn-outline-primary mb-3" onclick="show8()">8th</button>
                                        <button class="btn btn-outline-primary mb-3" onclick="show9()">9th</button>
                                        <button class="btn btn-outline-primary mb-3" onclick="showAll()">Show All</button>

                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- <div class="add_button ms-2">
                                                <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="row ">
                                        <!-- card  -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-5 mb-xl-0">
                                            <div class="card h-100">
                                                <!-- card header  -->
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                    <h4 class="mb-0">Recent Registered <a href="view_student.php"> Student details</a></h4>

                                                </div>
                                                <!-- table  -->
                                                <div class="card-body">
                                                    <div class="table-responsive table-card">
                                                        <table class="table text-nowrap mb-0 table-centered table-hover">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Student Name</th>
                                                                    <th>Father Name</th>
                                                                    <th>Mother Name</th>
                                                                    <th>Contact</th>
                                                                    <th>Class</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                            $query="SELECT * from school6 ORDER BY keycode DESC LIMIT 10";
                                            $result = mysqli_query($conn,$query);
                                            $a=0;
                                            while($data = mysqli_fetch_array($result))
                                            {                               
                                        ?>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo ++$a; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $data['Name'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $data['Father_Name'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $data['Mother_Name'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $data['Father_Contact'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $data['Class'] ?>
                                                                        </td>
                                                                        
                                                                        
                                                                        
                                                                        

                                                                    </tr>

                                                                </tbody>
                                                                <?php
                                            }
                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="white_card card_height_100  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Visitors</h3>
                                    </div>
                                    <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div id="world-map-markers" class="dashboard_w_map pb_20"></div>
                                <div class="world_list_wraper">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single_progressbar">
                                                        <h6 class="f_s_14 f_w_400">USA</h6>
                                                        <div id="bar4" class="barfiller">
                                                            <div class="tipWrap">
                                                                <span class="tip"></span>
                                                            </div>
                                                            <span class="fill" data-percentage="81"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single_progressbar">
                                                        <h6>Australia</h6>
                                                        <div id="bar5" class="barfiller">
                                                            <div class="tipWrap">
                                                                <span class="tip"></span>
                                                            </div>
                                                            <span class="fill" data-percentage="58"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single_progressbar">
                                                        <h6>Brazil</h6>
                                                        <div id="bar6" class="barfiller">
                                                            <div class="tipWrap">
                                                                <span class="tip"></span>
                                                            </div>
                                                            <span class="fill" data-percentage="42"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single_progressbar">
                                                        <h6>Latvia</h6>
                                                        <div id="bar7" class="barfiller">
                                                            <div class="tipWrap">
                                                                <span class="tip"></span>
                                                            </div>
                                                            <span class="fill" data-percentage="55"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>




    </button>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>
    <script>
        function show6() {
            hideAll();
            document.querySelectorAll('.person').forEach(function(row) {
                if (row.querySelector('td:nth-child(4)').textContent === '6') {
                    row.style.display = 'table-row';
                }
            });
        }

        function show7() {
            hideAll();
            document.querySelectorAll('.person').forEach(function(row) {
                if (row.querySelector('td:nth-child(4)').textContent === '7') {
                    row.style.display = 'table-row';
                }
            });
        }

        function show8() {
            hideAll();
            document.querySelectorAll('.person').forEach(function(row) {
                if (row.querySelector('td:nth-child(4)').textContent === '8') {
                    row.style.display = 'table-row';
                }
            });
        }

        function show9() {
            hideAll();
            document.querySelectorAll('.person').forEach(function(row) {
                if (row.querySelector('td:nth-child(4)').textContent === '9') {
                    row.style.display = 'table-row';
                }
            });
        }

        function showAll() {
            document.querySelectorAll('.person').forEach(function(row) {
                row.style.display = 'table-row';
            });
        }

        function hideAll() {
            document.querySelectorAll('.person').forEach(function(row) {
                row.style.display = 'none';
            });
        }
    </script>

    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="vendors/datepicker/datepicker.js"></script>
    <script src="vendors/datepicker/datepicker.en.js"></script>
    <script src="vendors/datepicker/datepicker.custom.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="vendors/chartjs/roundedBar.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/am_chart/amcharts.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

    <script src="vendors/apex_chart/apex-chart2.js"></script>
    <script src="vendors/apex_chart/apex_dashboard.js"></script>

    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="js/dashboard_init.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 14:02:28 GMT -->

</html>