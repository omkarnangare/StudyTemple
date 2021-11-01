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
            
    </aside>
    <section id="content">
      <div id="banner">
       
      </div>
      <div class="inside">
        <h2>Block Chain </h2>
        <div class="img-box"><img src="images/icon2.png" class="png"><span class="txt1">Block Chain </span>, the foundation of bitcoin,  is the buzzword of the digital world in  present days. This technology has gained its popularity in past couple of years.  </div>
        <p> Don & Alex Tapscott have defined blockchain as an incorruptible digital ledger of business transactions. It can not only keep the record of monetary transactions but anything significant or valuable can also be recorded [1]. In simple words, blockchain is combination of two words block+chain. The word Block means collection of data and chain means the connection between these data blocks in chronological order. Each data block in blockchain is encrypted using strong cryptographic algorithm in order to make it more secure. These encrypted data blocks are then connected to each other. In other words, Blockchain can be defined as a sequential arrangement of blocks, that contains all the transactions as records like a typical shared ledger [2]. A special network called  “peer-to-peer ” is used by blockchain in which workload is distributed among peers, who are all equally privileged. This blockchain network is decentralized i.e. there is no central authority to manage it. In 21st century, data has become as improtant as gold. Almot everything is going under the process of digitization  and hance more prone to threat. In successfully securing data and to protect it from further change technology named as “Block Chain” emerges in 2009. Although it was introduced in early 90’s but rarely used back then. </p>
       <p> Block Chain is a specialized series of block like structure in which every block stores some data. Every block in a block chain is linked to his previous block cryptography using hashing. Each block contains some very sensitive information which need not to be changed such as transaction data or land ownership information. The main purpose of Block Chain is to make sure that a data once stored in a block cannot be changed and if someone tries to change the data inside a block results in constraction of a new block. </p>
	   <p class="p0"><a href="blogs/Blockchain.pdf"><button class="button"><span>Read More</span></button></a>  <a href="user_articles.php"><button class="button2"><span>Back</span></button>
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
