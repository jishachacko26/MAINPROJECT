
<?php
session_start();
$usr = $_SESSION['abc'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>staff</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    
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
          <a class="navbar-brand brand-logo" href="../../index.php">
            <!--<img src="../../../assets/images/logo.svg" alt="logo" /> </a>-->
          <a class="navbar-brand brand-logo-mini" href="../../index.php">
            <img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <!--<li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
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
              </div>-->
            </li>
          </ul>
          <!-- <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form> -->
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item dropdown">
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
              <!--<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>-->
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
            <!--<li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>-->
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
            
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/adminempreg.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Bill view</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/compliant_verification.php">
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
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/staff/demo1/pages/forms/leave1.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">leave</span>
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
            
            
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <form method="post" action="">
          <div class="content-wrapper">
            <div class="row">
             
              <div class="col-lg-12 stretch-card">
                <div class="card">

                  <div class="card-body">
                      <h4 class="card-title">Bill Generation</h4>
                       <form class="forms-sample" method="post" action="" name="myform
                       "enctype="multipart/form-data"onsubmit ="return validateForm()">
                           
                            
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Consumer Number</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="consumer number" name="consumer_no" required=""class="form-group__names"  required onchange="valcomp();">
                            </div>
                          <span id="co" style="color:red;"></span>
                            <script>

function valcomp() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{13}/)) 
    {
        document.getElementById('co').innerHTML="Only Numbers are allowed and must contain 13 number";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co').innerHTML=" ";
    return true;
}
</script>
                            
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="name" name="name" required=""class="form-group__names"  required onchange="Validate1();">
                            </div>
                              <span id="msg2" style="color:red;"></span>
                               <script>    
function Validate() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2s').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}

</script>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="address" name="add1" required=""class="form-group__names"  required oonchange="Validate2();">
                            </div>
                              <span id="msg3" style="color:red;"></span>
                               <script>    
function Validate2() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}

</script>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">present reading</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="present reading" name="p_reading" required=""  onchange="valcomp1();">
                            </div>
                          <span id="co1" style="color:red;"></span>
                            <script>

function valcomp1() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{13}/)) 
    {
        document.getElementById('co1').innerHTML="Only Numbers are allowed ";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co1').innerHTML=" ";
    return true;
}
</script>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">email</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="email" name="email" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Previous Reading</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Previous Reading" name="pre" required=""  onchange="valcomp1();">
                            </div>
                          <span id="co2" style="color:red;"></span>
                            <script>

function valcomp() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{13}/)) 
    {
        document.getElementById('co2').innerHTML="Only Numbers are allowed ";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co2').innerHTML=" ";
    return true;
}
</script>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">units</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="units" name="unit" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Amount</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Amount" name="amount" required="" onchange="valcomp3();">
                            </div>
                          <span id="co3" style="color:red;"></span>
                            <script>

function valcomp3() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{13}/)) 
    {
        document.getElementById('co3').innerHTML="Only Numbers are allowed "
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co3').innerHTML=" ";
    return true;
}
</script>
                          </div>
                          <!-- <div class="form-group row">
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
                          </div> -->
                         
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label"> Date</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="start_date" required=""class="form-group__names"  required onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Last Date</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="end_date" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Due Date</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="due" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Due for Disconnection</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="exampleInputPassword2" placeholder="date" name="due1" required=""  onchange="Validateaa();" > 

                
                            </div>
                           <span id="msg" style="color:red;"></span>
                          </div>
                           <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="phone" name="phno1" required=""  onchange="valcomp4();">
                            </div>
                          <span id="co" style="color:red;"></span>
                            <script>

function valcomp4() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{10}/)) 
    {
        document.getElementById('co4').innerHTML="Only Numbers are allowed and must contain 10 number";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co4').innerHTML=" ";
    return true;
}
</script>
                          </div>
                          
                          

                          

                          
                           
                           
                          <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button> 
                           
                        </form>
                      </div>
                      <!-- <form method="post" action="billpdf.php"></form>
                      <<button type="submit"id="pdf" name="generate_pdf"style="background-color: green">download</button>
                    </form> -->


                  <div class="card-body">
                    <h4 class="card-title">process Calculation</h4>
                  
                



