<!DOCTYPE html>
<html lang="en">

<?php
include("userconnection.php");
$kid=$_SESSION['r_id'];
?>
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
  var x = document.forms["myform"]["image"].value;
  if (x == "" || x == null) {
    alert("image must be filled out");
    return false;
  }
  var x = document.forms["myform"]["name"].value;
  if (x == "" || x == null) {
    alert(" name  must be filled out");
    return false;
  }
  var x = document.forms["myform"]["Address"].value;
  if (x == "" || x == null) {
    alert("Address must be filled out");
    return false;
  }
  var x = document.forms["myform"]["panchayathu"].value;
  if (x == "" || x == null) {
    alert("panchayathu be filled out");
    return false;
  }
  var x = document.forms["myform"]["Ward"].value;
  if (x == "" || x == null) {
    alert("Ward must be filled out");
    return false;
  }

var x = document.forms["myform"]["Ward"].value;
  if (x == "" || x == null) {
    alert("Ward must be filled out");
    return false;
  
  }
  var x = document.forms["myform"]["place"].value;
  if (x == "" || x == null) {
    alert("place must be filled out");
    return false;
  }
  var x = document.forms["myform"]["adhno"].value;
  if (x == "" || x == null) {
    alert("Adhaar number must be filled out");
    return false;
  }
</script>
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
          
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          
           <!-- <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image"> </a>-->
              <!--<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">-->
                  <!--<img class="img-md rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0" value="<?php echo " ".$fetch['`email`']?>"></p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>-->
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
               <!-- <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>-->
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
          
              <<li class="nav-item">
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
                      <h4 class="card-title">profile</h4>
                       <form class="forms-sample" method="post" action="" name="myform
                       "enctype="multipart/form-data"onsubmit ="return validateForm()">
                           <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                             <input type="file" name="image" id="fileToUpload" class="form-control"  >
                             <button type="submit" name="upload" class="btn btn-success mr-2">Upload</button>
                            </div>

                            </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="name" name="name">
                            </div>
                          </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Address" name="Address">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">district</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="idukki" name="district" disabled="">
                            </div>
                            </div>
                            <div class="form-group row">

                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">substation</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="panchayathu">
                            <option>ayyappancoil</option>
                            <option> upputhara</option>
                                
                                     
                            </select>
                            </div>
                          </div>
                         
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">ward</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Ward" name="Ward">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Place</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="place" name="place">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Adhaar</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Adhaar number" name="adhno">
                            </div></div>
                           
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
            <script type="text/javascript">
  window.history.forward();
  function noBack() {
  window.history.forward();
  }
</script>
         
         
  <?php
   
  require("userconnection.php");
  if(isset($_POST['submit'])){
  $sql="INSERT INTO profile(img,name,Address,panchayathu,Ward,place,adhno,status)VALUES ('$_POST[img]','$_POST[name]','$_POST[Address]','$_POST[panchayathu]','$_POST[Ward]','$_POST[place]','$_POST[adhno]','pending')";
  
if( $conn->query( $sql)===TRUE )
{
  echo "<script>alert('saved')</script>";

}
else{
  echo "error:" . $sql ."<br>" . $conn->error;
}
}
?>


 <!-- partial -->
        <div class="main-panel">
          <form method="post" action="">
          <div class="content-wrapper">
            <div class="row">
             
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PROFILE</h4>
                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Date Of Birth </th>
                          <th>Gender </th>
                          <th>Mobile Number</th>
                          <th>Email</th>
                          <th>image </th>
                          
                       
                          
                  <th>Actions</th>
                        </tr>
                      </thead>

                    
            <tbody>
                <?php
                require("userconnection.php");
            $sql = "SELECT `fullname`, `birthday`, `gender`, `ph`, `email`, `img` FROM `register` WHERE`rid`='$kid'";
                          $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {?>
                        <tr class="table-info">
                          <td> <?php echo $row['fullname']; ?>  </td>
                          <td> <?php echo $row['birthday']; ?> </td>
                          <td> <?php echo $row['gender']; ?> </td>
                          <td> <?php echo $row['ph']; ?> </td>
                          <td> <?php echo $row['email']; ?> </td>
                          <td> <?php echo $row['img']; ?> </td>
                          <td>
       <a a href="delete.php?id=<?php echo $row["id"]; ?>"class="del_btn">Delete</a>
      </td>
      <td>
        <a href="profile1.php?del=<?php echo $row['pid']; ?>" class="del_btn">Delete</a>
      </td>
                        </tr>
                      <?php
                    }}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
          </div>
<?php
     require("userconnection.php");
     if(isset($_POST['edit']))
     {
        $sql = "UPDATE `profile` SET `status`='edit' WHERE `pid`='$_POST[pid]'  ";
         
         
        if( $conn->query($sql)===TRUE )
        {
    
        echo "<script>alert('edit')</script>";

        }
      }
                
    ?>
<?php
     require("userconnection.php");
     if(isset($_POST['delete']))
     {
        $sql = "DELETE FROM `profile` WHERE `pid`='$_POST[pid]'  ";
         
         
        if( $conn->query($sql)===TRUE )
        {
    
        echo "<script>alert('update')</script>";

        }
      }
                
    ?>
<?php 
 
include_once 'userconnection.php';
 
$sql = "UPDATE register SET firstname = 'Hello',lastname = 'Test',mobile = '9874561230' WHERE id=1 ";
 
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully updated";
}
 
   
?>

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