<?php
	session_start();
	include 'db.php';

	?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>STUDYTEMPLE.com | Contact Us</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<style>
.noticepanel {
    background-color:#b9b9b9;
    padding:50px;
}

.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>		
</head>
<body id="page5">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="index_2.php">STUDYTEMPLE.com</a></h1>
       <nav>
         <ul>
          <li ><a href="index_2.php" class="m1">Home</a></li>
         
          <li class="current"><a href="teacher_contact-us.php" class="m4">Contact Us</a></li>
          <li class="dropdown" ><a href="" class="m5"><?php echo $_SESSION["tname"]?></a>
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
    <aside>
      <h3>Categories</h3>
      <ul class="categories">
       
        <li><span><a href="view_student_2.php">Student Info</a></span></li>
        <li><span><a href="teacher_Faculty.php">Teachers</a></span></li>
  
	<li><span><a href="teacher_inbox.php">Answer your student</a></span></li>
        <li class="last"><span><a href="cal.html">Calendar</a></span></li>
      </ul>
      <form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem">
            <h2>Newsletter</h2>
            <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
            <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright">Submit</a></div>
          </div>
        </fieldset>
      </form>
     
    </aside>
    <section id="content">
      <div id="banner">
        
      </div>
      <div class="inside">
        <h2>Our <span>Contacts</span></h2>
        <div class="address">
          <address>
          <strong>Zip Code:</strong>411044<br>
          <strong>Country:</strong>India<br>
          <strong>Telephone:</strong>+91 9834511152<br>
          <strong>Fax:</strong>+91 8975588260
          </address>
      
        </div>
        <h2>Contact <span>Form</span></h2>
        <center>	


<?php
	

	$mdate = $_POST['mdate'];
	$msg = $_POST['msg'];
	$semail = $_SESSION['tname'];

	if($mdate!=null && $msg!=null)
	{   
		pg_query($db, "insert into messages(msg_from, msg_to, send_date, message) values('$semail', 'admin', '$mdate', '$msg')");
	}
?>
<form method='post' action='teacher_contact-us.php'>
<table align='center' class='noticepanel'>
<tr>
	<td align='center' colspan=2><a href='index_1.php'><img src='images/home1.png' width=60 height=60></a></td>
</tr>
<tr>
	<td><b>Message Date:</b></td><td><input type='text' name='mdate' value='<?php echo date('Y-m-d')?>' readOnly></td>
</tr>
<tr>
	<td><b>Message:</b></td>
	<td><textarea name='msg' rows=5 cols=40 style = "border: 2px dashed #008cc4;" required></textarea></td>
</tr>

<tr>
	<td align='center'><input type='submit' value='SEND' class='button'></td>
	<td align='center'><input type='reset' value='CLEAR' class='button'></td>
</tr>
</table>
</form>
<br>
<br>
<br><br><br>

      </div>
    </section>
  </div>
</div>
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
