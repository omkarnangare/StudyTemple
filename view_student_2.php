<?php
	session_start();
?>
	

	<!DOCTYPE html>
<html lang="en">
<head>
<title>STUDYTEMPLE.com</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
		
		<meta name="author" content="Codrops" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
		
		
<style>
table
{
	border-collapse:collapse;
	width:100%;	
}
tr:nth-child(even){
background-color:#f2f2f2}
th,td
{
	
	text-align:left;
	
}
th{background-color:#008cc4;
	color:white;
	background-size:auto;

}

</style>		
		

</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="index_2.php">STUDYTEMPLE.com</a></h1>
       <nav>
         <ul>
          <li ><a href="index_2.php" class="m1">Home</a></li>
         
          <li class="current"><a href="teacher_contact-us.php" class="m4">Contact Us</a></li>
          <li class="dropdown" ><a href="" class="m5"><?php echo $_SESSION["uname"]?></a>
<br>
<br>
<br>
  <div class="dropdown-content">
    <a href="teacher_info.php">Profile</a>
    <a href="Q&A.php">Q & A</a>
    <a href="logout.php">Logout</a>
 
</div></li>

        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
 <br><br><br><br>
  
	
<table border=1>

<tr>	
	<th><h7 style="font-size:20px;">Id</h7></th><th>&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;">First Name</h7></th><th>&nbsp&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;">Last Name</h7></th><th>&nbsp&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;">Birth Date</b></h7></th><th>&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;">Gender</b></h7></th><th>&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;"><b>Email</b></h7></th><th>&nbsp&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;"><b>Phone</b></h7></th><th>&nbsp&nbsp&nbsp</th>
	<th><h7 style="font-size:20px;"><b>COURSE</h7></b></th>
</tr>
<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
</tr>
<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
</tr>
<?php
	session_start();
	
	include "db.php";
	$q = "select * from student;";
	$rs = pg_query($db,$q);
	
	while($info = pg_fetch_row($rs))
	{
	$id=$info[0];
	$c = "select student.*,c_name from course,student where course.c_id=student.c_id and s_id='$id';";
	$course = pg_query($c);
	$row=pg_fetch_row($course);
	
?>
<tr>
	<td><h4 style="font-size:18px;"><?php echo $row[0]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px;"><?php echo $row[1]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px;"><?php echo $row[2]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px; text-transform:uppercase;"><?php echo $row[4]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px;"><?php echo $row[5]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px;"><?php echo $row[6]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px;"><?php echo $row[7]?></h4></td><td>&nbsp&nbsp</td>
	<td><h4 style="font-size:18px;"><?php echo $row[12]?></h4></td><td>&nbsp&nbsp</td>	
	</tr>
<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
</tr>
<?php
	
}
?></table>




</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <div class="footerlink">
                    <p class="lf">Copyright &copy; 2020 <a href="#">StudyTemple.com</a> - All Rights Reserved</p>
    
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>

<!-- END PAGE SOURCE -->
</body>
</html>
