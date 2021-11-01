<?php
	include "db.php";

	$nid = $_POST['nid'];
	$ndate = $_POST['ndate'];
	$title = $_POST['title'];
	$msg = $_POST['msg'];

	pg_query($db, "update notice set notice_title='$title', notice_desc='$msg' where notice_id=$nid");

	header("Location: notice.php");
?>

