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
      <h1><a href="index_1.php">STUDYTEMPLE.com</a></h1>
       <nav>
        <ul>
          <li ><a href="index_1.php" class="m1">Home</a></li>
          <li class="current"><a href="user_Faculty.php" class="m2">Faculty</a></li>
        <!--  <li><a href="Courses.html" class="m3"> Courses</a></li>-->
		  <li><a href="user_articles.php" class="m3">Blogs</a></li>
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
        <li><span><a href="#">Student Info</a></span></li>
         <li><span><a href="q&a.php">Ask your Teacher</a></span></li>

  

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
                      <h2>Ajit<span> J.More</span></h2>   
       <img src="images/Teacher1.jpg" width="150" height="150"><br><br>

	<h8 style="font-size : 16px";>Mr.Ajit J.More is a graduate in Computer Engineering. He passed his B.E(Computer Science) in 1998 with distinction in all eight semesters. Having a natural flair for teaching,he has been into guiding and mentoring IT graduates and postgraduate students for last 21 years. He enjoys an excellent reputation as a teacher and is very popular among his past and present students. Mr.Ajit J.More has been instrumental in embedding the core compentancies required by IT industry into his students very successfully for last 2 decades. His teaching methodology emphasizes on fundamental concepts gradually leading to the advanced ones<br> well complimented with examples.</h8>
         
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
