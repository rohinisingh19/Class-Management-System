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
  <h3><p><font size=10 color="red">Filter Teacher According to Standard</font></p></h3><br><br><br>
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
    	if (isset($_POST['subname'])){
    		if (isset($_POST['submit'])){
		    	$subname=$_POST['subname'];

				$query = "select name from teachsubstd where subname='$subname'";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Name of Teachers Teaching $subname</font><br>";
			        	echo "<br><br>";
			            echo "<table>";

			                echo "<tr>";
			                    
			                    echo "<th>Name_of_Teachers</th>";
			                   
			                echo "</tr>";
			            while($row = mysqli_fetch_array($result)){
			                echo "<tr>";
			                    
			                    echo "<td>" . $row['name'] . "</td>";
			                    
			                echo "</tr>";
			            }
			            echo "</table>";
			            
			        } else{
			        	echo "<font size=5 color=purple>Subject: $subname</font><br>";
			        	echo "<br><br>";
			        	echo "<font size=8 color=purple>$subname Subject is not Allotted to any Teacher</font>";
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