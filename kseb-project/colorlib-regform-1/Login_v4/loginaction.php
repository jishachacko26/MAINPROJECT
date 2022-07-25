<?php
session_start();

include "connect.php";
  $u=$_POST['username'];
 	$p=$_POST['password'];
	$v="SELECT `l_id`, `username`, `password`, `role`, `status` FROM `login` where `username`='$u' and `password`='$p'";
    $a1=mysqli_query($con,$v);

	$v1="SELECT `rid`, `fullname`, `birthday`, `gender`, `ph`, `email`, `pwd`, `status`, `img` FROM `register` WHERE `email`='$u'";
  $a2=mysqli_query($con,$v1);
  $r1=mysqli_fetch_array($a2);
while($row1=mysqli_fetch_array($a1))
{
	if(!empty($row1))
	 {
         if($row1['role']==1)
         {
         	
           header("Location:../../officer/demo1/index.php");
         }
         else if($row1['role']==2)
         {
          $_SESSION['abc']=$row1['l_id'];
          $_SESSION['r_id']=$r1['rid'];
          header("Location:../../user/demo1/index.php");
          
         }
         else if($row1['role']==3)
         {
          $_SESSION['abc']=$row1['l_id'];
          $_SESSION['r_id']=$r1['rid'];
          header("Location:../../staff/demo1/index.php");
          
         }
         else
         {
          header("Location:../../admin/demo1/index.php");
         }
	  }
	 else 
	  {	

		header("Location:KLogin.php?error=Invalid Username/Password!!</center>"); 
	  }
 }
		
?>