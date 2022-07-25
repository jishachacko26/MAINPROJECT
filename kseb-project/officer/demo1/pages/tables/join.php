
<table border="1">
	<tr>
		<th>co_type </th>
		<th>Name </th>
		<th>Phone Number </th>
		
                    
                          
       
	</tr>

<?php
$con = mysqli_connect('localhost','root','','kseb') or die("Connection Failed");
$query="select co.*,re.fullname,ph from complaint3 co,register re where co.c_id=re.rid";
$result = $con->query($query);
                       if ( isset($result->num_rows) && $result->num_rows >0) {
                          while($row = $result->fetch_assoc())
{
	?>
	<tr>
		<td> <?php echo $row["co_type"]; ?> </td>
		<td> <?php echo $row["fullname"]; ?> </td>
		<td> <?php echo $row["ph"]; ?> </td>
	</tr>
		<?php

}
}
?>