<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-weight: 900px;
}


li {
  float: left;
  min-width: 300px;
  font-size: 20px;

}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
  min-width: 150px;
  border: 5px solid black;


}

li.dropdown {
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F0FFFF;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  min-width: 150px;
}
p{
    text-shadow: 0 0 3px red;
}
p:hover{
    background-color: lightgray;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {
  display: block;
}
body{
    background-size: cover;
}
</style>
</head>

<body background="bg1.jpg">
    <div class="rs" align="center">
    <p><b><font color=black size=60>   Class Management   </font></b></p>
</div><br>

<ul>
  <li><a href="index1.php">Home</a></li>
  <li><a href="index1.php" >About</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Student</a>
    <div class="dropdown-content">
      <a href="add_student.php">Add</a>
      <a href="update&deletestud.php">Update</a>
      <a href="update&deletestud.php">Delete</a>
      <a href="view_student.php">View</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Teacher</a>
    <div class="dropdown-content">
      <a href="add_teach.php">Add</a>
      <a href="update&deleteteach.php">Update</a>
      <a href="update&deleteteach.php">Delete</a>
     <a href="view_teach.php">View</a>
    </div>
  </li>
  
</ul>

<br><br><br><br><br><br>
<br><br><br><br><br><br>

<ul>
<li><a href="allocation.php">Subject & Class Allocation</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Manage Teachers</a>
    <div class="dropdown-content">
      <a href="filterteacher.php">Filter_Std_Sub</a>
      <a href="filterteachstandardwise.php">Filter_Standardwise</a>
      <a href="filterteachsubjectwise.php">Filter_Subjectwise</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Manage Students</a>
    <div class="dropdown-content">
      <a href="sortstudent.php">Sort_name</a>
      <a href="filterstudent.php">Filter-Standard</a>
      <a href="studteachsub.php">Filter-Teacher</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Manage Class</a>
    <div class="dropdown-content">
      <a href="noofstudentinclass.php">Count_Student</a>    
  </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Manage Department</a>
    <div class="dropdown-content">
      <a href="noofteachforsub.php">Count of Teacher</a>
    </div>
  </li>
</ul>
</body>
</html>
