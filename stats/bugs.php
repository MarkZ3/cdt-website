<?php

	$report = $_GET['report'];
	if ($report == "contrib") {
		echo "Hi";
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
		
		$dbc = new DBConnectionBugs();
		$dbh = $dbc->connect();
		
		$sql = "select
					bug.bug_id,
					bug.short_desc,
					usr.realname as somedude
				from
					bugs as bug
					inner join profiles as usr on usr.userid = bug.reporter
				where
					bug.bug_id = 12345";
		
		$rs = mysql_query($sql, $dbh);
		
		if (mysql_errno($dbh) > 0) {
			echo "There was an error processing this request ";
			echo mysql_error($dbh);
			$dbc->disconnect();
			exit;
		}
		
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "Bug ID: " . $myrow['bug_id'] . " Description: " . $myrow['short_desc'] . " Reporter: " . $myrow['somedude'];
		}
		
		$dbc->disconnect();
	
		$rs 		= null;
		$dbh 		= null;
		$dbc 		= null;

	} else {
		echo "Not authorized (3)";
	}
	
?>
