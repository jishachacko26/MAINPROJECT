<?php

require_once('userconnection.php');
session_start();



// For changing servertime zone to India
date_default_timezone_set("Asia/Kolkata");

if(!isset($_SESSION['l_id'])){
    header('Location: index');
    exit();
}

$id = $_SESSION['l_id'];
 $date_in = date("Y-m-d");








?>


<!DOCTYPE html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>user profile</title>
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
           <!-- <img src="../../../assets/images/logo.svg" alt="logo" /> </a>-->
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
          
         
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
              
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
                       <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/compliant.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Compliant</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/tables/adminempreg.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">profileedit</span>
              </a>
            </li> -->
           <!-- <li class="nav-item">
              <a class="nav-link" href="">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Connection</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title"></span>
              </a>
            </li>-->
            
           <!--  <li class="nav-item">
              <a class="nav-link" href="pages/forms/profile1.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">profile</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/current_connection.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Connection</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/billcalculation.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Bill generation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/generatebill.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Bill download</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/tables/adminempreg.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Bill view</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/compliant_verification.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Compliant Verification</span>
              </a>
            </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="pages/tables/bill1.php">
                  <i class="menu-icon typcn typcn-bell"></i>
                  <span class="menu-title">Bill </span>
                </a>
              </li> -->
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/leave.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">leave </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/leave_status.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">leave status </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/compliant_verification.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Compliant Verification</span>
              </a>
            </li>
             <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/feedback.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Feedback</span>
              </a>
            </li> -->
           <!--  <li class="nav-item">
              <a class="nav-link" href="pages/tables/reg_list.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">registerlist</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/adminempreg.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">employeeregister</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic-table.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">basic tables</span>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="pages\tables/reg_list.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">User Pages</span>
              </a>
            </li>-->
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
                      <h4 class="card-title">Leave Application</h4>
                       <form class="forms-sample" method="post" action="" name="myform
                       "enctype="multipart/form-data"onsubmit ="return validateForm()">
                           
                            
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="firstname" name="fname" required=""class="form-group__names"  required onchange="Validateaa();" > 

                
                            </div>
                             <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="lastname" name="lname" required=""class="form-group__names"  required onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" id="ct" onchange="valctype();">Leave Type</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="leave_type"required="">
                              <option>select</option>
                               <option> Sick Leave</option>
                                <option> Hospitalisation Leave</option>
                                 <option> Maternity Leave</option>
                                  <option>Emergency Leave</option>
                                   <option>other</option>
                                     
                             </select>
                            </div>
                          </div>
                         
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="start_date" required=""class="form-group__names"  required onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="end_date" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" id="ct" onchange="valctype();">Session</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="leave_session1"required="">
                              <option>select</option>
                               <option> AN</option>
                                <option> FN</option>
                                 <option> FULL DAY</option>
                                  
                                     
                             </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Applied Date</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="applied_on" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>

                          

                          
                           
                           
                          <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button> 
                           
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            
            </div>
          </div>
         
  <?php
   
  require("userconnection.php");
  if(isset($_POST['submit'])){
  $sql="INSERT INTO leave1(fname,lname,leave_type, start_date,end_date,leave_session1,status,applied_on)VALUES 
  ('$_POST[fname]','$_POST[lname]','$_POST[leave_type]','$_POST[start_date]','$_POST[end_date]','$_POST[leave_session1]','$_POST[applied]','pending')";
  
if( $conn->query( $sql)===TRUE )
{
  echo "<script>alert('saved')</script>";

}
else{
  echo "error:" . $sql ."<br>" . $conn->error;
}
}
?>
  <script type="text/javascript">
  window.history.forward();
  function noBack() {
  window.history.forward();
  }
</script>
         

 <!-- partial -->
        <div class="main-panel">
          <form method="post" action="">
          <div class="content-wrapper">
            <div class="row">
             
             
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer> -->
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