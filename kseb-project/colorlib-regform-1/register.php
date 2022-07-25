<?php
  require("connection1.php");
  require("./phpmailer.php");

$user_array = [];
$details = "";

  if(isset($_POST['submit']))
  {

        $a = $_POST['fullname'];
        $otp = random_int(100000,999999);
        $b = $_POST['birthday'];
        $c = $_POST['email'];
        $p = $_POST['ph'];
        $d = $_POST['gender'];
        $e = $_POST['pwd'];
        $img=$_FILES["img"]["name"];
        $sql="SELECT * FROM `login` where `username`='$c'";
          $result=mysqli_query($link,$sql)or die("error:".mysqli_error($con));
          if(mysqli_num_rows($result)>0)
          {
                   ?>
                   <script>
                   alert("Username Already Exists!!");
                   </script>
                   <?php
                    
                }
                else
                {
                  
                  $user_array[0] = $a;
                  $user_array[1] = $b;
                  $user_array[2] = $c;
                  $user_array[3] = $p;
                  $user_array[4] = $d;
                  $user_array[5] = $e;
                  $user_array[6] = $img;
                  $user_array[7] = $otp;
                  $asa = implode(',', $user_array);
                  verify_mail($c, $otp);
                  header('Location: register.php?verify='.$asa);

// $targetDir="../Upload/";
// $targetFilePath=$targetDir.$img;

// move_uploaded_file($_FILES["img"]["tmp_name"],$targetFilePath);

// $sql=mysqli_query($link,"INSERT INTO `register`( `fullname`, `birthday`, `email`, `ph`,`gender`, `pwd`,`status`,`img`) VALUES ('$a','$b','$c','$p','$d','$e','pending','$img')");
// $sql1=mysqli_query($link,"INSERT INTO `login`( `username`, `password`, `role`, `status`) VALUES ('$c','$e',2,1)");
// echo '<script>
//   window.location.href = "http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/colorlib-regform-1/Login_v4/KLogin.php";
// </script>';
}
}

if(isset($_GET['verify'])){
  $details = $_GET['verify'];
}

if(isset($_POST['otp_submit'])){
  $user_array = [];
  $user_array = explode(',', $details);
  $otp_entered = $_POST['otp_entered'];
  if($otp_entered==$user_array[7]){
    $targetDir="../Upload/";
    $targetFilePath=$targetDir.$img;

    move_uploaded_file($_FILES["img"]["tmp_name"],$targetFilePath);

    $sql=mysqli_query($link,"INSERT INTO `register`( `fullname`, `birthday`, `email`, `ph`,`gender`, `pwd`,`status`,`img`) VALUES ('$user_array[0]','$user_array[1]','$user_array[2]','$user_array[3]','$user_array[4]','$user_array[5]','pending','$user_array[6]')");
    $sql1=mysqli_query($link,"INSERT INTO `login`( `username`, `password`, `role`, `status`) VALUES ('$user_array[2]','$user_array[5]',2,1)");
    echo '<script>
      window.location.href = "http://localhost/KERALA%20STATE%20ELECTRICITY%20BOARD/colorlib-regform-1/Login_v4/KLogin.php";
    </script>';
  }else{
    echo "<script>"."alert('OTP entered is worng')"."</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>KSEB registeration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<script>
function validateForm() {
  var x = document.forms["myform"]["fullname"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["myform"]["birthday"].value;
  if (x == "" || x == null) {
    alert("birthday must be filled out");
    return false;
  }
  var x = document.forms["myform"]["gender"].value;
  if (x == "" || x == null) {
    alert("gender must be filled out");
    return false;
  }
  var x = document.forms["myform"]["email"].value;
  if (x == "" || x == null) {
    alert("email be filled out");
    return false;
  }
  var x = document.forms["myform"]["password"].value;
  if (x == "" || x == null) {
    alert("password must be filled out");
    return false;
  }
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false; 
}
   /*var x = document.forms["myform"]["email"].value;
    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert("Name must be filled out");
    return false;
}*/
}
</script>
       
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">SIGNUP</h2>
                    <form  name ="myform" method="POST" enctype="multipart/form-data" onsubmit ="return validateForm()" action="">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="fullname"id="name" onchange="valname();">
                             <span id="msgname" style="color:red;"></span>
                                                        <!--   <script>    
function valname() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msgname').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msgname').innerHTML=" ";
    return true;
}
</script> -->
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE"
                                        name="birthday"autocomplete="off" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender"required>
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email"id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"autocomplete="off"onblur="ValidateEmail()" required onchange="valemail();">
                            <span id="msgemail" style="color:red;"></span>
                            
                               <script>    
function valemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/)) 
    {
        document.getElementById('msgemail').innerHTML="Start with a small letter ,digits,@ allowed!!";
                document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msgemail').innerHTML=" ";
    return true;
}
</script>
                          

                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="phonenumber" name="ph" pattern="[7-9]{1}[0-9]{9}"autocomplete="off"  onclick=" return phoneNumberCheck(ph)"  required id="ph" onchange="valphone();">
                           <span id="msgph" style="color:red;"></span>
                           <!-- <script type="text/javascript">
                           function valphone() 
{
    var val = document.getElementById('ph').value;

    if (!val.match(/^[7-9]{1}[0-9]{9}$/)) 
    {
        document.getElementById('msgph').innerHTML="Start with a small letter ,digits,@ allowed!!";
                document.getElementById('ph').value = "";
        return false;
    }
document.getElementById('msgph').innerHTML=" ";
    return true;
}
</script> -->
                            
                        </div>
                        <div class="input-group">
                        <div class="key">
							<i class="fa fa-lock"></i>
                            <input class="input--style-1" type="password" placeholder="Password" name="pwd"pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"autocomplete="off"  onclick= "return verifyPassword()"required>
                        </div>
                       </div
                       >

                       <div class="input-group">
                        <div class="key">
                        <i class="fa fa-lock"></i>
                            <input class="input--style-1" type="password" placeholder="Confirm password" name="cp"required>
                        </div>
</div>
<div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                             <input type="file" name="img" id="img"class="form-control"  >

                             <button type="submit" name="upload" class="btn btn-success mr-2">Upload</button>
                            </div>
                </div>
               
                <div class="p-t-20">
                    <input class="btn btn--radius btn--green" type="submit" name="submit" value="Submit">
                    <div >
                        <center><p>already have an account?<a href="Login_v4/KLogin.php">Sign in</a></p></center>
                   </div>
                </div>
            
                </form><br><br>

                <?php
                  if(isset($_GET['verify'])){
                ?>
                  <form method="POST">
                    <div class="input-group">
                      <input class="input--style-1" type="number" placeholder="Enter OTP" name="otp_entered" required>
                      <input type="submit" name="otp_submit" value="Submit" style="width:20%; padding: 10px; outline:none">
                    </div>
                  </form>
                <?php
                  }
                ?>

            </div>
        </div>
    </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</center>
<script type="text/javascript">
function ValidateEmail()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}
</script>
<script type="text/javascript">
function verifyPassword() {  
  var pw = document.getElementById("pwd").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
} 
</script> 
<script> 
function phoneNumberCheck(ph)
{
   var regEx = ^\+{0,2}([\-\. ])?(\(?\d{0,3}\))?([\-\. ])?\(?\d{0,3}\)?([\-\. ])?\d{3}([\-\. ])?\d{4};
   if(phoneNumber.value.match(regEx))
     {
      return true;
     }
   else
     {
     alert("Please enter a valid phone number.");
     return false;
     }
}    
</script> 

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


</html>

<!-- end document-->