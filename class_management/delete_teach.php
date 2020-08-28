<?php
	require 'connection1.php';
	
	if(count($_POST)>0){


    	$tid=$_POST['tid'];

		$query="delete from teacher where tid=$tid";
        $query1="delete from teachsubstd where tid=$tid";
	
		mysqli_query($conn,$query);
        mysqli_query($conn,$query1);
		

	    	$message = "Record Deleted Successfully, Check";
	}
	$result = mysqli_query($conn,"select * from teacher where tid='" . $_GET['tid'] . "'");
    $row= mysqli_fetch_array($result);
	echo mysqli_error($conn);
	   
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<div align="center">
<body bgcolor="lightblue"><br>
	<div><font size=5 style="color: red;"><a href="view_teach.php"><?php if(isset($message)) { echo $message; } ?></a></font><br><br>
		</div>
	
 <h3><p><font size=20>Delete Teacher Details</font></p></h3><br><br>
    <form name="frmuser" method="post" action=""><br>

Teacher_ID:<br>
    <input type="hidden" name="tid" class="txtField" value="<?php echo $row['tid']; ?>">
    <input type="number" name="tid"  value="<?php echo $row['tid']; ?>" disabled> <br>
Name:<br>
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
    Qualification:<br>
    <input type="text" name="qualification" class="txtField" value="<?php echo $row['qualification']; ?>" disabled>
    <br>
    Experience:<br>
    <input type="number" name="Experience" class="txtField" value="<?php echo $row['Experience']; ?>" disabled>
    <br><br>
    <br><br>
    <input type="submit" name="delete" value="Delete" class="button"><br><br>
  

    </form>


<p><a href="update&deleteteach.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='<<-- Back'></input></a></p>
</body>
</div>
</html>

