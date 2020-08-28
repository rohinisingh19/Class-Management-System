<?php
require 'connection1.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Student Details</title>
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
 </head>

<body bgcolor="peachpuff">

  <div align="center">
  <h3><p><font size=20>Students Detail</font></p></h3><br><br>
  <?php
  if (mysqli_num_rows($result) > 0) {
  ?>
    <table>
    
    <tr>
      <td><h3>Roll-No</h3></td>
      <td><h3>Name</h3></td>
      <td><h3>Email-Id</h3></td>
      <td><h3>Phone-No</h3></td>
      <td><h3>Gender</h3></td>
      
      <td><h3>Standard</h3></td>
    </tr>

  <?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
  ?>
  <tr>
      <td><?php echo $row["rollno"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["mailid"]; ?></td>
      <td><?php echo $row["phonenum"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>  
      <td><?php echo $row["stdid"]; ?></td>
  </tr>

    <?php
      $i++;
    }
    ?>
  </table>
   <?php
  }
  else{
      echo "No result found";
  }
  ?>

  <br><br>
<p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: blue;"  value='Home'></input></a></p>
</div>
 </body>
</html>