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

<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Hall Ticket</title>
    <link rel="icon" href="img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />
    <style>
        /* Font Definitions */
        
        @font-face {
            font-family: "Cambria Math";
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }
        
        @font-face {
            font-family: Calibri;
            panose-1: 2 15 5 2 2 2 4 3 2 4;
        }
        
        @font-face {
            font-family: Cambria;
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }
        /* Style Definitions */
        
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin-top: 0cm;
            margin-right: 0cm;
            margin-bottom: 10.0pt;
            margin-left: 0cm;
            line-height: 115%;
            font-size: 11.0pt;
            font-family: "Calibri", sans-serif;
        }
        
        .MsoPapDefault {
            margin-bottom: 8.0pt;
            line-height: 107%;
        }
        
        @page WordSection1 {
            size: 595.3pt 841.9pt;
            margin: 72.0pt 72.0pt 72.0pt 72.0pt;
        }
        
        div.WordSection1 {
            /* page: WordSection1; */
        }
    </style>

</head>

<body lang=EN-IN style='word-wrap:break-word'>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <div class="WordSection1 d-flex justify-content-center">

        <table class="MsoTable15List1Light " border=0 cellspacing=0 cellpadding=0 width=687 style='width:515.55pt;border-collapse:collapse'>
            <tr>
                <td width=687 valign=top style='width:515.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=723 style='width:542.25pt;border-collapse:collapse;border:none'>
                        <tr>
                            <div id="google_translate_element" class="d-flex justify-content-end"></div>
                        </tr>
                        <tr style='height:143.55pt'>
                            <td width=105 nowrap colspan=2 valign=top style='width:79.0pt;border:solid windowtext 1.0pt; border-right:none;padding:0cm 5.4pt 0cm 5.4pt;height:143.55pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><img width=100% height=100% src="img/logo.png"></p>
                            </td>
                            <td width=445 colspan=5 valign=top style='width:333.6pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:143.55pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;line-height:normal'><b><span style='font-size:14.0pt;'>Alva's Kannada Medium School </span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;line-height:normal'><b><span style='font-size:14.0pt;'>Free Education Scheam 2024-25  </span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><b><span style='font-size:14.0pt;'>Vivekanandanagar, Puttige, Sampige Post</span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><b><span style='font-size:14.0pt;'>Moodubidre Taluk, Dakshina Kannada District - 574227</span></b></p>
                            </td>
                            <td width=173 valign=top style='width:129.65pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:143.55pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr style='height:22.6pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Nudi web 01 e";color:black'>1</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'> Hall Ticket No :</span></p>
                            </td>
                            <td width=63 nowrap valign=top style='width:47.25pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><b><span lang=EN-US style='font-size:16.0pt;font-family: "Times New Roman",serif;color:#C00000'><?php echo $Application_NO; ?></span></b></p>
                            </td>
                            <td width=77 valign=top style='width:57.75pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-family:"Times New Roman",serif; color:black'> S A T S : </span></p>
                            </td>
                            <td width=143 nowrap valign=top style='width:107.3pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'><?php echo $SATS; ?></span></p>
                            </td>
                            <td width=192 colspan=2 valign=top style='width:143.85pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'> Aadhar No: <?php echo $Aadhar; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:22.6pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;color:black'>2</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><u><span lang=EN-US>Venue of Selection Process: </span></u></p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;color:black'>Alva's Campus, Vidyagiri, Moodbidire, Dakshina Kannada</span></p>
                            </td>
                        </tr>
                        <tr style='height:22.6pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>3</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'>Admission for:</span></p>
                            </td>
                            <td width=140 nowrap colspan=2 valign=top style='width:105.0pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><b><span lang=EN-US style='font-size:16.0pt;font-family: "Times New Roman",serif;color:#C00000'><?php echo $Class."th"; ?></span></b></p>
                            </td>
                            <td width=143 valign=top style='width:107.3pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'>Date of Birth:</span></p>
                            </td>
                            <td width=192 colspan=2 valign=top style='width:143.85pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'><?php echo $dob; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:22.6pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>4</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'> Name of the student: </span></p>
                            </td>
                            <td width=140 nowrap colspan=2 valign=top style='width:105.0pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'><?php echo $Name; ?></span></p>
                            </td>
                            <td width=143 valign=top style='width:107.3pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'>Gender :</span></p>
                            </td>
                            <td width=192 nowrap colspan=2 valign=top style='width:143.85pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'><?php echo $Gender; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:22.6pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>5</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt; font-family:"Times New Roman",serif;color:black'>Father/ Mother Name :</span></p>
                            </td>
                            <td width=140 nowrap colspan=2 valign=top style='width:105.0pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'><?php if($Father!=""){echo $Father;} else{echo $Mother;}?></span></p>
                            </td>
                            <td width=143 valign=top style='width:107.3pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'>Contact No :</span></p>
                            </td>
                            <td width=192 nowrap colspan=2 valign=top style='width:143.85pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'><?php if($FContact!=""){echo $FContact;} else{echo $Mother_Contact;} ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:22.6pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>6</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'>Gurdian Name:</span></p>
                            </td>
                            <td width=140 nowrap colspan=2 valign=top style='width:105.0pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>&nbsp;</span></p>
                            </td>
                            <td width=143 valign=top style='width:107.3pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif; color:black'>Contact No :</span></p>
                            </td>
                            <td width=192 nowrap colspan=2 valign=top style='width:143.85pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.6pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr style='height:12.7pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>7</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>Adress:</span></p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr style='height:12.7pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>8</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif;color:black'>Village</span>
                                    <span lang=EN-US style='font-size:12.0pt;font-family:"Nudi web 01 e"'> </span>
                                </p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif;color:black'><?php echo $Village; ?></span>
                                    <span lang=EN-US style='font-size:12.0pt;font-family:"Nudi web 01 e"'> </span>
                            </p>    
                            </td>
                        </tr>
                        <tr style='height:12.7pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>9</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif;color:black'>Post</span></p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'><?php echo $Post; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:12.7pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>10</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif;color:black'>Taluk</span></p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:  solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'> <?php echo $Taluk; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:12.7pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif; color:black'>11</span></p>
                            </td>
                            <td width=177 colspan=2 valign=top style='width:132.6pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif;color:black'>District</span></p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:14.0pt;font-family: "Times New Roman",serif;color:black'><?php echo $District; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:12.7pt'>
                            <td width=71 nowrap valign=top style='width:53.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:14.0pt;font-family: "Times New Roman",serif;color:black'>12</span></p>
                            </td>
                            <td width=177 nowrap colspan=2 valign=top style='width:132.6pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right; line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family: "Times New Roman",serif;color:black'>PIN code</span></p>
                            </td>
                            <td width=475 nowrap colspan=5 valign=top style='width:356.15pt;border-top: none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right: solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US style='font-size:14.0pt;font-family: "Times New Roman",serif;color:black'> <?php echo $PinCode; ?></span></p>
                            </td>
                        </tr>
                        <tr style='height:37.2pt'>
                            <td width=361.5 nowrap colspan=5 valign=top style='width: 361.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:37.2pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><span lang=EN-US color:black '><b><br><br>Signature of Room Supervisor</b></span></p>
                            </td>
                            <td width=361.5 nowrap colspan=5 valign=top style='width:361.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:37.2pt '>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal '><span lang=EN-US  color:black'><b><br><br> ELECTED OFFICERS    </b></span>
                                </p>
                            </td>
                        </tr>
                        <tr style='height:164.4pt'>
                            <td width=723 colspan=8 valign=top style='width:542.25pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:164.4pt'>
                                <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><u><span lang=EN-US style='font-family:"Times New Roman",serif;color:red'>Instructions to Candidates:</span></u></b><br>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> OMR -Filling registration number, name, address, father's name, telephone number slowly and carefully in the OMR-sheet.<br> </span>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> Four circles are given against each question number corresponding to the four answer options in the question paper and candidates are to shade one circle corresponding to the answer in them only with a blue or black ball point pen.<br> </span>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> Recounting of OMR answer sheets as the evaluation and marking system is completely flawless. Appeals for re-evaluation will not be entertained.<br> </span>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> No technical devices of any kind except a photograph, pen, pencil, rubber are allowed inside the examination center.<br> </span>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> Candidates should keep the admit card of the examination till the declaration of the examination result.<br> </span>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>  Duplication is not allowed. Candidates will be disqualified if found to be duplicating.<br> </span>
                                    <span lang=EN-US style='font-size:10.0pt;font-family:"Times New Roman",serif; color:black'>*</span><span lang=EN-US style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> Any kind of recommendation by person or letter in the background of selection process will be considered ineligible for selection.</span>
                                </p>
                            </td>
                        </tr>
                        <tr style='height:13.35pt'>
                            <td width=723 colspan=8 valign=top style='width:542.25pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.35pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center; line-height:normal'><b><u><span lang=EN-US style='font-family:"Nudi 01 e"; color:red'>«. ¸ÀÆ </span></u></b><span lang=EN-US style='font-family:"Nudi 01 e"; color:red'>: ¢éwÃAiÀÄ ºÀAvÀPÉÌ DAiÉÄÌAiÀiÁzÀªÀjUÉ ªÀiÁvÀæªÉÃ ¸ÀA¸ÉÜ¬ÄAzÀ zÀÆgÀªÁtÂ ªÀÄÆ®PÀ w½¸À¯ÁUÀÄvÀÛzÉ.</span></p>
                            </td>
                        </tr>
                        <tr style='height:13.35pt'>
                            <td width=723 colspan=8 valign=top style='width:542.25pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.35pt'>
                                <p class=MsoNormal align=center style='text-align:center'><b><u><span lang=EN-US style='font-size:12.0pt;line-height:115%;font-family:"Nudi 01 e"; color:#002060'>¥ÀæªÉÃ±À ¥ÀvÀæªÀ£ÀÄß ¢é¥ÀæwAiÀÄ°è ªÀÄÄ¢æ¹PÉÆ½î</span></u></b><b><span lang=EN-US style='font-size:12.0pt;line-height:115%;font-family:"Nudi web 01 e"; color:#002060'> </span></b>
                                    <span lang=EN-US style='font-size:12.0pt; line-height:115%;font-family:"Nudi web 01 e";color:#002060'>(</span><span lang=EN-US style='font-size:12.0pt;line-height:115%;font-family:"Times New Roman",serif'>Student Copy &amp; School Copy)</span></p>
                            </td>
                        </tr>
                        <tr style='height:13.35pt'>
                        <td width=723 colspan=8 valign=top style='width:542.25pt;border:solid windowtext 1.0pt; border:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.35pt'>
                                 <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary d-flex justify-content-end" onclick="GetPrint()">Print</button>
                                </div>
                            </td>
                        </tr>
                        <tr height=0>
                            <td width=71 style='border:none'></td>
                            <td width=34 style='border:none'></td>
                            <td width=143 style='border:none'></td>
                            <td width=63 style='border:none'></td>
                            <td width=77 style='border:none'></td>
                            <td width=143 style='border:none'></td>
                            <td width=19 style='border:none'></td>
                            <td width=173 style='border:none'></td>
                        </tr>
                    </table>
                    <p class=MsoNormal></p>
                </td>
            </tr>
        </table>

        <p class=MsoNormal>&nbsp;</p>

    </div>
    <script>
    function GetPrint(){
        window.print();
    }
    
</script>
</body>

</html>