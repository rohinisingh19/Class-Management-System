<!DOCTYPE html>
<html>
<div align="center">
<body bgcolor="peachpuff"><br><br><br>

<?php
    require 'connection1.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
    	
    	$name=$_POST['name'];
    	$email=$_POST['mailid'];
    	$phonenumber=$_POST['phonenum'];
    	$gender=$_POST['gender'];
    	$rollno=$_POST['rollno'];
        $standard=$_POST['stdid'];

        $necc=mysqli_query($conn, "SELECT rollno FROM student WHERE rollno = ( SELECT rollno FROM student WHERE  rollno ='$rollno' AND stdid =$standard LIMIT 1 ) ;");
    	
        if(mysqli_num_rows($necc)==0){
            mysqli_query($conn,"insert into student (name,mailid,phonenum,gender,rollno,stdid) values('$name','$email',$phonenumber,'$gender','$rollno',$standard)");

             echo "<font size=5>Done! Student Added Successfully</font>";

        }
        else{
            echo "<font size=5>Student in Same Standard can't assign same Rollno!</font>";
        }
       
        
        echo mysqli_error($conn);
}
?>
<br><br>
<p><a href="view_student.php"><input type="submit" name="submit" style="font-size:16pt; color: blue;"  value='Check'></input></a></p>
</body>
</div>
</html>