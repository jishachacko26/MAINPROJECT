<?php 
    require_once('connection.php'); 
    {
         header("Location:../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN---HOME</title>
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
          <ul class="navbar-nav">
          <!--  <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
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
          </ul>-->
        <!--   <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form> -->
          <!-- <ul class="navbar-nav ml-auto">
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
                    <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
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
            <!-- <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
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
          </ul> -->
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
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">JISHA</p>
                  <p class="designation">Admin</p>
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
              <a class="nav-link" href="pages/tables/reg_list.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">userlist</span>
              </a>
            </li>
            <li class="nav-item">
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
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/farm_view.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">farm view</span>
              </a>
            </li>
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
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/complaint view.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">complaint view</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/comsch.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">commercial scheme</span>
              </a>
            </li>


             <li class="nav-item">
              <a class="nav-link" href="pages/forms/officeradd.php">
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
              <a class="nav-link" href="pages/forms/scheme.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Schemes</span>
              </a>
            </li>
            
            
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
                <span class="menu-title">Setting</span>
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
<body>

    <div id="wrapper">

        <?php 
            require_once("nav.php");
            require_once("sidebar.php");
        ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bills
                        </h1>

                        <!-- Pills Tabbed GENERATED | GENERATE -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#generated" data-toggle="pill">Bills History</a>
                            </li>
                            <li class=""><a href="#generate" data-toggle="pill">Generate New Bill</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="generated">
                                <!-- <h4>{User} Bills(ALL UP TO DATE) goes here{Table form}</h4> -->
                                <!-- DB RETRIEVAL search db where id is his and status is processed -->
                                
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Bill No.</th>
                                                <th>Customer</th>
                                                <th>Date</th>
                                                <th>UNITS Consumed</th>
                                                <th>Amount</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $id=$_SESSION['aid'];
                                            $query1 = "SELECT COUNT(user.name) FROM user,bill WHERE user.id=bill.uid AND aid={$id}";
                                            $result1 = mysqli_query($con,$query1);
                                            $row1 = mysqli_fetch_row($result1);
                                            $numrows = $row1[0];
                                            include("paging1.php");
                                            $result = retrieve_bills_generated($_SESSION['aid'],$offset, $rowsperpage);
                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <td><?php echo 'BN_'.$row['bid']?></td>
                                                    <td height="50"><?php echo $row['user'] ?></td>
                                                    <td><?php echo $row['bdate'] ?></td>
                                                    <td><?php echo $row['units'] ?></td>
                                                    <td><?php echo '$'.$row['amount'] ?></td>
                                                    <td><?php echo $row['ddate'] ?></td>
                                                    <td><?php if($row['status'] == 'PENDING') { echo'<span class="badge" style="background: red;">'.$row["status"].'</span>'; } else { echo'<span class="badge" style="background: green;">'.$row["status"].'</span>';} ?></td>
                                                </tr>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php include("paging2.php");  ?>
                                </div>
                                <!-- .table-responsive -->
                            </div>
                            <!-- .tab-genereated -->

                            <div class="tab-pane fade" id="generate">
                                <!-- <h4>{User} due bill info goes here and each linked to a transaction form </h4> -->
                                <!-- create a clickable list of USERS leading to a modal form to fill up units -->
                                
                                    <?php
                                    $sql = "SELECT curdate1()";
                                    $result = mysqli_query($con,$sql);
                                    if($result === FALSE) {
                                        echo "FAILED";
                                        die(mysql_error()); 
                                    }
                                    $row = mysqli_fetch_row($result);
                                    // echo $row[0];
                                    if ($row[0] == 1) {
                                        include("generate_bill_table.php") ;
                                    }
                                    else
                                    {
                                        //echo "<div class=\"text-danger text-center\" style=\"padding-top:100px; font-size: 30px;\">";
                                        //echo " <b><u>BILL TO BE GENERATED ONLY ON THE FIRST OF THE MONTH</u></b>";
                                        //echo " </div>" ;
										include("generate_bill_table.php") ;
                                    }
                                     
                                    ?>
                            </div> 

                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php 
    require_once("footer.php");
    require_once("js.php");
    ?>

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

