<?php
session_start();
include("userconnection.php");
$usr = $_SESSION['abc'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Feedback</title>
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
    <script>
function validateForm() {
  var x = document.forms["myform"]["co_no"].value;
  if (x == "" || x == null) {
    alert("complaint number must be filled out");
    return false;
  }
  var x = document.forms["myform"]["co_type"].value;
  if (x == "" || x == null) {
    alert("complaint type  must be filled out");
    return false;
  }
 
}
</script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
          <!--  <img src="../../../assets/images/logo.svg" alt="logo" /> </a>-->
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
          
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/current_connection.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Electrical Connection</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/complaint.php">
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
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/honecon.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title"> house Consumer Number</span>
              </a>
            </li>

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
            
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/current_connection.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Connection</span>
              </a>
            </li> -->
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/feedback.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Feedback</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/sch.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">schemes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/consumer.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Consumer Number</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/generatebill.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">View Bill</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/profile1.php">
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
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/tables/home_view.php"> House Connection View </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/tables/commercial_view.php"> Commercial Connection  View</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/tables/farm_view.php"> Farm Connection View </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/tables/view_compliant.php">Compliant Status View </a>
                  </li>
                 </ul>
              </div>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/logout.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
             <!--<li class="nav-item">
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

                        <h4 class="card-title">Feedback</h4>
                        <form action="" method="post">
                          
                          <button type="submit" name="view" style="background-color: green"><a href="feddback_view.php">View Feedback</a></button>
                          
                        </form>

                        <form method="POST" action="">

  <div class="clear"></div> 
  <hr class="survey-hr"> 
<label for="feedback">Feedback:</label><br/><br/>
<textarea cols="100" name="feedback" rows="5" style="100%"></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" name="submit" type="submit" value="Submit your review"> 
</form>                  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
  

  include("userconnection.php");
  if(isset($_POST['submit']))
  {
  $sql="INSERT INTO `feedback`(`feedback`, `l_id`) VALUES  ('$_POST[feedback]','$usr')";
  $result=mysqli_query($conn,$sql);
}
?>
  <script type="text/javascript">
  window.history.forward();
  function noBack() {
  window.history.forward();
  }
</script>
         
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