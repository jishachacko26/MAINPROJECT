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
    <title>connection</title>
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
  var x = document.forms["myform"]["house_no"].value;
  if (x == "" || x == null) {
    alert("House Number must be filled out");
    return false;
  }
  var x = document.forms["myform"]["place"].value;
  if (x == "" || x == null) {
    alert(" place must be filled out");
    return false;
  }
  var x = document.forms["myform"]["panchayathu"].value;
  if (x == "" || x == null) {
    alert("panchayathu must be filled out");
    return false;
  }
  var x = document.forms["myform"]["district"].value;
  if (x == "" || x == null) {
    alert("panchayathu must be filled out");
    return false;
  }
  var x = document.forms["myform"]["ward"].value;
  if (x == "" || x == null) {
    alert("ward must be filled out");
    return false;
  }
  var x = document.forms["myform"]["Address"].value;
  if (x == "" || x == null) {
    alert("Address must be filled out");
    return false;
  }

var x = document.forms["myform"]["adhno"].value;
  if (x == "" || x == null) {
    alert("adhno must be filled out");
    return false;
  
  }
  var x = document.forms["myform"]["adhaar"].value;
  if (x == "" || x == null) {
    alert("adhaar document  must be filled out");
    return false;
  }
  var x = document.forms["myform"]["own"].value;
  if (x == "" || x == null) {
    alert("own number must be filled out");
    return false;
  }
  var x = document.forms["myform"]["signature"].value;
  if (x == "" || x == null) {
    alert("signature number must be filled out");
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
              <a class="nav-link" href="http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/user/demo1/pages/forms/honecon.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title"> house Consumer Number</span>
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
                      <h4 class="card-title">Home Connection</h4>
                       <form class="forms-sample" method="post" action="" name="myform
                       "enctype="multipart/form-data"onsubmit ="return validateForm()">
                           
                            
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">House number</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="House Number" name="house_no"onclick="allnumeric(document.form1.text1)" required=""onchange="valcomp();">
                            </div>
                            <span id="co" style="color:red;"></span>
                            <script>

function valcomp() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{3}/)) 
    {
        document.getElementById('co').innerHTML="Only Numbers are allowed and must contain 3 number";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co').innerHTML=" ";
    return true;
}
</script>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">place</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="place" name="place"required=""onchange="Validate();">
                            </div>
                             <span id="msg1" style="color:red;"></span>
                             <script>    
function Validate() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2s').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}

</script>
                          </div>
                          

                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">panchayathu</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="panchayathu" name="panchayathu" required=""onchange="Validate1();">
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
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">ward</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="ward" name="ward" required=""onchange="valcomp1();">
                            </div>
                            <span id="co1" style="color:red;"></span>
                            <script>

function valcomp1() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{3}/)) 
    {
        document.getElementById('co1').innerHTML="Only Numbers are allowed and must contain 3 number";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co1').innerHTML=" ";
    return true;
}
</script>
                          </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Address" name="Address" required=""onchange="Validate3();">
                            </div>
                            <span id="msg3" style="color:red;"></span>
                             <script>    
function Validate3() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2s').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}

</script>
                            </div>
                            
                            <div class="form-group row">

                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">District</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="district" required=""onchange="Validate4();">
                            <option>select</option>
                            <option>Alappuzha</option>
                            <option>Ernakulam</option>
                            <option>Idukki</option>
                            <option>Kannur</option>
                            <option>Kasaragod</option>
                            <option>Kollam</option>
                            <option>Kottayam</option>
            
                            <option>Kozhikode</option>
                            <option>Malappuram</option>
                            <option>Palakkad</option>
                            <option>Pathanamthitta</option>
                            <option>Thiruvananthapuram</option>
                            <option>Thrissur</option>
                            <option>Wayanad</option>
                          
                                
                                     
                            </select>
                            </div>
                             <span id="msg4" style="color:red;"></span>
                             <script>    
function Validate4() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg4').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('exampleInputPassword2s').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
                          </div>
                            
                         
                          
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Adhaar</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Adhaar number" name="adhno"  required=""onchange="valcomp3();">
                            </div>
                            <span id="co3" style="color:red;"></span>
                          <script>

