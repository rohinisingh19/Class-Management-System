<?php
	require 'connection1.php';

    if(count($_POST)>0){

    	$Standard=$_POST['stdid'];
    	$Subject=$_POST['subname'];
    	$tid=$_POST['tid'];
        $name=$_POST['name'];
        
        $res=mysqli_query($conn, "SELECT tid FROM teachsubstd WHERE tid = ( SELECT tid FROM teachsubstd WHERE stdid =$Standard AND subname = '$Subject' LIMIT 1 ) ;");
        if(mysqli_num_rows($res)==0){
            mysqli_query($conn,"insert into teachsubstd values($Standard,'$Subject',$tid,'$name')");
             $message = "Allocation Done! See Details";

        }
        else{
            $message1="Already teacher Is Allotted For this subject and standard,Choose Another";
        }
       
        
        echo mysqli_error($conn);

       
    }

    $result = mysqli_query($conn,"select * from teacher where tid='" . $_GET['tid'] . "'");
    $row= mysqli_fetch_array($result);
	echo mysqli_error($conn);
?>
<html>
<head>
<title>Update Teacher Data</title>
<style >
   table {
    font-family: arial;
    border-collapse: collapse;
    width: 50%;
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
    input{
        font-size: 15px;
        text-align: center;
    }

  </style>
</head>
<div align="center">
    <body bgcolor="#F0FFFF">
    	<div><font size=5><a href="allocationdone.php"><?php if(isset($message)) { echo $message; } ?></a></font><br>
		</div>
        <div><font size=5 color="blue"><?php if(isset($message1)) { echo $message1; } ?></font><br>
        </div>
        <br>
        <h3><p><font size=20 color="red">Allocate Standard & Subject to Teacher</font></p></h3><br><br>
    <form name="frmuser" method="post" action="">
    	<br><br>
    	<label for="stdid"><font size=5>Standard:</font></label>
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
		<label for="subname"><font size=5>Subject:</font></label>
		<select name="subname" id="subname" required>
		  <option value="English">English</option>
		  <option value="Hindi">Hindi</option>
		  <option value="Marathi">Marathi</option>
		  <option value="Math">Math</option>
		  <option value="Science">Science</option>
		  <option value="Social Studies">Social Studies</option>
		</select>
		<br><br>
    <font size=5>Teacher_ID:</font><br>
    <input type="hidden" name="tid" class="txtField" value="<?php echo $row['tid']; ?>">
    <input type="number" name="tid"  value="<?php echo $row['tid']; ?>">
    <br><br>
    <font size=5>Name: </font><br>
    <input type="text" name="name"  class="txtField" value="<?php echo $row['name']; ?>">
    
    <br><br><br>
    <input type="submit" name="Allocate" value="Allocate" class="button"><br><br>
    

    </form>
    </body>

<br><br>
<p><a href="allocation.php"><input type="submit" name="submit" style="font-size:16pt; color: red;"  value='<<--Back'></input></a></p>
</div>
</html>
