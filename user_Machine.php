<?php
	session_start();
?>

<!DOCTYPE html><html lang="en"><head><title>STUDYTEMPLE.com | Article</title><meta charset="utf-8"><link rel="stylesheet" href="css/reset.css" type="text/css" media="all"><link rel="stylesheet" href="css/style.css" type="text/css" media="all"><script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script><script type="text/javascript" src="js/cufon-yui.js"></script><script type="text/javascript" src="js/cufon-replace.js"></script><script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script><script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script><script type="text/javascript" src="js/script.js"></script><!--[if lt IE 7]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen"><script type="text/javascript" src="js/ie_png.js"></script><script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script><![endif]--><!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]--></head><body id="page4"><!-- START PAGE SOURCE --><div class="wrap">  <header>    <div class="container">      <h1><a href="#">STUDYTEMPLE.com</a></h1>       <nav>
        <ul>
          <li><a href="index_1.php" class="m1">Home</a></li>
          <li><a href="user_Faculty.php" class="m2">Faculty</a></li>
        <!--  <li><a href="Courses.html" class="m3"> Courses</a></li>-->
		  <li class="current"> <a href="user_articles.php" class="m3">Blogs</a></li>
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
      </nav>      <form action="#" id="search-form">        <fieldset>          <div class="rowElem">            <input type="text">            <a href="#">Search</a></div>        </fieldset>      </form>
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
</div>    </div>  </header>  <div class="container">    <aside>       <ul class="categories">
        <li><span><a href="programs.php">Programs</a></span></li>
        <li><span><a href="view_student_1.php">Student Info</a></span></li>
         <li><span><a href="teacher.php">Ask your Teacher</a></span></li>
	<li><span><a href="student_inbox.php">Inbox</a></span></li>
	<li><span><a href="ask_admin.php"> Outbox</a></span></li>
	<li><span><a href="view_assignments.php">Assignment</a></span></li>
        <li class="last"><span><a href="cal.html">Calendar</a></span></li>
      </ul>      <form action="#" id="newsletter-form">        <fieldset>          <div class="rowElem">               </aside>    <section id="content">      <div id="banner">             </div>      <div class="inside">        <h2>Machine learning </h2>        <div class="img-box"><img src="images/icon2.png" class="png"><span class="txt1">Machine Learning </span>, is the scientific study of algorithms and statistical models that computer systems use to perform a specific task without using explicit instructions, relying on patterns and inference instead.  </div>        <p>Machine learning tasks are classified into several broad categories. In supervised learning, the algorithm builds a mathematical model from a set of data that contains both the inputs and the desired outputs. For example, if the task were determining whether an image contained a certain object, the training data for a supervised learning algorithm would include images with and without that object (the input), and each image would have a label (the output) designating whether it contained the object. In special cases, the input may be only partially available, or restricted to special feedback.[clarification needed] Semi-supervised learning algorithms develop mathematical models from incomplete training data, where a portion of the sample input doesn't have labels. </p>		<p>Machine learning and data mining often employ the same methods and overlap significantly, but while machine learning focuses on prediction, based on known properties learned from the training data, data mining focuses on the discovery of (previously) unknown properties in the data (this is the analysis step of knowledge discovery in databases). Data mining uses many machine learning methods, but with different goals; on the other hand, machine learning also employs data mining methods as "unsupervised learning" or as a preprocessing step to improve learner accuracy. Much of the confusion between these two research communities (which do often have separate conferences and separate journals, ECML PKDD being a major exception) comes from the basic assumptions they work with: in machine learning, performance is usually evaluated with respect to the ability to reproduce known knowledge, while in knowledge discovery and data mining (KDD) the key task is the discovery of previously unknown knowledge. Evaluated with respect to known knowledge, an uninformed (unsupervised) method will easily be outperformed by other supervised methods, while in a typical KDD task, supervised methods cannot be used due to the unavailability of training data.</p>		<p class="p0"><a href="blogs/Machine.pdf"><button class="button"><span>Read More</span></button></a>  <a href="user_articles.php"><button class="button2"><span>Back</span></button></p>      </div>    </section>  </div></div><footer> <div class="footerlink">                    <p class="lf">Copyright &copy; 2020 <a href="#">StudyTemple.com</a> - All Rights Reserved</p>        <div style="clear:both;"></div>  </div></footer><script type="text/javascript"> Cufon.now(); </script><!-- END PAGE SOURCE --></body></html>