function valcomp3() 
{
    var val = document.getElementById('exampleInputPassword2').value;

    if (!val.match(/^[0-9]{12}/)) 
    {
        document.getElementById('co3').innerHTML="Only Numbers are allowed and must contain 12 number";
  
    
                document.getElementById('exampleInputPassword2').value = "";
        return false;
    }
document.getElementById('co3').innerHTML=" ";
    return true;
}
</script></div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Adhar file </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="Adhaar" name="adhaar" required=""onchange="Checkfiles();">
                            </div>
                            <script type="text/javascript">
        function Checkfiles()
        {
        var fup = document.getElementById('exampleInputPassword2');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
        if(ext == "pdf" )
        {
        return true;
        } 
        else
        {
        alert("Upload pdf files only");
        fup.focus();
        return false;
        }
        }
    </script>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">ownership document </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="ownership document" name="own" required=""onchange="Checkfiles1();">
                          </div>
                            <script type="text/javascript">
        function Checkfiles1()
        {
        var fup = document.getElementById('exampleInputPassword2');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
        if(ext == "pdf" )
        {
        return true;
        } 
        else
        {
        alert("Upload pdf files only");
        fup.focus();
        return false;
        }
        }
    </script>
                          </div>
                           <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">signature </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="signature" name="signature" required=""onchange="Checkfiles2();">

                            </div>
                            <script type="text/javascript">
        function Checkfiles2()
        {
        var fup = document.getElementById('exampleInputPassword2');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
        if(ext == "pdf" )
        {
        return true;
        } 
        else
        {
        alert("Upload pdf files only");
        fup.focus();
        return false;
        }
        }
    </script>
                      

                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">lease document </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="lease document" name="lease" required=""onchange="Checkfiles3();">
                             <script type="text/javascript">
        function Checkfiles3()
        {
        var fup = document.getElementById('exampleInputPassword2');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
        if(ext == "pdf" )
        {
        return true;
        } 
        else
        {
        alert("Upload pdf files only");
        fup.focus();
        return false;
        }
        }
    </script>
                            </div>
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
          



<script type="text/javascript">
  function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      alert('Your Registration number has accepted....');
      document.form1.text1.focus();
      return true;
      }
      else
      {
      alert('Please input numeric characters only');
      document.form1.text1.focus();
      return false;
      }
   } 

</script>

       <?php
        include("userconnection.php");

        if(isset($_POST['submit']))
        {
        $conn = mysqli_connect('localhost','root','','kseb');
        $house_no=$_POST["house_no"];
        
        $place=$_POST["place"];
         $panchayathu=$_POST["panchayathu"];
          $ward=$_POST["ward"];
           $Address=$_POST["Address"];
            $district=$_POST["district"];
            $adhno=$_POST["adhno"];
            
        $fileName01 = $_FILES['adhaar']['name'];
        $fileName02 = $_FILES['own']['name'];
        $fileName03 = $_FILES['signature']['name'];
        #$fileName04 = $_FILES['signatur']['name'];
        $fileTmpName01 = $_FILES['adhaar']['tmp_name'];
        $fileTmpName02 = $_FILES['own']['tmp_name'];
        $fileTmpName03 = $_FILES['signature']['tmp_name'];
        #$fileTmpName04 = $_FILES['signatur']['tmp_name'];
        $path01 = "../../../../files/".$fileName01;
        $path02 = "../../../../files/".$fileName02;
        $path03 = "../../../../files/".$fileName03 ;
        #$path04 = "../../../../files/".$fileName04 ;
        
    $sql="SELECT * FROM `commecrial` where `f_no`='$f_no'";
          $result=mysqli_query($conn,$sql)or die("error:".mysqli_error($conn));
          if(mysqli_num_rows($result)>0)
          {
                   ?>
                   <script>
                   alert("shop_no Already Exists!!");
                   </script>
                   <?php
                    
          }
                else
                {
 
        $sql="INSERT INTO farm(`house_no`,`place`,`panchayathu`,`ward`,`Address`,`district`,`adhno`,`adhaar`,`own`,`signature`,`status`,`l_id`)VALUES ('$house_no','$place','$panchayathu','$ward','$Address','$district','$adhno','$fileName01','$fileName02','$fileName03','pending',$usr)";
         $run = mysqli_query($conn,$sql);

        
        if($run){
            move_uploaded_file($fileTmpName01,$path01);
            move_uploaded_file($fileTmpName02,$path02);
            move_uploaded_file($fileTmpName03,$path03);
            echo "success";
            echo "<script>alert('saved')</script>";
        }
        else{
            echo "error".mysqli_error($conn);
           echo "error:" . $sql ."<br>" . $conn->error;
        }
        
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
             
              <!--<div class="col-lg-12 stretch-card">
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
 
   
?>-->

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