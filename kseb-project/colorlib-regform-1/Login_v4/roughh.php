<?php
session_start();
if(isset($SESSION['Loginuser']))
{
    header('Location:index.php');
}


?>*
 <?php $_SESSION['Admin'];?>
 <?php
session_start();
require_once "connect.php";
  $message = "";
  $role="";
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
           if($row["Role"]=="Admin")
           {
$_SESSION['Loginuser']==$row["Username"];
header('Location:Adminhomepage .php');

           }
        
           else{
            $_SESSION['Loginuser']==$row["Username"];
            header('Location:use.php');
 }
}
}
/*else
{
    header('Location:index.php');
   
}*/
}
?>
<?php
							echo $message;
							?>
                            <?php
session_start();
if(isset($SESSION['Loginuser']))
{
    header('Location:index.php');
}

?>