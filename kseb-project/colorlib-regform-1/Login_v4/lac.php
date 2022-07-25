<?php
	include "connect.php";

	 	$uname=$_POST['username'];
	 	$pwd=$_POST['password'];
		$p=md5($pwd);
		$a=mysqli_query($con,"select * from `login` where `uname`='$uname' and `pwd`='$p' or `pwd`='$pwd'");
		$row=mysqli_fetch_array($a);
		if(!empty($row))
		{
			if($row['role']==1)
			{
				session_start();
				$_SESSION['username']=$row['uname'];
				//$_SESSION['password']=$row['Password'];
				$_SESSION['rid']=$row['rid'];
				header("Location:use.php?uid=$row[rid]");
			}
			else if($row['role']==2)
			{
				session_start();
				$_SESSION['username']=$row['uname'];
				//$_SESSION['password']=$row['Password'];
				$_SESSION['rid']=$row['rid'];
				header("Location:resort_home.php?uid=$row[r_id]");
				
			}	
			
			else 
			{	
				session_start();
				$_SESSION['username']=$row['uname'];
				//$_SESSION['password']=$row['Password'];
				$_SESSION['rid']=$row['rid'];
				if($uname==$_SESSION['username'])
				{
				header("Location:Adminhomepage.php");
			}
			else
				{
					header("Location:KLogin.php?error=Invalid Username/Password!!</center>"); 
		
				}
			}
		}
		else
			header("Location:KLogin.php?error=Invalid Username/Password!!</center>"); 
		

			
	?>				

