<?php
session_start();
include('addoffconnection.php');
$id = isset($_GET['osid']) ? $_GET['osid'] : '';
$query1 = "SELECT * from ofstadd where osid='".$id."'";
$result = mysqli_query($con, $query1) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<?php

if(isset($_POST['add'])){
    $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $address_line=$_POST['address'];
  $city=$_POST['city'];
  $pincode=$_POST['pincode'];
  $gender=$_POST['gender'];
  $phoneno=$_POST['phone'];
  $email=$_POST['email'];
  
  $status=$_POST['status'];
  $update="UPDATE `cservices` SET `fname`='$fname',`lname`='$lname',`address_line`='$address_line',`city`='$city',`pincode`='$pincode',`phone`='$phoneno','email'='$email',`status`='$status'  WHERE `aid`=$id";
mysqli_query($conn, $update) or die(mysqli_error());
header('location:osdelup.php');
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
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
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
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
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
                  <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="pages/tables/reg_list.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">userlist</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/farmsch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">farm scheme</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/homesch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">home scheme</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/tables/comsch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">commercial scheme</span>
              </a>
            </li>


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
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/admin/demo1/pages/forms/scheme.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Schemes</span>
              </a>
            </li>

           
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>-->
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                    <a class="nav-link" href="../../pages/forms/logout.php"> Logout </a>
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
                        <h4 class="card-title">Officer add </h4>
                       <div class="form-group">
                        <label style="color:black ">First  Name</label>
                        <input name="id" type="hidden" value="<?php echo $row['aid'];?>" />
                        <input type="text"  class="form-control"   id= "fname" style="width:250px;" name="fname"   required onchange="Validate();" value="<?php echo $row['fname'];?>">
         
         
          <span id="msg1" style="color:red;"></span>
<script>    
function Validate()
{
    var val = document.getElementById('fname').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('fname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
         
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <br><label style="color:black ">Last Name</label>
                        <input type="text" class="form-control" name="lname"style="width:250px;" id="sdesc"   required onchange="Validate1();"  value="<?php echo $row['lname'];?>" >
                   </div>
         
          <span id="msg2" style="color:red;"></span>
          <script>    
function Validate1()
{
    var val = document.getElementById('sdesc').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg2').innerHTML=" Only alphabets without space are allowed!!";
                document.getElementById('sdesc').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
         
                    </div>
                   
                 
                 
         
         
                     
           
           
                      <div class="form-group">
                        <label style="color:black ">Address_Line:</label>
                        <input type="text" class="form-control" name="address_line" id="add" style="width:250px;" required onchange="Validname();" value="<?php echo $row['address_line'];?>" ></textarea>
         
         
         
       
        <span id="msg3" style="color:red;"></span>
    <script>    
function Validname()
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/))
    {
        document.getElementById('msg3').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                document.getElementById('add').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
       
         
                    </div>
                   




                     <div class="form-group">
                        <label style="color:black ">city:</label>
                        <input type="text" class="form-control" name="city" id="city" style="width:250px;" required onchange="Validname();" value="<?php echo $row['city'];?>" ></textarea>
         
         
         
       
        <span id="msg10" style="color:red;"></span>
    <script>    
function Validname()
{
    var val = document.getElementById('city').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/))
    {
        document.getElementById('msg10').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                document.getElementById('city').value = "";
        return false;
    }
document.getElementById('msg10').innerHTML=" ";
    return true;
}
</script>
       
         
                    </div>
                   
                 

 <div class="form-group">
                        <label style="color:black ">Pincode:</label>
                        <input type="text" class="form-control" name="pincode" id="pin" style="width:250px;" required onchange="Validname();" value="<?php echo $row['pincode'];?>" ></textarea>
         
         
         
       
        <span id="msg13" style="color:red;"></span>
    <script>    
function Validname()
{
    var val = document.getElementById('pin').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/))
    {
        document.getElementById('msg13').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                document.getElementById('pin').value = "";
        return false;
    }
document.getElementById('msg13').innerHTML=" ";
    return true;
}
</script>
       
         
                    </div>
                   


         
         
                      <div class="form-group">
                        <label style="color:black ">Gender</label>
                   
  <input type="radio" name="gender"  value="male" style="border:5px solid green;"/>Male
     <input type="radio"   name="gender" value="female"/>Female
          </div>
       
           <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="text" class="form-control"  maxlength="10" id="phn" name="phone" style="width: 135px;"  required onchange="Validat();" value="<?php echo $row['phone'];?>"><br>
           
           
           
            <span id="msg4" style="color:red;"></span>
     
<script>
function Validat()
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/))
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
 
   
                document.getElementById('phn').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
</div>
</div>
         
         
            <div class="col-md-3 px-md-1">
                     
                        <label style="color:black ">Email:</label>
                        <input type="email" class="form-control"  id= "email" name="email" style="width:250px;,padding-left:20px"  required onchange="return Validata();"value="<?php echo $row['email'];?>">
          </div>
          <span id="msg15" style="color:red;"></span>
<script>    
function Validata()
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/))
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
   
         document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
}

    </script>
     </div>
                   
                  </div>
         
         
         
         
          <div class="col-md-3 px-md-1">
                     
                       
                    <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label style="color:black ">Select Person</label>
                        <select type="text" name="status" id="status" required="true" class="form-control" value="<?php echo $row['status'];?>">
         
          <option value="<?php echo $row['status'];?>" style="background-color:black"><?php echo $row['status']?></option>
  <option value="staff" style="background-color:black">Staff</option>
  <option value="officer"style="background-color:black">Officer</option>
   
<br>
 
                      </select>
                  </div>
         
       
                      <div class="form-group">
                       
          </div>
         
     
                   
                 
         
         
         
                   
          </div>
         
     
                   
                  </div>
       
          <div class="form-group">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                               <p style="text-align: center;"> <button type="add" class="btn btn-space btn-primary" name="add">Edit</button></p>
                                               
                                            </div>
                                        </div>
                                      </div>
                                    </form>
         
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