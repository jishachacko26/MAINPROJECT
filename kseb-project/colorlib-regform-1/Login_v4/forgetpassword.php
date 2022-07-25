

<?php
session_start();
include 'connect.php';

if(isset($_SESSION['abc']))
    $loginid= $_SESSION['abc'];

   
// if(!isset($_SESSION['user']))
// {
// header('location:index.html');
// }
// $loginid=$_SESSION['user'];


if(isset($_POST['change']))
{
  $cpass=$_POST['cpwd'];
  $npass=$_POST['pwd'];
  $res=mysqli_query($con,"select * from login where password='$cpass'") or die(mysqli_error($con));
  $chk=mysqli_num_rows($res);
  if($chk>0)
  {
    mysqli_query($con,"update login set password='$npass' where l_id='$loginid'") or die(mysqli_error($con));
    echo "<script>alert('Password changed successfully');</script>";
  }

  

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script>
    $(document).ready(function() {
$("form").submit(function() {

var validation = $(this); // Select Form
//var log_type = $("#type");




if (validation.find("[name='pwd']").val() == '') {
  alert('Enter new Password');
  return false;
}

if (validation.find("[name='cpwd']").val() == '') {
  alert('Enter confirm Password');
  return false;
}







alert('Password Changed sucessfully');

$("#myform")[1].reset();
});
});
</script>

</head>

    <script type="text/javascript">
function checkpass()
{
if(document.chngpwd.newpassword.value!=document.chngpwd.repassword.value)
{
alert('New Password and Confirm Password field does not match');

return false;
}
return true;
} 

</script>
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="post" name="chngpwd" onsubmit="return checkpass();">
                    <span class="login100-form-title p-b-49">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                   <!--  <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                        <span class="label-input100">Phone Number</span>
                        <input class="input100" type="text" name="ph" placeholder="Type your phone Number">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div> -->
                      <div class="wrap-input100 validate-input m-b-23" data-validate="new password is required">
                        <span class="label-input100">New Password</span>
                        <input class="input100" type="password" name="pwd" placeholder="">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                      <div class="wrap-input100 validate-input m-b-23" data-validate="confirm password  is required">
                        <span class="label-input100">confirm password</span>
                        <input class="input100" type="password" name="cpwd" placeholder="">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>



                    
                    <!--<div class="wrap-input100 validate-input m-b-23" data-validate="Usertype is required">
                        <span class="label-input100">Usertype</span>
                        <input class="input100" type="text" name="usertype" >
                    
                        <select >
                        <option value="Admin">admin</option>
                        <option value="user">user</option>
                        <option value="officer">officers</option>
                        </select>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    

                    </div>-->
                    <!--<p class="text-center" style="color:red;">
                            <?php 
                            // echo $message;
                            ?>
</p>-->

                    

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="change">
                                Change<a href="">
                            
                               </a>
                            </button>
                        </div>
                    </div>

                    

                    <!--<div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="../register.php" class="txt2">
                            Sign Up
                        </a>
                    </div>-->

                    
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
