<!DOCTYPE html>
<html>
 <head>
 <title>Sort Student</title>
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
  </style>
 </head>

<body bgcolor="#F0FFFF">

  <div align="center">
  <h3><p><font size=10 color="red">Sorted Name of Students Alphabetically</font></p></h3><br><br>
    <?php
        require "connection1.php";


    $query = "SELECT * FROM student ORDER BY name";
    if($result = mysqli_query($conn,$query)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>Roll-No</th>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Phone-Num</th>";
                    echo "<th>Gender</th>";
                    
                    echo "<th>Standard</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['rollno'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['mailid'] . "</td>";
                    echo "<td>" . $row['phonenum'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    
                    echo "<td>" . $row['stdid'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            
        } 
    }

    ?>
 <br><br>
<p><a href="index1.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='Home'></input></a></p>
</div>
</body>
</html>
