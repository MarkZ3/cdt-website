<?php

	$report = $_GET['report'];
	if ($report == "contrib") {
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
		
		$dbc = new DBConnectionBugs();
		$dbh = $dbc->connect();
		
	} else {
		echo "Not authorized (2)";
	}
	
?>
