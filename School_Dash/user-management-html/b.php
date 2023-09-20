<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <!-- <link rel="icon" href="img/mini_logo.svg" type="image/svg"> -->
    <link rel="shortcut icon" href="img/minilogo.png" type="image/png">
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
    <style>
        .card1 {
            background: rgba( 255, 255, 255, 0.45);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37);
            backdrop-filter: blur( 3.5px);
            -webkit-backdrop-filter: blur( 3.5px);
            border-radius: 10px;
        }
        
        .error {
            color: red;
        }
    </style>
</head>

<body class="crm_body_bg">

    <section>
        <div class="container">
            <div class="p-3"></div>
            <div class="card1 row d-flex justify-content-center">
                <div class="row">
                    <div class="d-flex justify-content-center row">
                        <div class="col-3 d-flex justify-content-center pt-3 pb-3"><img src="img/logo.png" alt="" width="50%"></div>

                        <div class="col-9 text-center pt-3 pb-3">
                            <h1>ಆಳ್ವಾಸ್ ಕನ್ನಡ ಮಾಧ್ಯಮ ಶಾಲೆ</h1><br>
                            <h4>Free Education Scheme</h4>
                            <h4>Alva's Education Foundation(R)</h4>
                            <h6>Vivekananda Nagara, Puttige, Sampige Post, Moodubidre, Pin - 574227</h6>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <form action="index.html">
            <div class="container pt-5">
                <div class="card1 p-5">
                    <div class="row p-2 justify-content-center">
                        <div class="col-lg-6 ">
                            <div class="white_box mb_30 modal-content cs_modal">

                                <!-- <div class="modal-content cs_modal"> -->
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Login</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input class="form-control" type="text" name="name" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control" type="email" name="email" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input class="form-control" type="number" name="contact" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">SATS Number:</label>
                                        <input class="form-control" type="number" name="sats" id="" required>
                                    </div>
                                    <button class="btn btn-outline-success mb-3" type="submit"  name="loginbtn">Login</button>
                                </div>

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <?php                      
                if (isset($_POST['loginbtn'])){
                    $Name=$_POST['name'];
                    $Email = $_POST['email'];
                    $Phone = $_POST['contact'];
                    $SATS = $_POST['sats'];
                
                $select = mysqli_query($conn," SELECT * FROM school WHERE Email = '$Email' AND password = '$Password' ");
                $row  = mysqli_fetch_array($select);
                // echo $row;
                $name = $row['email'];
                if(is_array($row)) {
                    $_SESSION["Email"] = $row['Email'];
                    $_SESSION["Password"] = $row['password'];
                }   else {
                    echo '<script type = "text/javascript">';
                    echo 'alert("Invalid Username or Password !");';
                    echo 'window.location.href = "sign-in.php"';
                    echo '</script>';
                }
                }
                if(isset($_SESSION["Email"]) && ($_SESSION["Password"])){
                    echo '<script type = "text/javascript">';
                    echo 'window.location.href = "index.php"';
                    echo '</script>';
                }
            ?>
    </section>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

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

    <script src="js/custom.js"></script>
</body>


</html>