<?php

	$report = $_GET['report'];
	if ($report == "contrib") {
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
		
		$dbc = new DBConnectionBugs();
		$dbh = $dbc->connect();
		
		$sql = "SELECT
					components.name AS componentName,
					bugs.target_milestone AS milestone,
					bugs.bug_id AS bugId,
					attachments.attach_id AS attachId,
					contributor.realname AS contributorName,
					committer.realname AS committerName,
					LENGTH(attach_data.thedata) AS size
				FROM
					bugs,
					products,
					components,
					attachments,
					attach_data,
					profiles AS contributor,
					profiles AS committer 
				WHERE
					bugs.product_id = products.id
					AND products.name = 'CDT'
					AND bugs.component_id = components.id
					AND bugs.keywords NOT LIKE '%contributed%'
					AND attachments.bug_id = bugs.bug_id
					AND attachments.ispatch = 1
					AND attach_data.id = attachments.attach_id
					AND contributor.userid = attachments.submitter_id
					AND committer.userid = bugs.assigned_to
					AND bugs.bug_status IN (
						'RESOLVED',
						'VERIFIED',
						'CLOSED'
						)
					AND contributor.realname NOT IN (
						'Anton Leherbauer',
						'Mikhail Khodjaiants',
						'Alain Magloire',
						'Andrew Niefer',
						'Chris Wiebe',
						'Leo Treggiari',
						'Markus Schorn',
						'Norbert Plött',
						'Ken Ryall',
						'Vivian Kong',
						'Chris Recoskie',
						'Andrew Ferguson',
						'Markus Schorn',
						'Mike Kucera',
						'Oleg Krasilnikov'
						)
				ORDER BY attachId
				";
		
		$rs = mysql_query($sql, $dbh);
		
		if (mysql_errno($dbh) > 0) {
			echo "There was an error processing this request ";
			echo mysql_error($dbh);
			$dbc->disconnect();
			exit;
		}
		
		echo "<H2>CDT Contribution Log</H2>\n";
		echo "<p>Number of contributions: " . mysql_num_rows($rs) . "</p>\n";
		
		echo "<table border='1'>\n";
		
		echo "<tr>\n";
		echo "<th>Component</th>\n";
		echo "<th>Milestone</th>\n";
		echo "<th>Bug</th>\n";
		echo "<th>Attachment</th>\n";
		echo "<th>Contributor</th>\n";
		echo "<th>Committer</th>\n";
		echo "<th>Size</th>\n";
		echo "</tr>\n";
		
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "<tr>\n";
			echo "<td>" . $myrow['componentName'] . "</td>\n";
			echo "<td>" . $myrow['milestone'] . "</td>\n";
			echo "<td><a href=\"https://bugs.eclipse.org/bugs/show_bug.cgi?id=" . $myrow['bugId'] . "\">" . $myrow['bugId'] . "</a>\n";
			echo "<td>" . $myrow['attachId'] . "</td>\n";
			echo "<td>" . $myrow['contributorName'] . "</td>\n";
			echo "<td>" . $myrow['committerName'] . "</td>\n";
			echo "<td>" . $myrow['size'] . "</td>\n";
			echo "</tr>\n";
		}
		
		echo "</table>\n";
		
		$dbc->disconnect();
	
		$rs 		= null;
		$dbh 		= null;
		$dbc 		= null;

	} else {
		echo "Not authorized (5)";
	}
	
?>
