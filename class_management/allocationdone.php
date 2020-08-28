<?php
require 'connection1.php';
$result = mysqli_query($conn,"SELECT * FROM teachsubstd");
?>
<!DOCTYPE html>
<html>
<style >
   table {
    font-family: arial;
    border-collapse: collapse;
    
    }

    td,th {
        border: 1px solid black;
        text-align: center;
        padding: 8px;

    }
</style>
<body bgcolor="#F0FFFF">
	<div align="center">
	<h3><p><font size=20 color="red">Allotted Subject And Standard To Teacher</font></p></h3><br><br>
	<table>
	<tr>
		<td><h3>Standard</h3></td>
		 <td><h3>Subject</h3></td>
	
      <td><h3>Name_Of_Teacher</h3></td>
     
	</tr>
	 <?php
	  
	  	while($row = mysqli_fetch_array($result)) {
  ?>
	<tr>
		<td><?php echo $row["stdid"]; ?></td>
		<td><?php echo $row["subname"]; ?></td>
	
	<td><?php echo $row["name"]; ?></td>
	
	
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