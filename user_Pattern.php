<?php
	session_start();
?>

<!DOCTYPE html><html lang="en"><head><title>STUDYTEMPLE.com | Article</title><meta charset="utf-8"><link rel="stylesheet" href="css/reset.css" type="text/css" media="all"><link rel="stylesheet" href="css/style.css" type="text/css" media="all"><script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script><script type="text/javascript" src="js/cufon-yui.js"></script><script type="text/javascript" src="js/cufon-replace.js"></script><script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script><script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script><script type="text/javascript" src="js/script.js"></script><!--[if lt IE 7]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen"><script type="text/javascript" src="js/ie_png.js"></script><script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script><![endif]--><!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]--></head><body id="page4"><!-- START PAGE SOURCE --><div class="wrap">  <header>    <div class="container">      <h1><a href="#">STUDYTEMPLE.com</a></h1>      <nav>
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
      </nav>      <form action="#" id="search-form">        <fieldset>          <div class="rowElem">            <input type="text">            <a href="#">Search</a></div>        </fieldset>      </form>    </div>  </header>  <div class="container">    <aside>      <h3>Categories</h3>       <ul class="categories">
        <li><span><a href="programs.php">Programs</a></span></li>
        <li><span><a href="view_student_1.php">Student Info</a></span></li>
         <li><span><a href="teacher.php">Ask your Teacher</a></span></li>
	<li><span><a href="student_inbox.php">Inbox</a></span></li>
	<li><span><a href="ask_admin.php"> Outbox</a></span></li>
	<li><span><a href="view_assignments.php">Assignment</a></span></li>
        <li class="last"><span><a href="cal.html">Calendar</a></span></li>
      </ul>      <form action="#" id="newsletter-form">        <fieldset>          <div class="rowElem">          <div style='left:100px;color:white;background:#666;padding:10px;width:200px;height:400px;'>
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
</div>     </aside>    <section id="content">      <div id="banner">             </div>      <div class="inside">        <h2>Pattern Recognization </h2>        <div class="img-box"><img src="images/icon2.png" class="png"><span class="txt1">Pattern Recognization </span>, is the assignment of a label to a given input value. In statistics, discriminant analysis was introduced for this same purpose in 1936.  </div>        <p> This article focuses on machine learning approaches to pattern recognition. Pattern recognition systems are in many cases trained from labeled "training" data (supervised learning), but when no labeled data are available other algorithms can be used to discover previously unknown patterns (unsupervised learning). Machine learning is strongly related to pattern recognition and originates from artificial intelligence. KDD and data mining have a larger focus on unsupervised methods and stronger connection to business use. Pattern recognition focuses more on the signal and also takes acquisition and Signal Processing into consideration. It originated in engineering, and the term is popular in the context of computer vision: a leading computer vision conference is named Conference on Computer Vision and Pattern Recognition. In pattern recognition, there may be a higher interest to formalize, explain and visualize the pattern, while machine learning traditionally focuses on maximizing the recognition rates. Yet, all of these domains have evolved substantially from their roots in artificial intelligence, engineering and statistics, and they've become increasingly similar by integrating developments and ideas from each other.</p>		<p>Pattern recognition algorithms generally aim to provide a reasonable answer for all possible inputs and to perform "most likely" matching of the inputs, taking into account their statistical variation. This is opposed to pattern matching algorithms, which look for exact matches in the input with pre-existing patterns. A common example of a pattern-matching algorithm is regular expression matching, which looks for patterns of a given sort in textual data and is included in the search capabilities of many text editors and word processors. In contrast to pattern recognition, pattern matching is not generally a type of machine learning, although pattern-matching algorithms (especially with fairly general, carefully tailored patterns) can sometimes succeed in providing similar-quality output of the sort provided by pattern-recognition algorithms.</p>	   <p class="p0"><a href="blogs/Pattern.pdf"><button class="button"><span>Read More</span></button></a>  <a href="user_articles.php"><button class="button2"><span>Back</span></button></p>      </div>    </section>  </div></div><footer> <div class="footerlink">                    <p class="lf">Copyright &copy; 2020 <a href="#">StudyTemple.com</a> - All Rights Reserved</p>        <div style="clear:both;"></div>  </div></footer><script type="text/javascript"> Cufon.now(); </script><!-- END PAGE SOURCE --></body></html>
