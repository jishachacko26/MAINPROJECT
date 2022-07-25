<?php
session_start();
if(isset($_SESSION['role']))
{
    if($_SESSION['role'] != 'admin')
    {
        header('Location:use.php');
    }

else{
    header("'Location:Adminhomepage.php");
}
}

?>
<html>
    <body>
    <h2>Welcome to admin home Page</h2>
    
   
</body>
    </html>