<body style="height: 100%; margin: 0; background-image: url(images/admin-background.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
<link rel="stylesheet" type="text/css" href="quiz/css/style.css">
<?php
	session_start();
	include "db.php";

	$nid = $_GET['nid'];
	
	$rs = pg_query($db, "select * from notice where notice_id=$nid");
	$row = pg_fetch_row($rs);
?>
<form method='post' action='update_notice1.php'>
<table align='center' class='noticepanel'>
<tr>
	<td align='center' colspan=2><a href='notice.php'><img src='images/home1.png' width=60 height=60></a></td>
</tr>
<tr>
	<td><b>Notice ID:</b></td><td><input type='text' name='nid' value='<?php echo $row[0]?>' readOnly></td>
</tr>
<tr>
	<td><b>Notice Date:</b></td><td><input type='text' name='ndate' value='<?php echo $row[2]?>' readOnly></td>
</tr>
<tr>
	<td><b>Title:</b></td><td><input type='text' name='title' value='<?php echo $row[1]?>' required></td>
</tr>
<tr>
	<td><b>Notice:</b></td>
	<td><textarea name='msg' rows=5 cols=40 required><?php echo $row[3]?></textarea></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='UPDATE' class='btn'></td>
	<td align='center'><input type='reset' value='CLEAR' class='btn'></td>
</tr>
</table>
</form>
</body>
