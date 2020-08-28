<!DOCTYPE html>
<html>
<div align="center">
<body bgcolor="lightblue"><br><br><br>
<?php
    require 'connection1.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
       
        $name=$_POST['name'];
        $email=$_POST['mailid'];
        $phonenumber=$_POST['phonenum'];
        $gender=$_POST['gender'];
        $quali=$_POST['qualification'];
        $experi=$_POST['Experience'];
        
        $query="insert into teacher (name,mailid,phonenum,gender,qualification,Experience) values('$name','$email',$phonenumber,'$gender','$quali',$experi)";


        $r=mysqli_query($conn,$query);
        echo mysqli_error($conn);

        echo "<center>";
        if($r){
            echo "<font size=5>Done! Teacher Added Successfully";

        }else{
            echo "<font size=5>Some error occured";
        }
        echo "</center>";


        }
?>
<br><br>
<p><a href="view_teach.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Check'></input></a></p>
</body>
</div>
</html>