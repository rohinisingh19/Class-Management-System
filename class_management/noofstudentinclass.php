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
        text-align: center;
        padding: 5px;

    }
    select {
        width: 100px;
        padding: 8px;
        
    }
  </style>
 </head>

<body bgcolor="#F0FFFF">

  <div align="center">
  <h3><p><font size=10 color="red">Count Of Students In Each Standard</font></p></h3><br><br>
      <form name="frmuser" method="post" action=""><br><br>

      <label for="stdid"><font size=5>Select Standard:</font></label>
		<select name="stdid" id="stdid"  required>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		  <option value="11">11</option>
		  <option value="12">12</option>
		</select>
          <input type="submit" name="GetCount" value="Get Count" class="button" style="font-size:15pt;" >
          <input type="submit" name="GetDetails" value="Get Deatils" class="button" style="font-size:15pt ;" ><br><br>
          </form><br><br>
    <?php
    	require "connection1.php";
    	if (isset($_POST['stdid'])){
    		if (isset($_POST['GetCount'])){
		    	$stdid=$_POST['stdid'];
				$query = "SELECT COUNT(studid ) as count FROM student WHERE stdid =$stdid";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Number of Students in $stdid standard </font><br>";
			        	echo "<br><br>";
			            echo "<table>";
			                echo "<tr>";
			                    
			                    echo "<th>Count_Of_Students</th>";
			                    
			                echo "</tr>";
			            while($row = mysqli_fetch_array($result)){
			                echo "<tr>";
			                    
			                    echo "<td>" . $row['count'] . "</td>";
			                echo "</tr>";
			            }
			            echo "</table>";
			            
			        } 
			    }
			    
		    }

    	}	

    	if (isset($_POST['stdid'])){
    		if (isset($_POST['GetDetails'])){
		    	$stdid=$_POST['stdid'];
				$query = "select studid,name,rollno from student where stdid=$stdid";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Name of Students in $stdid standard</font><br>";
			        	echo "<br><br>";
			            echo "<table>";
			                echo "<tr>";
			                    echo "<th>Roll No</th>";
			                    echo "<th>Name_of_student</th>";
			                    
			                echo "</tr>";
			            while($row = mysqli_fetch_array($result)){
			                echo "<tr>";
			                    echo "<td>" .$row['rollno']. "</td>";
			                    echo "<td>" . $row['name'] . "</td>";
			                echo "</tr>";
			            }
			            echo "</table>";
			            
			        } else{
			        	echo "<font size=8 color=green>Class is Empty, No Students Found</font>";
			        }
			    }
			    
		    }
    	}
?> 
<br><br><br><br><br><br><br><br><br>
  <p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</div>
</body>
</html>