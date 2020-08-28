<?php
require 'connection1.php';
$result = mysqli_query($conn,"SELECT * FROM teacher");
?>
<!DOCTYPE html>
<html>
<style >
   table {
    font-family: arial;
    border-collapse: collapse;
   
    }

    td,th {
        border: 3px solid black;
        text-align: left;
        padding: 8px;

    }
</style>
<body bgcolor="lightblue">
	<div align="center">
	<h3><p><font size=20>Update & Delete Teacher Details</font></p></h3><br><br>
	<table>
	<tr>
	<td><h3>Teacher Id</h3></td>
      <td><h3>Name</h3></td>
      <td><h3>Email-Id</h3></td>
      <td><h3>Phone-No</h3></td>
      <td><h3>Gender</h3></td>
      <td><h3>Qualification</h3></td>
      <td><h3>Experience</h3></td>
	  <td><h3>Action</h3></td>
	  <td><h3>Action</h3></td>

	</tr>
	 <?php
	  
	  	while($row = mysqli_fetch_array($result)) {
  ?>
	<tr>
	<td><?php echo $row["tid"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["mailid"]; ?></td>
	<td><?php echo $row["phonenum"]; ?></td>
	<td><?php echo $row["gender"]; ?></td>
	<td><?php echo $row["qualification"]; ?></td>
	<td><?php echo $row["Experience"]; ?></td>
	<td><a href="update_teach.php?tid=<?php echo $row["tid"]; ?>">Update</a></td>
	<td><a href="delete_teach.php?tid=<?php echo $row["tid"]; ?>">Delete</a></td>
	</tr>
	<?php
	
	}
	?>
</table>
<br><br>
<p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</div>
</body>
</html>