<?php
	session_start();
	
	include "db.php";

	$un = $_SESSION['tname'];

	
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
      <h1><a href="index_2.php">STUDYTEMPLE.com</a></h1>
      <nav>
          <ul>
          <li class="current"><a href="index_2.php" class="m1">Home</a></li>
         
          <li><a href="teacher_contact-us.php" class="m4">Contact Us</a></li>
          <li class="dropdown" ><a href="" class="m5"><?php echo $_SESSION["uname"]?></a>
<br>
<br>
<br>
  <div class="dropdown-content">
    <a href="teacher_info.php">Profile</a>
    <a href="teacher_inbox.php">Q & A</a>
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
<?php
	session_start();

	include "db.php";

	//$aemail = $_SESSION['aemail'];

	$rs = pg_query($db, "select msg_id,msg_from,send_date,message from messages where msg_to='$un'");
?>

<table width='80%' style='background:powderblue;' align='center'>

<?php
	if($row=pg_fetch_row($rs))
	{
?>
<tr>
	
	<td><b>From</b></td>
	<td><b>Date</b></td>
	<td><b>Message</b></td>
	<td></td>
</tr>
<?php
	do
	{
?>
<tr>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
	<td><a href='reply_t.php?mid=<?php echo $row[0]?>' >Reply</a></td></tr>

</tr>
<?php
	}while($row=pg_fetch_row($rs));
}
?>

</table>






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
