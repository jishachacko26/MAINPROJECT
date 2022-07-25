<?php
require_once "connect.php";
$message = "";
$role="";
session_start();
if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query= "SELECT * FROM  login WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($row["Role"]=="0")
            {
               $_SESSION['Adminuser']==$row["Username"];
                header('Location:Adminhomepage.php');
 
            }
            else{
                 $_SESSION['User']==$row["Username"];
                 header('Location:use.php');
            }
        }
    }
    else
    {
        header('Location:KLogin.php');
    }
    
}
?>
