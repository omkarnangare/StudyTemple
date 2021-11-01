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
     <h3>Categories</h3>
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
            <h2>Newsletter</h2>
            <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
            <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright">Submit</a></div>
          </div>
        </fieldset>
      </form>
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
        <h2>Cloud Computing </h2>
        <div class="img-box"><img src="images/icon3.png" class="png"><span class="txt1">Cloud Computing </span>provides a platform or service through internet. User needs minimum hardware and software installed. User data, applications and even infrastructure are provided via networks. Google drive, One drive, google photos are examples of some popular data storage clouds. Facebook, Gmail, creative cloud of adobe are examples of cloud applications. Using mobile phone to connect to a powerful server for processing complex data is usage of infrastructure as a service.  </div>
        <p> Cloud refers to a network may be public or private, on a LAN or WAN on which applications or infrastructure is deployed remotely and user can access it to meet their personal and business needs. User has to pay-for-per-use scheme. The infrastructure and applications are provided by separate entity and user will use these services. Cloud computing is combination of hardware and software based resources delivered as a network service. </p> 
		<p>  Cloud computing is one of the innovative computing, which deals with storing and accessing data and programs over the Internet [1]. It is the delivery of computing resources and services, such as storing of data on servers and databases, providing networking facilities and software development platforms over the Internet. It provides the flexibility of resources for everyone. These services are provided via data centers, which are located in various parts of the world [2, 3]. Cloud computing makes access to these resources to everyone on a global scale at a very minimal cost and significantly higher speed. These servers provide services to the users, which would have cost a lot of computational power to them if they had to buy them. The first mention of cloud computing was referenced in a Compaq internal document released in 1996 [4]. Cloud computing was then commercialized in 2006 when Amazon released elastic compute cloud (EC2). Furthermore, Google released Google app engine in 2008 and Microsoft Azure services were launched in October 2008, which increased the competition in the area of cloud computing. Since then these companies have done a lot of development in cloud computing</p>
		<p class="p0"><a href="blogs/Cloud Computing.pdf"><button class="button"><span>Read More</span></button></a>  <a href="user_articles.php"><button class="button2"><span>Back</span></button>
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
