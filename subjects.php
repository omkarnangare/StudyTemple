<body style="height: 100%; margin: 0; background-image: url(images/admin-background.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
	session_start();
	include "db.php";

	$sname = $_POST['sname'];
	$class = $_POST['class'];

	if($sname!=null && $class!=null)
	{
		$target_dir = "syllabus/";

		$target_file = $target_dir . $_FILES['fname']['name'];;

		move_uploaded_file($_FILES["fname"]["tmp_name"], $target_file);

		pg_query($con, "insert into subject(sub_name, sub_class, sub_syllabus_file) values('$sname', '$class', '$target_file')");
	}
?>
<form method='post' action='subjects.php' enctype="multipart/form-data">
<table align='center' class='noticepanel'>
<tr>
	<td align='center' colspan=2><a href='admin_home.php'><img src='images/home1.png' width=60 height=60></a></td>
</tr>
<tr>
	<td><b>Subject Name:</b></td><td><input type='text' name='sname' required></td>
</tr>
<tr>
	<td><b>Class:</b></td>
	<td>
	<select name='class' required>
	<option value=''>Select Class</option>
	<option value='I'>I</option>
	<option value='II'>II</option>
	<option value='III'>III</option>
	<option value='IV'>IV</option>
	<option value='V'>V</option>
	</select>
	</td>
</tr>
<tr>
	<td><b>Syllabus File:</b></td>
	<td><input type="file" name="fname" id="fileToUpload"></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='ADD' class='btn'></td>
	<td align='center'><input type='reset' value='CLEAR' class='btn'></td>
</tr>
</table>
</form>
<?php
	$rs = pg_query($con, "select * from subject");
	if($row = pg_fetch_row($rs))
	{
?>
<table align='center' border=1 width='50%' style='background:white;'>
<tr>
	<td><b>Subject ID</b></td>
	<td><b>Name</b></td>
	<td><b>Class</b></td>
	<td><b>Syllabus</b></td>
	<td></td>
</tr>
<?php
		do
		{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><a href='<?php echo $row[3]?>' class='link'>View Syllabus</a></td>
	<td align='center' style='padding:10px;'><a href='delete_subject.php?sid=<?php echo $row[0]?>' class='link'>Delete</a></td>
</tr>
<?php
		}while($row = pg_fetch_row($rs));
?>
</table>
<?php
	}
?>
</body>
