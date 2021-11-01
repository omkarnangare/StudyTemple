<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>STUDYTEMPLE.com | Article</title>
<meta charset="utf-8">
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
<body id="page4">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">STUDYTEMPLE.com</a></h1>
       <nav>
        <ul>
          <li><a href="index_1.php" class="m1">Home</a></li>
          <li><a href="user_Faculty.php" class="m2">Faculty</a></li>
        <!--  <li><a href="Courses.html" class="m3"> Courses</a></li>-->
		  <li class="current"><a href="user_articles.php" class="m3">Blogs</a></li>
          <li><a href="user_contact-us.php" class="m4">Contact Us</a></li>
        <li class="dropdown" ><a href="" class="m5"><?php echo $_SESSION["uname"]?></a>
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
    <aside>
       <ul class="categories">
        <li><span><a href="programs.php">Programs</a></span></li>
        <li><span><a href="view_student_1.php">Student Info</a></span></li>
         <li><span><a href="teacher.php">Ask your Teacher</a></span></li>
	<li><span><a href="student_inbox.php">Inbox</a></span></li>
	<li><span><a href="ask_admin.php"> Outbox</a></span></li>
	<li><span><a href="view_assignments.php">Assignment</a></span></li>
        <li class="last"><span><a href="cal.html">Calendar</a></span></li>
      </ul>
      <form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem">
       <div style='left:100px;color:white;background:#666;padding:10px;width:200px;height:400px;'>
<marquee direction="up" scrolldelay=200 onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);">
<?php
	include 'db.php';

	$sql = "select * from notice order by notice_date desc";
	$result = pg_query($db, $sql);
	while($row = pg_fetch_row($result)){
		echo "<p style='text-align:justify;line-height:250%;'>$row[2] <b>($row[1])</b> - $row[3]</p>";
	}
?>
</marquee>
</div>    
    </aside>
    <section id="content">
      <div id="banner">
       
      </div>
      <div class="inside">
        <h2>E-commerce </h2>
        <div class="img-box"><img src="images/icon1.png" class="png"><span class="txt1">E-commerce </span>(Electronic commerce) can be defined as commercial transactions conducted electronically on the Internet or the buying and selling of goods and services, over an electronic world, primarily the internet </div>
        <p> E-commerce is a boom in the modern business. E-commerce means electronic commerce. E-commerce (Electronic commerce) involves buying and selling of goods and services, or the transmitting of funds or data, over an electronic network, predominantly the Internet. E-commerce (Electronic commerce) is a paradigm shift influencing both marketers and the customers. Rather e-commerce is more than just another way to boost the existing business practices. It is leading a complete change in traditional way of doing business. This significant change in business model is witnessing a tremendous growth around the globe and India is not an exception. A massive internet penetration has added to growth of E-commerce and more particularly start-ups have been increasingly using this option as a differentiating business model. Moreover E-Commerce has significant influences on the environment. Although the model is highly used in current business scenario but the option has not been explored at its fullest. The current research has been undertaken to describe the scenario of E-Commerce, analyze the trends of E-Commerce. The study further examines the key variables imperative for the success of E-commerce business models. Objective: The objectives of present study are: 1. To understand the present status and trends of E-Commerce; and 2. To reveal the key variables influencing the increased usage of E-Commerce. </p>
        <p class="p0"><a href="blogs/E-Commerce.pdf"><button class="button"><span>Read More</span></button></a>  <a href="user_articles.php"><button class="button2"><span>Back</span></button>
</p>
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
