<?php
        include("connection1.php");

        if(isset($_POST['submit']))
        {
        $a = $_POST['fullname'];
        $b = $_POST['birthday'];
        $c = $_POST['email'];
        $d = $_POST['gender'];
        $e = $_POST['pwd'];
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

              $sql1=mysqli_query($link,"INSERT INTO `register`(`fullname`, `birthday`, `gender`, `email`, `pwd`)VALUES('$a','$b','$d','$c','$e')");
              $sql2=mysqli_query($link,"INSERT INTO `login`(`username`, `password`, `role`, `status`) VALUES('$c','$e',2,1)");
			  header("Location:Login_v4/KLogin2.php");
		  }
          }
?>