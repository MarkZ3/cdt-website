<?php

	$report = $_GET['report'];
	if ($report == "contrib") {
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
		
		$dbc = new DBConnectionBugs();
		$dbh = $dbc->connect();
		
		$sql = "select
					components.name AS componentName,
					bugs.bug_id AS bugId,
					attachments.attach_id AS attachId,
					contributor.realname AS contributorName,
					committer.realname AS committerName,
					LENGTH(attach_data.thedata) AS size
				from
					bugs,
					products,
					components,
					attachments,
					attach_data,
					profiles AS contributor,
					profiles AS committer 
				where
					bugs.product_id = products.id
					AND products.name = 'CDT'
					AND bugs.component_id = components.id
					AND bugs.keywords LIKE '%contributed%'
					AND attachments.bug_id = bugs.bug_id
					AND attachments.ispatch = 1
					AND attach_data.id = attachments.attach_id
					AND contributor.userid = attachments.submitter_id
					AND committer.userid = bugs.assigned_to
				";
		
		$rs = mysql_query($sql, $dbh);
		
		if (mysql_errno($dbh) > 0) {
			echo "There was an error processing this request ";
			echo mysql_error($dbh);
			$dbc->disconnect();
			exit;
		}
		
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>Component</th>";
		echo "<th>Bug</th>";
		echo "<th>Attachment</th>";
		echo "<th>Contributor</th>";
		echo "<th>Committer</th>";
		echo "<th>Size</th>";
		echo "</tr>";
		
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "<tr>";
			echo "<td>" . $myrow['componentName'] . "</td>";
			echo "<td><a href=\"https://bugs.eclipse.org/bugs/show_bug.cgi?id=" . $myrow['bugId'] . "\">" . $myrow['bugId'] . "</a>";
			echo "<td>" . $myrow['attachId'] . "</td>";
			echo "<td>" . $myrow['contributorName'] . "</td>";
			echo "<td>" . $myrow['committerName'] . "</td>";
			echo "<td>" . $myrow['size'] . "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		
		$dbc->disconnect();
	
		$rs 		= null;
		$dbh 		= null;
		$dbc 		= null;

	} else {
		echo "Not authorized (3)";
	}
	
?>
