<!DOCTYPE html>
<html>
 <head>
 <title>Teachers Count For Subject</title>
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
  <h3><p><font size=10 color="red">Count Of Teachers For Subject</font></p></h3><br><br>
      <form name="frmuser" method="post" action=""><br><br>

     <label for="subname"><font size=5>Select Subject:</font></label>
		<select name="subname" id="subname" required>
		  <option value="English">English</option>
		  <option value="Hindi">Hindi</option>
		  <option value="Marathi">Marathi</option>
		  <option value="Math">Math</option>
		  <option value="Science">Science</option>
		  <option value="Social Studies">Social Studies</option>
		</select>
          <input type="submit" name="GetCount" value="Get Count" class="button" style="font-size:15pt;" >
          <input type="submit" name="GetDetails" value="Get Deatils" class="button" style="font-size:15pt ;" ><br><br>
          </form><br><br>
    <?php
    	require "connection1.php";


    	if (isset($_POST['subname'])){
    		if (isset($_POST['GetDetails'])){
		    	$subname=$_POST['subname'];
				$query = "select tid,name from teachsubstd where subname='$subname'";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Name of Teachers Teaching $subname</font><br>";
			        	echo "<br><br>";
			        	
			            echo "<table>";
			                echo "<tr>";
			                    
			                    echo "<th>Name_Of_Teacher</th>";
			                    
			                echo "</tr>";
			            while($row = mysqli_fetch_array($result)){
			                echo "<tr>";
			                   
			                    echo "<td>" . $row['name'] . "</td>";
			                echo "</tr>";
			            }
			            echo "</table>";
			            
			        } else{
			        	echo "<font size=8 color=green>This Subject is not Allotted to any Teacher</font>";
			        }
			    }
			    
		    }
    	}

    	if (isset($_POST['subname'])){
    		if (isset($_POST['GetCount'])){
		    	$subname=$_POST['subname'];
				$query = "select count(tid) as count from teachsubstd where subname='$subname'";
				echo mysqli_error($conn);
			    if($result = mysqli_query($conn,$query)){
			        if(mysqli_num_rows($result) > 0){
			        	echo "<font size=5 color=purple>Number of Teachers Teaching $subname</font><br>";
			        	echo "<br><br>";
			            echo "<table>";
			                echo "<tr>";
			                   
			                    echo "<th>Count_Of_Teachers</th>";
			                    
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
?> 
<br><br><br><br><br><br><br><br><br>
  <p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</div>
</body>
</html>