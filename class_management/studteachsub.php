<?php
    session_start();
	require 'connection1.php';
?>

<!DOCTYPE html>
<html>
<head>
 <title>Student Teacher Subject</title>
 <style >
   table {
    font-family: arial;
    border-collapse: collapse;
    
    }

    td,th {
        
        text-align: center;
        padding: 5px;

    }
    
    input{
        text-align: center;
        border-width: 5px;
    }
    select {
        width: 100px;
        padding: 5px;
        text-align: center;
        
    }
  </style>
 </head>
<div align="center">


<body bgcolor="#F0FFFF">
    <h3><p><font size=10 color="red">Subject And Teacher Allocated to Student</font></p></h3><br><br>
      <form method="post" action="">
        <label for="studid">Student ID: </label>
            <select name="studid">
            <?php 
                $res=mysqli_query($conn, "select studid from student");
                while ($row=mysqli_fetch_array($res)) {
                        echo "<option>";
                        echo $row['studid'];
                        echo "</option>";    
                    }
            ?><br><br>
                        
            </select>
                
        <input type="submit" value="Get Details" name="submit">  <br>
<?php
    if(isset($_POST['submit'])) {
    $studid=$_POST['studid'];
    $result=mysqli_query($conn,"select * from student where studid='$studid'");
    while ($row1=mysqli_fetch_array($result)) {
        $name=$row1['name'];
        $stdid=$row1['stdid'];
    }
    $_SESSION['studid']=$studid;
    $_SESSION['name']=$name;
    $_SESSION['stdid']=$stdid;
?>
        <br><br>
            <label for="studid">Student ID: </label><br>
            <input type="number" name="studid" value="<?php echo $studid; ?>" disabled>
             <br>  <br>
            <label for="name">Student Name: </label><br>
            <input type="text" name="name" value="<?php echo $name; ?>" disabled>
             <br> <br>
            <label for="stdid">Standard: </label><br>
            <input type="number" name="stdid" value="<?php echo $stdid; ?>" disabled>
            <br>   <br>
        	<input type="submit" name="Check" value="Check">
     
   <?php

   }
?>
<br><br> 
<?php
            if (isset($_POST['Check'])){
                $standard=$_SESSION['stdid'];
                $studid=$_SESSION['studid'];
                $studname=$_SESSION['name'];

                echo "<font size=5>Student ID : $studid</font>&nbsp&nbsp&nbsp&nbsp";
                echo "<font size=5>Name : $studname</font><br><br>";

                $query = "select name,subname from teachsubstd where stdid=(select stdid from student where studid=$studid)";
                echo mysqli_error($conn);
                if($result = mysqli_query($conn,$query)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table border=1>";
                            echo "<tr>";
                                echo "<th>Teacher Name</th>";
                                echo "<th>Subject</th>";
                                
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['subname'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                    } else{
                        echo "<font size=8 color=green>This Sudent is not taught any subject by any Teacher</font>";
                    }
                }
                
            }
        
?> 
<br><br><br><br><br><br><br><br><br><br><br><br>
<p><a href="index1.php"><input type="click" name="click" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</body>
</form>
</html>