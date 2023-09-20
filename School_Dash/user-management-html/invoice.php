<?php

include('connect.php');
$AP=$_GET["AN"];
if($AP>=90000){
    $qurry="SELECT * FROM `school9` WHERE Application_Number=$AP";
}
else if($AP>=80000){
    $qurry="SELECT * FROM `school8` WHERE Application_Number=$AP";
}
else if($AP>=70000){
    $qurry="SELECT * FROM `school7` WHERE Application_Number=$AP";
}
else{
    $qurry="SELECT * FROM `school6` WHERE Application_Number=$AP";
}

$result= mysqli_query($conn,$qurry);
$row=mysqli_fetch_array($result);
$Application_NO=$row['Application_Number'];
$SATS=$row['SATS'];
$Aadhar=$row['Aadhar'];
$Class=$row['Class'];
$dob=$row['DOB'];
$Name=$row['Name'];
$Gender=$row['Gender'];
$Father=$row['Father_Name'];
$Contact=$row['Number'];
$Mother=$row['Mother_Name'];
$Mother_Contact=$row['Mother_Contact'];
$FContact=$row['Father_Contact'];
$FO=$row['Father_Occupation'];
$Village=$row['Village'];
$Post=$row['Post'];
$Taluk=$row['Taluk'];
$District=$row['District'];
$PinCode=$row['Pincode'];
// echo $PinCode;


?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 14:03:07 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>
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
        <div class="container pt-3  ">
            <div class="card">
                <div class="card-header">
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
                <div class="card-body">        
                    <form action="" method="get">
                        <div class="row p-3">
                            <div class="col-md-12 d-flex justify-content-center">
                                <H1>Hall ticket</H1>
                            </div>
                            <div class="row d-flex justify-content-center">
                                    <div class="row d-flex">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Hall Ticket No: <?php echo $Application_NO; ?> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">SATS: <?php echo $SATS; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Aadhar No: <?php echo $Aadhar; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Enterence Exam Location: 
                                            </div>    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Alva's Vidyagiri, Mudbhidri, Dakshina Kannada
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Admission for: <?php echo $Class."th"; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Date of Birth: <?php echo $dob; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Name of the Student: <?php echo $Name; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Gender: <?php echo $Gender; ?>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="row d-flex justify-content">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Father/Mother Name: <?php if($Father!=""){echo $Father;} else{echo $Mother;}?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                Contact No: <?php if($FContact!=""){echo $FContact;} else{echo $Mother_Contact;} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row d-flex justify-content">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            Gurdain Name: 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            Contact No: 
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            Address: 
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            Village: 
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                            <?php echo $Village; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            Post: 
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                 <?php echo $Post; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            Taluk: 
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <?php echo $Taluk; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            District: 
                                            </div>
                                        </div>
                                        <div class="col-md-8"> 
                                            <div class="form-group">
                                            <?php echo $District; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            PinCode: 
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                            <?php echo $PinCode; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            Officer Sign
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            Dr Mohan ALva
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="GetPrint()"></button>
                    </form>
                </div>
                </div>
                
            </div>
        </div>
    </div>
        <div class="container p-3">
            <div class="card1">
            </div>
        </div>
        </div>
    </section>
<script>
    function GetPrint(){
        window.print();
    }
</script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 14:03:07 GMT -->

</html>