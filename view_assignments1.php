<body style="height: 100%; margin: 0; background-image: url(images/admin-background.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
<link rel="stylesheet" type="text/css" href="css/style.css">
<table align='center' class='noticepanel'>
<tr>
	<td align='center' colspan=3><a href='student_home.php'><img src='images/home1.png' width=60 height=60></a></td>
</tr>

<?php
	session_start();

	include "db.php";
	$semail = $_SESSION['uname'];
	$rs1 = pg_query($db, "select c_id from student where user_name='$semail';");
	$row1 = pg_fetch_row($rs1);

	
	$sclass = $row1[0];
	echo $class;

	$rs = pg_query($db, "select * from worksheets where worksheet_class=$sclass");
	if($row = pg_fetch_row($rs))
	{
?>
<table align='center' border=1 width='50%' style='background:white;'>
<tr>
	<td><b>Worksheet ID</b></td>
	<td><b>Date</b></td>
	<td><b>Title</b></td>
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
	<td style='padding:10px;'><a href='<?php echo $row[4]?>'>View Worksheet</a></td>
</tr>
<?php
		}while($row = pg_fetch_row($rs));
?>
</table>
<?php
	}
?>
</body>
