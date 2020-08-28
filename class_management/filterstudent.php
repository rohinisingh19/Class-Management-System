<!DOCTYPE html>
<html>
 <head>
 <title>Student In Standard</title>
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
    select {
        width: 90px;
        margin: 20px;
        padding: 8px;
    }
  </style>
 </head>

<body bgcolor="#F0FFFF">

  <div align="center">
  <h3><p><font size=10 color="red">Filter Student According to Standard</font></p></h3><br><br>
      <form name="frmuser" method="post" action=""><br>

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
          <input type="submit" name="Filter" value="Filter" class="button" style="font-size:18pt;" ><br><br>
          </form>
    <?php
    	require "connection1.php";
    	if (isset($_POST['stdid'])){
    		if (isset($_POST['Filter'])){
		    	$stdid=$_POST['stdid'];
				$query = "select * from student where stdid=$stdid  order by rollno";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>This are the students in $stdid standard </font><br>";
			        	echo "<br><br>";
			            echo "<table>";
			                echo "<tr>";
			 					echo "<th>Roll-No</th>";
			                    echo "<th>Name</th>";
			                    echo "<th>Email</th>";
			                    echo "<th>Phone-Num</th>";
			                    echo "<th>Gender</th>";
			                    
			                    
			                echo "</tr>";
			            while($row = mysqli_fetch_array($result)){
			                echo "<tr>";
			                	echo "<td>" . $row['rollno'] . "</td>";
			                    echo "<td>" . $row['name'] . "</td>";
			                    echo "<td>" . $row['mailid'] . "</td>";
			                    echo "<td>" . $row['phonenum'] . "</td>";
			                    echo "<td>" . $row['gender'] . "</td>";
			                    
			                    
			                echo "</tr>";
			            }
			            echo "</table>";
			            
			        } else{
			        	echo "<font size=8 color=green>No Students Found in $stdid standard, Class Is Empty</font>";
			        }
			    }
			    
		    }

    	}	
?> 
<br><br><br><br><br><br><br><br><br><br><br><br>
  <p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</div>
</body>
</html>