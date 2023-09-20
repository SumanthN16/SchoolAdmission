<?php

if(isset($_GET['action'])){
    $function=$_GET['action'];
}else $function='';

switch($function){

    case 'add_student':
        add_student();
        break;

    case 'DeleteStudent':
        DeleteStudent();
        break;

    case 'DeleteAdmin':
        DeleteAdmin();
        break;

    case 'Edit_admin':
        Edit_Admin();
        break;

        default :
        echo 'no function';
       
}

function add_student(){
    include('connect.php');
        $AN=$_POST["AN"];
        $SName=$_POST["name"];
        $Class=$_POST["class"];
        $Number=$_POST["number"];
        $Aadhar=$_POST["aadhar"];
        $SATS=$_POST["sats"];
        $photo=$_POST["STDing"];
        $Father=$_POST["Father"];
        $Father_Contact=$_POST["fnumber"];
        $Father_Occupation=$_POST["occupation"];
        $Mother=$_POST["mother"];
        $Mother_Contact=$_POST["mnumber"];
        $Mother_Occupation=$_POST["moccupation"];
        $DOB=$_POST["dob"];
        $Gender=$_POST["gender"];
        $Email=$_POST["email"];
        $Caste=$_POST["caste"];
        $MotherT=$_POST["mt"];
        $State=$_POST["State"];
        $District=$_POST["Dist"];
        $Taluk=$_POST["taluk"];
        $PinCode=$_POST["PinCode"];
        $Village=$_POST["Village"];
        $Post=$_POST["post"];
        // $Post=$_POST["post"];
        // $school=$_GET['school']
        if($AN>=90000){
            $insert="INSERT INTO `school9`(`Application_Number`, `Name`, `Class`, `Number`, `Aadhar`, `SATS`, `Photo`, `Father_Name`, `Father_Contact`, `Father_Occupation`, `Mother_Name`, `Mother_Contact`, `Mother_Occupation`, `DOB`, `Gender`, `Email`, `Caste`, `MotherT`, `State`, `District`, `Taluk`, `Pincode`, `Village`, `Post`)        
            VALUES ('$AN','$SName','$Class','$Number','$Aadhar','$SATS','$photo','$Father','$Father_Contact','$Father_Occupation','$Mother','$Mother_Contact','$Mother_Occupation','$DOB','$Gender','$Email','$Caste','$MotherT','$State','$District','$Taluk','$PinCode','$Village','$Post')";    
        }
        else if($AN>=80000){
            $insert="INSERT INTO `school8`(`Application_Number`, `Name`, `Class`, `Number`, `Aadhar`, `SATS`, `Photo`, `Father_Name`, `Father_Contact`, `Father_Occupation`, `Mother_Name`, `Mother_Contact`, `Mother_Occupation`, `DOB`, `Gender`, `Email`, `Caste`, `MotherT`, `State`, `District`, `Taluk`, `Pincode`, `Village`, `Post`)        
            VALUES ('$AN','$SName','$Class','$Number','$Aadhar','$SATS','$photo','$Father','$Father_Contact','$Father_Occupation','$Mother','$Mother_Contact','$Mother_Occupation','$DOB','$Gender','$Email','$Caste','$MotherT','$State','$District','$Taluk','$PinCode','$Village','$Post')";    
        }
        else if($AN>=70000){
            $insert="INSERT INTO `school7`(`Application_Number`, `Name`, `Class`, `Number`, `Aadhar`, `SATS`, `Photo`, `Father_Name`, `Father_Contact`, `Father_Occupation`, `Mother_Name`, `Mother_Contact`, `Mother_Occupation`, `DOB`, `Gender`, `Email`, `Caste`, `MotherT`, `State`, `District`, `Taluk`, `Pincode`, `Village`, `Post`)        
            VALUES ('$AN','$SName','$Class','$Number','$Aadhar','$SATS','$photo','$Father','$Father_Contact','$Father_Occupation','$Mother','$Mother_Contact','$Mother_Occupation','$DOB','$Gender','$Email','$Caste','$MotherT','$State','$District','$Taluk','$PinCode','$Village','$Post')";    
        }
        else{
            $insert="INSERT INTO `school6`(`Application_Number`, `Name`, `Class`, `Number`, `Aadhar`, `SATS`, `Photo`, `Father_Name`, `Father_Contact`, `Father_Occupation`, `Mother_Name`, `Mother_Contact`, `Mother_Occupation`, `DOB`, `Gender`, `Email`, `Caste`, `MotherT`, `State`, `District`, `Taluk`, `Pincode`, `Village`, `Post`)        
            VALUES ('$AN','$SName','$Class','$Number','$Aadhar','$SATS','$photo','$Father','$Father_Contact','$Father_Occupation','$Mother','$Mother_Contact','$Mother_Occupation','$DOB','$Gender','$Email','$Caste','$MotherT','$State','$District','$Taluk','$PinCode','$Village','$Post')";    
       
        }
         $result=mysqli_query($conn,$insert);
                $key_code=$_GET["keycode"];
                echo "$key_code";
                if(!$result){
                    echo "<script>location.href='Registration.html';alert('Something went wrong !!');</script>";
                }else{
                    // echo $filename."Your file was uploaded successfully.";
                    echo "<script>location.href='invoice.php?AN=$AN';alert('Added Successfully..');</script>";
                }                
    }
    


function DeleteStudent(){
    include('connect.php');
      
    $key_code=$_GET["key"];
    
    $delet="DELETE FROM `addmission_details` WHERE keycode=$key_code";
              //echo $insert;
    $result=mysqli_query($conn,$delet); 
    if($result){
        echo "<script> location.href='view_student.php'; alert('Student Deleted Successfully..');</script>"; 
    }else{
        echo "<script> location.href='view_student.php';  alert('Something went wrong !! Please try again..');</script>";
    } 
}
function DeleteAdmin(){
    include('connect.php');
      
    $key_code=$_GET["key"];
    
    $delet="DELETE FROM `users` WHERE keycode=$key_code";
              //echo $insert;
    $result=mysqli_query($conn,$delet); 
    if($result){
        echo "<script> location.href='view_admin.php'; alert('Admin Deleted Successfully..');</script>"; 
    }else{
        echo "<script> location.href='view_admin.php';  alert('Something went wrong !! Please try again..');</script>";
    } 
}

function Edit_Admin(){
    include('connect.php');
      
    $key_code=$_GET["key"];
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["Email"];
    $PAssward=$_POST["password"];
    $Admin_Type=$_POST["adminType"];
    
    $update="UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`Email`='$email',`password`='$PAssward',`Admin_Type`='$Admin_Type' WHERE `keycode`=$key_code";
            //   echo $insert;
    $result=mysqli_query($conn,$update); 
    if($result){
        echo "<script> location.href='view_appointment.php'; alert('Appointment Updated Successfully..');</script>"; 
    }else{
        echo "<script> location.href='view_appointment.php';  alert('Something went wrong !! Please try again..');</script>";
    } 
}

?>