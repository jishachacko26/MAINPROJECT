
<!DOCTYPE html>
<html lang="en">
<?php
include ("pages/forms/userconnection.php");
session_start();
$kid=$_SESSION['r_id'];
$v="SELECT * FROM `register` where `rid`='$kid'";
$a1=mysqli_query($conn,$v);
$fetch=mysqli_fetch_array($a1);
?>




  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>USER--HOME</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../assets/images/k2.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
           <!-- <img src="../assets/images/logo.svg" alt="logo" /> --></a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <!-- <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : </li>
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
                  </div>Russian<?php echo $kid; ?>
                </a>
              </div>
            </li>
          </ul> -->
          <!-- <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form> -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
               
                
              </div>
            </li>
            <li class="nav-item dropdown">

              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    
                  </div>
                </a>               

              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../Upload/<?php echo $fetch['img']; ?>"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../Upload/<?php echo $fetch['img'];?>"><a href="pages/forms/profile1.php">
                  <p class="mb-1 mt-3 font-weight-semibold"></p>
                  <p class="font-weight-light text-muted mb-0"></p>
                </div>
                <!-- <a class="dropdown-item" >My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>-->
                <a class="dropdown-item"><center> google map<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4016734.754901389!2d73.88378686307058!3d10.532724037064062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala!5e0!3m2!1sen!2sin!4v1656131210888!5m2!1sen!2sin" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><center><i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item"><a href="pages/forms/logout.php"><center>Sign Out</center></a><i class="dropdown-item-icon ti-power-off"></i></a>
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
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../Upload/<?php echo $fetch['img']?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"value="?php echo $fetch[`fullname`]?>"></h2></p>
                  <p class="designation"><?php echo $fetch['fullname']?></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/complaint.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Complaint</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/payment1.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Payment</span>
              </a>
            </li>
             
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/current_connection.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Electrical Connection</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/forms/feedback.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Feedback</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/sch.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Bulb Schemes</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/forms/consumer.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Consumer Number</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/honecon.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title"> house Consumer Number</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/generatebill.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">View Bill</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/forms/profile1.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Profile Update</span>
              </a>
            </li>
             
             
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
                <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">view Status</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/home_view.php"> House Connection View </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/commercial_view.php"> Commercial Connection  View</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/farm_view.php"> Farm Connection View </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/view_compliant.php">Compliant Status View </a>
                  </li>
                 </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                
                 
               <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">COMPLAINT</h5>
                        <p class="card-text">
                           
                        </p>
                          
                        <a href="pages/forms/complaint.php" class="btn btn-outline-primary btn-sm">
                            Click
                        </a>
                        <!-- <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">ELECTRICAL CONNECTION</h5>
                        <p class="card-text">
                           
                        </p>
                          
                        <a href="pages/forms/current_connection.php" class="btn btn-outline-primary btn-sm">
                           Click
                        </a>

                        <!-- <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a> -->
                    </div>
                </div>
            </div>
<div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">View Complaint Status</h5>
                        <p class="card-text">
                           
                        </p>
                          
                        <a href="pages/tables/view_compliant.php" class="btn btn-outline-primary btn-sm">
                           Click
                        </a>
                        <!-- <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">View Electricty  House Connection Status</h5>
                        <p class="card-text">
                           
                        </p>
                          
                        <a href="pages/tables/home_view.php" class="btn btn-outline-primary btn-sm">
                           Click
                        </a>
                        <!-- <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">View Electricty  Commercial Connection Status</h5>
                        <p class="card-text">
                           
                        </p>
                          
                        <a href="pages/tables/commercial_view.php" class="btn btn-outline-primary btn-sm">
                           Click
                        </a>
                        <!-- <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a> -->
                    </div>
                </div>
            </div>
  <script type="text/javascript">
  window.history.forward();
  function noBack() {
  window.history.forward();
  }
</script>


<!-- marquee style=";position:absolute;left:608;top:10;
font-family:Arial;font-size:24pt;
color:#FFFFFF;height:153;
"scrollamount="4" direction="down">
<a href="pages/forms/complaint.php">Click To Apply Compliant</a></marquee>
<div>
<marquee style=";position:absolute;left:608;top:10;
font-family:Arial;font-size:24pt;
color:#FFFFFF;height:153;
"scrollamount="4" direction="down">
<a href="pages/forms/sch.php">Click To Apply Schemes</a></marquee>
</div>
<div>
<marquee style=";position:absolute;left:608;top:10;
font-family:Arial;font-size:24pt;
color:#FFFFFF;height:153;
"scrollamount="4" direction="down">
<a href="pages/forms/current_connection.php">Click To Apply Electricty Connection</a></marquee> -->
</div>
                
                  <!-- <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Average Price</h5>
                          <p class="text-white mb-0">Since last month</p>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              
            </div>
            
          </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <!--  <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>