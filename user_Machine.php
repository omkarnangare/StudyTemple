<?php
	session_start();
?>

<!DOCTYPE html>
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
      </nav>
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
        <li><span><a href="programs.php">Programs</a></span></li>
        <li><span><a href="view_student_1.php">Student Info</a></span></li>
         <li><span><a href="teacher.php">Ask your Teacher</a></span></li>
	<li><span><a href="student_inbox.php">Inbox</a></span></li>
	<li><span><a href="ask_admin.php"> Outbox</a></span></li>
	<li><span><a href="view_assignments.php">Assignment</a></span></li>
        <li class="last"><span><a href="cal.html">Calendar</a></span></li>
      </ul>