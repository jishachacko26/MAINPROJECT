

<?php
   
require("addoffconnection.php");
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  if(isset($_POST['submit'])){

   $email=$_POST['email'];
   $username=$_POST['username'];
   $password=$_POST['password'];
  $sql="INSERT INTO addofficer(type,fname,lname,gender,phone,email,username,password)VALUES 
  ('$_POST[type]','$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[phone]','$_POST[email]','$_POST[username]','$_POST[password]')";
  
if( $con->query( $sql)===TRUE )
{
 require 'PHPMailer1/src/Exception.php'; 
require 'PHPMailer1/src/PHPMailer.php'; 
require 'PHPMailer1/src/SMTP.php'; 
 


  $mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'ksebproject2022@gmail.com';   // SMTP username 
$mail->Password = 'yycqspsnxcomeaoe';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('ksebproject2022@gmail.com', 'kseb'); 
// $mail->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
 
// Add a recipient 
$mail->addAddress($email); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'officer/staff for sign in for KSEB'; 
 
// Mail body content 

$bodyContent .= '<html>
<head>
<meta charset="utf-8">
</head>

<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4hVvyxHSVWVWGu8Uqq1bOi0x7KAhUG22svA&usqp=CAU" style="background-size: cover;">
    <center>
<h1 style="margin-top: 50px;">Welcome to <b style="color:crimson;">KSEB</b></h1>
<p>Hai,</p>
<p>Your new account with KSEBS is ready </p>
Below given is your account details <br>
<table border="1" style="margin-top:30px">
  <tr>
    <th scope="row">Mail From</th>
    <td>KSEB Admin</td>
  </tr>
  <tr>
    <th scope="row">Username</th>
    <td>'.$username.' </td>
  </tr>
  <tr>
  <th scope="row">password</th>
  <td>'.$password.'</td>
</tr>
</table>
<div style="margin-top:30px">
Explore from here--->> <button onclick="window.location.href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/colorlib-regform-1/Login_v4/KLogin.php""> KSEB Account</button></div>
</center>
</body>
</html>'; 

$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 

  echo "<script>alert('saved')</script>";

}
else{
  echo "error:" . $sql ."<br>" . $conn->error;
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../../assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <!-- <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li> -->
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image">
                  <!-- <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p> -->
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <!-- <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="profile image"> -->
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <!-- <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p> -->
                </div>
              </a>
            </li>
            <!-- <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li> -->
             <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Electrical Connection Processing</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/home_view.php"> House Connection </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/comm_view.php"> Commercial Connection </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/farm_view.php"> Farm Connection </a>
                  </li>
                 </ul>
           
            
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/reg_list.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Registerd UserList</span>
              </a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="pages/tables/farmsch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">farm scheme</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/homesch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">home scheme</span>
              </a>
            </li> -->
            <!--  <li class="nav-item">
              <a class="nav-link" href="pages/tables/farm_view.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">farm view</span>
              </a> -->
            <!--</li>
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/comm_view.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">commercial view</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/home_view.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">home view</span>
              </a>
            </li> -->
             <!-- <li class="nav-item">
              <a class="nav-link" href="pages/tables/complaint view.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">complaint view</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/tables/comsch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">commercial scheme</span>
              </a>
            </li>
 -->

             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/forms/officeradd.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Officeradd</span>
              </a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="pages/forms/automatedmail.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">email</span>
              </a>
            </li>-->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/scheme.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Schemes</span>
              </a>
            </li> -->
            
            
            <!--<li class="nav-item">
              <a class="nav-link" href="pages/forms/purchase.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Purchase</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages\forms\emptime.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Time Scheduling</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/reg_list.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">registerlist</span>
              </a>
            </li>-->
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/leave_management.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Leave Management</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/ofleavemanagement.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">officer Leave Management</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/offview.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">officer list View</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/staffview.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">staff list View</span>
              </a>
            </li>
            <!--  <li class="nav-item">
              <a class="nav-link" href="pages/forms/ofdelup.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Edit and Update</span>
              </a>
            </li> -->
           <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/bill1.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Ebill</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/logout.php"> Logout </a>
                  </li>
                 
                  
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">

          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                 
                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Officer add</h4>
                       <form class="forms-sample" method="post" action="">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" id="ct" >Type:Staff / Officer</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="type"required="">
                              <option>select</option>
                               <option> Staff</option>
                                <option> Officer</option>
                               
                                     
                             </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">First  Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="First Name" name="fname"onchange="Validate();">
                              <span id="msg1" style="color:red;"></span>
                            </div>
                            <script>    
function Validate() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}

</script>

                          </div>
                         
                           <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Last Name" name="lname"onchange="Validate1();">
                               <span id="msg2" style="color:red;"></span>
                            </div>
                            <script>    
function Validate1() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}

</script>
                          </div>
                           <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" id="ct" onchange="valctype();">Gender</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="gender"required="">
                              <option>select</option>
                               <option> Male</option>
                                <option> Female</option>
                                 <option> Other</option>
                               
                                     
                             </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Phone Number" name="phone"onchange="Validate1();">
                              <span id="msg3" style="color:red;"></span>
                            </div>
                                <script>
function Validateaa() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{10}/)) 
    {
        document.getElementById('msg3').innerHTML="Only Numbers are allowed and must contain 10 number";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}



</script>
                          </div>
                           <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Email" name="email" required="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">User Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="username" name="username" required="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">password:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="password" name="password" required="">
                            </div>
                          </div>
                           
                        
                          <!--<div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">password</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputPassword2" placeholder="password" name="password">
                            </div>
                          </div>-->
                         
                          <button type="submit" name="submit" id="submit" class="btn btn-success mr-2">ADD</button>
                          <button class="btn btn-light">Cancel</button> 
                           
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             
            
            </div>
          </div>
            <script type="text/javascript">
  window.history.forward();
  function noBack() {
  window.history.forward();
  }
</script>
         
          
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends    -->   </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>