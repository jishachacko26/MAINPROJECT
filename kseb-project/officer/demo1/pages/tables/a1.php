    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kseb";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    ?>

    <?php
        $query2 = "select * from autonumber order by id desc limit 1";
        $result2 = mysqli_query($conn,$query2);
        $row = mysqli_fetch_array($result2);
        while ($row = mysqli_fetch_array($result2))
        $last_id = $row['autoid'];
        if ($last_id == "")
        {
            $customer_ID = "115646701012";
        }
        else
        {
            $customer_ID = substr($autoid, 9);
            $customer_ID = intval($customer_ID);
            $customer_ID = "CUS" . ($customer_ID + 1);
        }
    ?>

<?php
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $name = $_POST["name"];
            // $course = $_POST["course"];
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO autonumber (id,name )VALUES ('$id','$name')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
            <div align="left">
              <h3>Autono Generating in php</h3>
            </div>
            <div align="left">
             <label>consumer No</label>
            <input type="text" class="form-control" name="id" id="id" style="color: red" value="<?php echo $customer_ID; ?>" readonly>
            </div>
            <div align="left">
                <label> Name</label>
                <input type="text" class="form-control" name="name" id="stname">
            </div>
      <!-- <div align="left">
                <label>Employee Salary</label>
                <input type="text"  class="form-control" name="course" id="course">
       </div> -->
</br>
     <div align="left">
        <input type="submit" value="ADD">
     </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></div>
</div>
</div>
</body>
</html>