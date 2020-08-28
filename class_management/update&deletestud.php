<?php
require 'connection1.php';
$result = mysqli_query($conn,"SELECT * FROM student");
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
<body bgcolor="peachpuff">
	<div align="center">
	<h3><p><font size=20>Update & Delete Student Details</font></p></h3><br><br>
	<table>
	<tr>
	<td><h3>Student Id</h3></td>
      <td><h3>Name</h3></td>
      <td><h3>Email-Id</h3></td>
      <td><h3>Phone-No</h3></td>
      <td><h3>Gender</h3></td>
      <td><h3>Roll-No</h3></td>
      <td><h3>Standard</h3></td>
	  <td><h3>Action</h3></td>
	  <td><h3>Action</h3></td>

	</tr>
	 <?php
	  
	  	while($row = mysqli_fetch_array($result)) {
  ?>
	<tr>
	<td><?php echo $row["studid"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["mailid"]; ?></td>
	<td><?php echo $row["phonenum"]; ?></td>
	<td><?php echo $row["gender"]; ?></td>
	<td><?php echo $row["rollno"]; ?></td>
	<td><?php echo $row["stdid"]; ?></td>
	<td><a href="update_student1.php?studid=<?php echo $row["studid"]; ?>">Update</a></td>
	<td><a href="delete.php?studid=<?php echo $row["studid"]; ?>">Delete</a></td>
	</tr>
	<?php
	
	}
	?>
</table>
<br><br>
<p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: blue;"  value='Home'></input></a></p>
</div>
</body>
</html>