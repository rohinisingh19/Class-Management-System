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
    select {
        width: 90px;
        margin: 10px;
    }

  </style>
 </head>

<body bgcolor="#E0FFFF">

  <div align="center">
  	<form method="post" action="">
  <h3><p><font size=10 color="red">Filter Teacher According to Standard and Subject</font></p></h3><br><br><br>
		<label for="stdid"><font size=5>Select Standard:</font></label>
		<select name="stdid" id="stdid" required>
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

		<label for="subname"><font size=5>Select Subject:</font></label>
		<select name="subname" id="subname" required>
		  <option value="English">English</option>
		  <option value="Hindi">Hindi</option>
		  <option value="Marathi">Marathi</option>
		  <option value="Math">Math</option>
		  <option value="Science">Science</option>
		  <option value="Social Studies">Social Studies</option>
		</select>
		<input type='submit' name="submit" value="Filter" style="font-size:18pt;"/>
	</form><br>
	<br><br>

    <?php
    	require "connection1.php";
    	if (isset($_POST['stdid']) and isset($_POST['subname'])){
    		if (isset($_POST['submit'])){
		    	$stdid=$_POST['stdid'];
		    	$subname=$_POST['subname'];

				$query = "select * from teacher where tid=(select tid from teachsubstd where stdid=$stdid and subname='$subname')";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Teacher Teaching $subname in $stdid standard </font><br>";
			        	echo "<br><br>";
			            echo "<table>";
			                echo "<tr>";
			                    
			                    echo "<th>Name</th>";
			                    echo "<th>Email</th>";
			                    echo "<th>Phone-Num</th>";
			                    echo "<th>Gender</th>";
			                    echo "<th>Qualification</th>";
			                    echo "<th>Experience</th>";
			                echo "</tr>";
			            while($row = mysqli_fetch_array($result)){
			                echo "<tr>";
			                    
			                    echo "<td>" . $row['name'] . "</td>";
			                    echo "<td>" . $row['mailid'] . "</td>";
			                    echo "<td>" . $row['phonenum'] . "</td>";
			                    echo "<td>" . $row['gender'] . "</td>";
			                    echo "<td>" . $row['qualification'] . "</td>";
			                    echo "<td>" . $row['Experience'] . "</td>";
			                echo "</tr>";
			            }
			            echo "</table>";
			            
			        } else{
			        	echo "<font size=8 color=purple>Teacher is not Allotted</font>";
			        }
			    }
			    
		    }

    	}   
	
?> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</div>
</body>
</html>