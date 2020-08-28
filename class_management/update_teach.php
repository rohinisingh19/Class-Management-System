<?php
	require 'connection1.php';

    if(count($_POST)>0){


    	$tid=$_POST['tid'];
        $name=$_POST['name'];
        $email=$_POST['mailid'];
        $phonenumber=$_POST['phonenum'];
        $gender=$_POST['gender'];
        $quali=$_POST['qualification'];
        $experi=$_POST['Experience'];

        mysqli_query($conn,"update teacher set  name='$name',mailid='$email',phonenum='$phonenumber', gender='$gender', qualification='$quali',Experience='$experi' where tid = $tid");
        echo mysqli_error($conn);
         mysqli_query($conn,"update teachsubstd set  name='$name' where tid = $tid");

        $message = "Record Modified Successfully, Check";

    }

    $result = mysqli_query($conn,"select * from teacher where tid='" . $_GET['tid'] . "'");
    $row= mysqli_fetch_array($result);
	echo mysqli_error($conn);
?>
<html>
<head>
<title>Update Teacher Data</title>
</head>
<div align="center">
    <body bgcolor="lightblue">
    	<div><font size=5 style="color: red;"><a href="view_teach.php"><?php if(isset($message)) { echo $message; } ?></a></font><br><br>
		</div>
        
        <h3><p><font size=20>Update Teacher Data</font></p></h3><br><br>
    <form name="frmuser" method="post" action="">
        
    Teacher_ID:<br>
    <input type="hidden" name="tid" class="txtField" value="<?php echo $row['tid']; ?>">
    <input type="number" name="tid"  value="<?php echo $row['tid']; ?>" disabled>
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
    Qualification:<br>
    <input type="text" name="qualification" class="txtField" value="<?php echo $row['qualification']; ?>">
    <br>
    Experience:<br>
    <input type="number" name="Experience" class="txtField" value="<?php echo $row['Experience']; ?>">
    <br><br>
    <input type="submit" name="update" value="Update" class="button"><br><br>
    <p><font size=5 color="red">Click Update to Set the Changed Details</font></p>

    </form>
    <br>
    <p><a href="update&deleteteach.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='<<--Back'></input></a></p>
    </body>
</div>
</html>
