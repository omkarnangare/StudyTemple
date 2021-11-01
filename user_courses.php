<?php
	session_start();
	
	include "db.php";

	$un = $_SESSION['uname'];
	$rs = pg_query($db, "select course.* from student,course where course.c_id=student.c_id and user_name='$un';");
	$rs1 = pg_query($db, "select c_name from student,course where course.c_id=student.c_id and user_name='$un';");
	
$row1 = pg_fetch_row($rs1);
$row = pg_fetch_row($rs);
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
		
		
		
		

</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="index_1.php">STUDYTEMPLE.com</a></h1>
      <nav>
        <ul>
          <li class=><a href="index_1.php" class="m1">Home</a></li>
          <li><a href="user_Faculty.php" class="m2">Faculty</a></li>
        <!--  <li><a href="Courses.html" class="m3"> Courses</a></li>-->
		  <li><a href="user_articles.php" class="m3">Blogs</a></li>
          <li><a href="user_contact-us.php" class="m4">Contact Us</a></li>
          <li class="dropdown" ><a href="" class="m5"><?php echo $_SESSION['uname']?></a>
<br>
<br>
<br>
  <div class="dropdown-content">
    <a href="user_info.php">Profile</a>
    <a href="user_courses.php">Courses</a>
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
  
	
<h2 >You have enrolled for    "<?php echo $row1[0];?>"<b></h2>  

<center>
   <table border= 1 >
<tr><h2 style="font-size:40px;">SYLLABUS</u></h2></tr>
<tr><th><h2>Sr no.</h2></th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th><h2>Subject</h2></th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th><h2>Marks</h2></th></tr>

<tr>
        <td><h5 style="font-size:20px;">1.</h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px; color: #008cc4;"><a href='pdf/<?php $f="$row[2].pdf"; echo $f?>' style="color: #008cc4;"><?php echo $row[2];?></a
></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;">40</h5></td>
</tr>
<tr>
        <td><h5 style="font-size:20px;">2.</h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><a href='pdf/<?php $f="$row[3].pdf"; echo $f?>' style="color: #008cc4;"><?php echo $row[3];?></a></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;">40</h5></td>
</tr>
<tr>
        <td><h5 style="font-size:20px;">3.</h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><a href='pdf/<?php $f="$row[4].pdf"; echo $f?>' style="color: #008cc4;"><?php echo $row[4];?></a></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;">40</h5></td>
</tr>
<tr>
        <td><h5 style="font-size:20px;">4.</h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><a href='pdf/<?php $f="$row[5].pdf"; echo $f?>' style="color: #008cc4;"><?php echo $row[5];?></a></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;">40</h5></td>
</tr>
<tr>
        <td><h5 style="font-size:20px;">5.</h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><a href='pdf/<?php $f="$row[6].pdf"; echo $f?>' style="color: #008cc4;"><?php echo $row[6];?></a></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;">150</h5></td>
</tr>


</table>
</center>
    




</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
