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
		<input type='submit' name="submit" value="Filter" style="font-size:18pt;"/>
	</form><br>
	<br><br>

    <?php
    	require "connection1.php";
    	if (isset($_POST['stdid'])){
    		if (isset($_POST['submit'])){
		    	$stdid=$_POST['stdid'];

				$query = "select name from teachsubstd where stdid=$stdid";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Name of Teachers Teaching in $stdid Standard</font><br>";
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
			        	
			        	echo "<font size=8 color=purple>Teacher is not Allotted in  $stdid Standard </font>";
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