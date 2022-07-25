<?php
        include("connection1.php");

        if(isset($_POST['submit']))
        {
        $conn = mysqli_connect('localhost','root','','kseb');
        $shop_no='$_POST[shop_no]';
        $place='$_POST[place]';
         $panchayathu='$_POST[panchayathu]';
          $ward='$_POST[ward]';
           $Address='$_POST[Address]';
            $district='$_POST[district]';
            $adhno='$_POST[adhno]';
            $adhaar='$_POST[adhaar]';
            $adhno='$_POST[adhno]';
            $own='$_POST[own]';
            $signature='$_POST[signature]';
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
        
		$sql="SELECT * FROM `commecrial` where `shop_no`='$shop_no'";
          $result=mysqli_query($link,$sql)or die("error:".mysqli_error($con));
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
 
        $sql="INSERT INTO commecrial(`shop_no`,`place`,`panchayathu`,`ward`,`Address`,`district`,`adhno`,`adhaar`,`own`,`signature`,`status`,`l_id`)VALUES ('$shop_no','$place','$panchayathu','$ward','$Address','$district','$adhno','$fileName01','$fileName02','$fileName03','pending',$usr)";
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
 }
?>
<!-- <?php
    #$conn = mysqli_connect('localhost','root','','kseb');
    #if(isset($_POST['submit'])){
       # $fileName01 = $_FILES['adhaar']['name'];
        #$fileName02 = $_FILES['own']['name'];
        #$fileName03 = $_FILES['signature']['name'];
        #$fileName04 = $_FILES['signatur']['name'];
        #$fileTmpName01 = $_FILES['adhaar']['tmp_name'];
        #$fileTmpName02 = $_FILES['own']['tmp_name'];
        #$fileTmpName03 = $_FILES['signature']['tmp_name'];
        #$fileTmpName04 = $_FILES['signatur']['tmp_name'];
        #$path01 = "../../../../files/".$fileName01;
        #$path02 = "../../../../files/".$fileName02;
        #$path03 = "../../../../files/".$fileName03 ;
        #$path04 = "../../../../files/".$fileName04 ;
        
        
        #$sql="INSERT INTO commecrial(shop_no,place,panchayathu,ward,Address,district,adhno,adhaar,own,signature,status,l_id)VALUES ('$_POST[shop_no]','$_POST[place]','$_POST[panchayathu]','$_POST[ward]','$_POST[Address]','$_POST[district]','$_POST[adhno]','$fileName01','$fileName02','$fileName03','pending',$usr)";
         #$run = #mysqli_query($conn,$sql);
        
       # if($run){
            #move_uploaded_file($fileTmpName01,$path01);
            #move_uploaded_file($fileTmpName02,$path02);
            #move_uploaded_file($fileTmpName03,$path03);
            #echo "success";
            #echo "<script>alert('saved')</script>";
        }
        #else{
            #echo "error".mysqli_error($conn);
           #echo "error:" . $sql ."<br>" . $conn->error;
        }
        
    }
    
    ?>

 -->
 