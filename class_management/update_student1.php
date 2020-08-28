<?php
	require 'connection1.php';

    if(count($_POST)>0){


    	$studid=$_POST['studid'];
    	$name=$_POST['name'];
    	$email=$_POST['mailid'];
    	$phonenumber=$_POST['phonenum'];
    	$gender=$_POST['gender'];
    	$rollno=$_POST['rollno'];
        $standard=$_POST['stdid'];

       
            mysqli_query($conn,"update student set name='$name',mailid='$email',phonenum='$phonenumber', gender='$gender', rollno='$rollno',stdid='$standard' where studid = '$studid'");
            echo mysqli_error($conn);

             $message = "Record Modified Successfully,Check";

    }

    $result = mysqli_query($conn,"select * from student where studid='" . $_GET['studid'] . "'");
    $row= mysqli_fetch_array($result);
	echo mysqli_error($conn);
?>

<html>
<head>
<title>Update Student Data</title>
</head>
<div align="center">
    <body bgcolor="peachpuff">
    	<div><font size=5><a href="view_student.php"><?php if(isset($message)) { echo $message; } ?></a></font><br><br>
        
		</div>
        
        <h3><p><font size=20>Update Student Data</font></p></h3><br><br>
    <form name="frmuser" method="post" action="">
        
    Student_ID:<br>
    <input type="hidden" name="studid" class="txtField" value="<?php echo $row['studid']; ?>">
    <input type="number" name="studid"  value="<?php echo $row['studid']; ?>" disabled>
    <br>
    Name: <br>
    <input type="text" name="name"  class="txtField" value="<?php echo $row['name']; ?>">
    <br>
    Email-ID:<br>
    <input type="email" name="mailid" class="txtField" value="<?php echo $row['mailid']; ?>">
    <br>
    Mobile-No:<br>
    <input type="number" name="phonenum" class="txtField" value="<?php echo $row['phonenum']; ?>">
    <br>
    Gender:<br>
    <input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
    <br>
    Roll-No:<br>
    <input type="text" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>">
    <br>
    Standard:<br>
    <input type="number" name="stdid" class="txtField" value="<?php echo $row['stdid']; ?>">
    <br><br>
    <input type="submit" name="update" value="Update" class="button"><br><br>
    <p><font size=5 color="blue">Click Update to Set the Changed Details</font></p>

    </form>
    </body>
    <br>
    <p><a href="update&deletestud.php"><input type="submit" name="submit" style="font-size:16pt; color: blue;"  value='<<-- Back'></input></a></p>
</div>
</html>
