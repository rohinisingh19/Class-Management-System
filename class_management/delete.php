<?php
	require 'connection1.php';
	
	if(count($_POST)>0){


    	$studid=$_POST['studid'];

		$query="delete from student where studid=$studid";
	
		$r=mysqli_query($conn,$query);
		

	    	$message = "Record Deleted Successfully, Check";
	}
	$result = mysqli_query($conn,"select * from student where studid='" . $_GET['studid'] . "'");
    $row= mysqli_fetch_array($result);
	echo mysqli_error($conn);
	   
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<div align="center">
<body bgcolor="peachpuff"><br>
	<div><font size=5 style="color: red;"><a href="view_student.php"><?php if(isset($message)) { echo $message; } ?></a></font><br><br>
		</div>
	
 <h3><p><font size=20>Delete Student Details</font></p></h3><br><br>
    <form name="frmuser" method="post" action=""><br>

	Student_ID:<br>
    <input type="hidden" name="studid" class="txtField" value="<?php echo $row['studid']; ?>">
    <input type="number" name="studid"  value="<?php echo $row['studid']; ?>" disabled>
    <br>
    Name: <br>
    <input type="text" name="name"  class="txtField" value="<?php echo $row['name']; ?>" disabled>
    <br>
    Email-ID:<br>
    <input type="email" name="mailid" class="txtField" value="<?php echo $row['mailid']; ?>" disabled>
    <br>
    Mobile-No:<br>
    <input type="number" name="phonenum" class="txtField" value="<?php echo $row['phonenum']; ?>" disabled>
    <br>
    Gender:<br>
    <input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>" disabled>
    <br>
    Roll-No:<br>
    <input type="text" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>" disabled>
    <br>
    Standard:<br>
    <input type="number" name="stdid" class="txtField" value="<?php echo $row['stdid']; ?>" disabled>
    <br><br>
    <input type="submit" name="delete" value="Delete" class="button"><br><br>
  

    </form>

<br>
<p><a href="update&deletestud.php"><input type="submit" name="submit" style="font-size:16pt; color: blue;"  value='<<-- Back'></input></a></p>
</body>
</div>
</html>

