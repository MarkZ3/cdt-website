<?php

	$report = $_GET['report'];
	if ($report == "contrib") {
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
		
		$dbc = new DBConnectionBugs();
		$dbh = $dbc->connect();
		
		$sql = "select
					attachments.attach_id AS attachId,
					attachments.filename AS filename
				from
					bugs,
					products,
					attachments
				where
					bugs.product_id = products.id
					AND products.name = 'CDT'
					AND bugs.keywords LIKE '%contributed%'
					AND attachments.bug_id = bugs.bug_id
					AND attachments.ispatch = 1
				";
		
		$rs = mysql_query($sql, $dbh);
		
		if (mysql_errno($dbh) > 0) {
			echo "There was an error processing this request ";
			echo mysql_error($dbh);
			$dbc->disconnect();
			exit;
		}
		
		echo "<table>";
		
		echo "<tr>";
		echo "<th>Attachment Id</th>";
		echo "<th>Filename</th>";
		echo "</tr>";
		
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "<tr>";
			echo "<td>" . $myrow['attachId'] . "</td>";
			echo "<td>" . $myrow['filename'] . "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		$dbc->disconnect();
	
		$rs 		= null;
		$dbh 		= null;
		$dbc 		= null;

	} else {
		echo "Not authorized (4)";
	}
	
?>
