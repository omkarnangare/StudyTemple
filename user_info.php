<?php
	session_start();
	
	include "db.php";

	$un = $_SESSION['uname'];
	$rs = pg_query($db, "select * from student where user_name='$un'");
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
		
		
		
		
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
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

   <center>
   <table border= 1 >
<tr><h2 style="font-size:40px;">User Details</u></h2></tr>

<tr>
        <td><h5 style="font-size:20px;"><b>Name:</b></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><?php echo $row[1];?> &nbsp <?php echo $row[2];?></h5></td>
	
</tr>
<tr>
        <td><h5 style="font-size:20px;"><b>DOB:</b></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><?php echo $row[4];?></h5></td>
	
</tr>
<tr>
        <td><h5 style="font-size:20px;"><b>Gender:</b></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><?php if ($row[5]=='male') echo "M"; else if ($row[5]=='female') echo "F"?></h5></td>
	
</tr>
<tr>
        <td><h5 style="font-size:20px;"><b>E-mail:</b></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><?php echo $row[6];?></h5></td>
	
</tr>
<tr>
        <td><h5 style="font-size:20px;"><b> Contact: </b></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><?php echo $row[7];?></h5></td>
	
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
