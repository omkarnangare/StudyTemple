<?php
	session_start();
	
	include "db.php";

	$un = $_SESSION['uname'];
	$semail = $_SESSION['uname'];
	$rs1 = pg_query($db, "select c_id from student where user_name='$semail';");
	$row1 = pg_fetch_row($rs1);

	
	$sclass = $row1[0];

	$rs = pg_query($db, "select * from worksheets where worksheet_class=$sclass");
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
 <br><br><br><br><br>
  
	
<?php if($row = pg_fetch_row($rs))
	{ ?>  

<center>
   <table width=75%>
<tr><td><h2>Sr no.</h2></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><h2>Date</h2></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><h2>Title</h2></td><td> </td></tr>
<?php
		do
		{
?>

<tr>
        <td><h5 style="font-size:20px;"><?php echo $row[0]?></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px; color: #008cc4;"><?php echo $row[1]?></h5></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	<td><h5 style="font-size:20px;"><?php echo $row[2]?></h5></td>
	<td ><h5 style="font-size:20px;"><a href='<?php echo $row[4]?>'>View Worksheet</a></h5></td>
</tr>
<?php
		}while($row = pg_fetch_row($rs));
?>
</table>
<?php
	}
?>

</center>
    




</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