<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body>
  <div id="page-wrap">
    <h1>  Electricity Bill</h1>

    <form action="" method="post" id="quiz-form">
               
               <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
               <input type="submit"
                name="unit-submit" id="unit-submit" value="Submit" />

    </form>

    <div>
        <?php echo '<br />' . $result_str; ?>
    </div>
  </div>
 <?php
  

  require("userconnection.php");

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['submit'])){
    $consumer_no=$_POST['consumer_no'];
   $name=$_POST['name'];
   $add1=$_POST['add1'];
   $email=$_POST['email'];
   $p_reading=$_POST['p_reading'];
   $pre=$_POST['pre'];
   $unit=$_POST['unit'];
   $amount=$_POST['amount'];
   $start_date=$_POST['start_date'];
   $amount=$_POST['amount'];
   $start_date=$_POST['start_date'];
   $end_date=$_POST['end_date'];
   $due=$_POST['due'];

   $due1=$_POST['due1'];
   $phno1=$_POST['phno1'];
  $sql="INSERT INTO bill1(consumer_no,name,add1,email,p_reading,pre,unit,amount,start_date,end_date,due,due1,phno1,status,l_id)VALUES ('$_POST[consumer_no]','$_POST[name]','$_POST[add1]','$_POST[email]','$_POST[p_reading]','$_POST[pre]','$_POST[unit]','$_POST[amount]','$_POST[start_date]','$_POST[end_date]','$_POST[due]','$_POST[due1]','$_POST[phno1]','pending','$usr')";
  
if( $conn->query( $sql)===TRUE )
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
$mail->Subject = 'Electricty Bill for KSEB'; 
 
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
    <th scope="row">Consumer Number</th>
    <td>'.$consumer_no.' </td>
  </tr>
  <tr>
    <th scope="row">name</th>
    <td>'.$name.' </td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td>'.$add1.' </td>
  </tr>
  <tr>
    <th scope="row">email</th>
    <td>'.$email.' </td>
  </tr>
  <tr>
    <th scope="row">present Reading</th>
    <td>'.$p_reading.' </td>
  </tr>
  
  <tr>
    <th scope="row">previous Reading</th>
    <td>'.$pre.' </td>
  </tr>
  <tr>
    <th scope="row">unit</th>
    <td>'.$unit.' </td>
  </tr>
  <tr>
    <th scope="row">Amount</th>
    <td>'.$amount.' </td>
  </tr>

  <tr>
  <th scope="row">Start Date</th>
  <td>'.$start_date.'</td>
</tr>
<tr>
  <th scope="row">Endd Date</th>
  <td>'.$end_date.'</td>
</tr>
<tr>
  <th scope="row">Due Date</th>
  <td>'.$due.'</td>
</tr>
<tr>
  <th scope="row">Disconnection Date</th>
  <td>'.$due1.'</td>
</tr>
<tr>
  <th scope="row">Phone Number</th>
  <td>'.$phno1.'</td>
</tr>
</table>
<div style="margin-top:30px">
Explore from here <button="window.location.href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/payment.php">pay</button></div>

 <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JpaJZM430IdeLU" async> </script> </form>
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
<?php
// PHP Program to compute GST from
// original and net prices.

function Calculate_GST($org_cost, $N_price)
{
  // return value after calculate GST%
  return ((($N_price - $org_cost) *
          100) / $org_cost);
}

  // Driver Code
  $org_cost = 100;
  $N_price = 110;
  echo("GST = ");
  echo(Calculate_GST($org_cost, $N_price));
  echo(" % ");

// This code is contributed
// by vt_m.
?>
  <script type="text/javascript">
  window.history.forward();
  function noBack() {
  window.history.forward();
  }
</script>
         



          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- footer class="footer">
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