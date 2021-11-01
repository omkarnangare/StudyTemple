<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>STUDYTEMPLE.com | Courses</title>
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
<body id="page2">
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
        <h2>About <span>team</span></h2>
        <ul class="list">
          <li><img src="images/Teacher1.jpg">
            <h4>Ajit J.More</h4>
<p>Mr.Ajit J.More is a graduate in Computer Engineering. He passed his B.E(Computer Science) in 1998 with distinction in all eight semesters.<a href="ajit.php">Read more</a></p>
          </li>
          <li><img src="images/Teacher2.jpg">
            <h4>Abhishek A.Mehta </h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li class="last"><img src="images/Teacher3.jpg">
            <h4>Sudarshan Lakhdive</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
        </ul>
		<ul class="list">
          <li><img src="images/2page-img1.jpg">
            <h4>Pratik M.Kanade</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li><img src="images/2page-img2.jpg">
            <h4>Omkar S.Nangare</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li class="last"><img src="images/2page-img3.jpg">
            <h4>Another Team Member </h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
        </ul>
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
