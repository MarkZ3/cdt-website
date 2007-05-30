<?php

	$report = $_GET['report'];
	if ($report == "contrib") {
		echo "Hi ";
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
		
		$dbc = new DBConnectionBugs();
		$dbh = $dbc->connect();
		
		$sql = "select
					bugs.bug_id
				from
					bugs
					products
				where
					bugs.product_id = products.id
					AND products.name = 'CDT'
					AND bugs.keywords LIKE '%contributed%'
				";
		
		$rs = mysql_query($sql, $dbh);
		
		if (mysql_errno($dbh) > 0) {
			echo "There was an error processing this request ";
			echo mysql_error($dbh);
			$dbc->disconnect();
			exit;
		}
		
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "Count: " . $myrow['count'];
		}
		
		$dbc->disconnect();
	
		$rs 		= null;
		$dbh 		= null;
		$dbc 		= null;

	} else {
		echo "Not authorized (7)";
	}
	
?>
