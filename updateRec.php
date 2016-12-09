<?php
	
	require_once("sqlite_db_connection.php");

	$inID = $_POST['id'];
	$inUpdateName = $_POST['editName'];
	$inUpdateDetail = $_POST['editDetail'];
	$inUpdateStartDate = $_POST['editStartDate'];
	$inUpdateEndDate = $_POST['editEndDate'];
	$sql =<<<EOF
      UPDATE TASK SET NAME='$inUpdateName', DETAILS='$inUpdateDetail', START_DATE='$inUpdateStartDate', END_DATE='$inUpdateEndDate' WHERE ID='$inID';
EOF;

	$ret = $db->exec($sql);
	if($ret){
		echo "\nSuccess updaning record ID : ".$inID;
	}

	$db->close();