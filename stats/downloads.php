<?php

	require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_downloads_ro.class.php";

	function getCount($filename, $from, $to, $dbh) {
		#get the file id
		$sql = "SELECT file_id
				FROM download_file_index
				WHERE file_name = '$filename'";
		$rs = mysql_query($sql, $dbh);
		$myrow = mysql_fetch_assoc($rs);
		$fileid = $myrow['file_id'];
		
		$sql = "SELECT COUNT(file_id) as count
				FROM downloads
				WHERE file_id = $fileid
					AND download_date BETWEEN \"$from\" AND \"$to\"";
		$rs = mysql_query($sql, $dbh);
		$myrow = mysql_fetch_assoc($rs);
		return $myrow['count'];
	}

	# simplisticly silly way of preventing the page from being accessed by just anybody.
	# Linking to page.php?password=abc123 obviously defeats the whole purpose of this.
	$_PASSWORD = $_GET['password'];
	if($_PASSWORD == "abc123") {
	
		# Connect to database
		$dbc 	= new DBConnectionDownloads();
		$dbh 	= $dbc->connect();
	
		# look for eclipse-SDK, breakdown by file, for all dates, all countries
		$sql_info = "SELECT 
							IDX.file_name, 
							COUNT(DOW.file_id) AS RecordCount
					FROM 
							download_file_index AS IDX
							INNER JOIN downloads AS DOW ON DOW.file_id = IDX.file_id
					WHERE
							IDX.file_name LIKE \"%eclipse-SDK%\"
					GROUP 
							BY IDX.file_name
		";
		
		# We track date-based queries differently as MySQL 4.0.x doesn't support subselects
		# and in our tests, joining the index table AND using a where for the dates
		# resulted in mysql using a tablesort on the entire downloads table, which took minutes.
		# Here, for dates, we fetch the resultset in two steps: one select to get the
		# file_id's matching the file pattern (trivial), and another select where IN($ids_csv_list)

		# Fetch the ID's if it's a date-based query
		$aFileID = array();
		$file_id_csv = "";
		$sql = "SELECT 
					IDX.file_id
				FROM download_file_index AS IDX 
  				INNER JOIN downloads AS DOW ON IDX.file_id = DOW.file_id 
				WHERE IDX.file_name LIKE \"%eclipse-SDK%\"
 				GROUP BY IDX.file_id";
		$rs 	= mysql_query($sql, $dbh);
		while($myrow = mysql_fetch_assoc($rs)) {
			array_push($aFileID, $myrow['file_id']);
		}
		$file_id_csv = implode(",", $aFileID);

		
		# look for eclipse-SDK, breakdown by file for a specific date range
		$sql_info2 = "SELECT IDX.file_name, COUNT(DOW.file_id) AS RecordCount FROM download_file_index AS IDX INNER JOIN downloads AS DOW ON DOW.file_id = IDX.file_id WHERE IDX.file_id in ($file_id_csv) AND DOW.download_date BETWEEN \"2006-02-01\" AND \"2006-02-28\" GROUP BY IDX.file_id";

		# look for eclipse-SDK, breakdown by country for a specific date range
		$sql_info3 = "SELECT DOW.ccode, COUNT(DOW.ccode) AS RecordCount FROM download_file_index AS IDX INNER JOIN downloads AS DOW ON IDX.file_id = DOW.file_id WHERE IDX.file_id IN ($file_id_csv) AND DOW.download_date BETWEEN \"2006-02-01\" AND \"2006-02-28\" GROUP BY DOW.ccode";
		
		$rs 	= mysql_query($sql_info, $dbh);
		$rs2 	= mysql_query($sql_info2, $dbh);
		$rs3 	= mysql_query($sql_info3, $dbh);
		
		if(mysql_errno($dbh) > 0) {
			echo "There was an error processing this request";
			
			# For debugging purposes - don't display this stuff in a production page.
			# echo mysql_error($dbh);
			
			# Mysql disconnects automatically, but I like my disconnects to be explicit.
			$dbc->disconnect();
			exit;
		}

		echo "File count - all: <br />";			
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "File: " . $myrow['file_name'] . " Count: " . $myrow['RecordCount'] . "<br />";
		}

		echo "File count - date: <br />";			
		while($myrow = mysql_fetch_assoc($rs2)) {
			echo "File: " . $myrow['file_name'] . " Count: " . $myrow['RecordCount'] . "<br />";
		}

		echo "Results by ccode: <br />";			
		while($myrow = mysql_fetch_assoc($rs3)) {
			echo "Country: " . $myrow['ccode'] . " Count: " . $myrow['RecordCount'] . "<br />";
		}
		
		$dbc->disconnect();
	
		$rs 		= null;
		$rs2 		= null;
		$rs3 		= null;
		$dbh 		= null;
		$dbc 		= null;
	} elseif($_PASSWORD == "cdtstats") {
		# Connect to database
		$dbc 	= new DBConnectionDownloads();
		$dbh 	= $dbc->connect();

		$months = array(
			"1/1/2006,2006-01-01,2006-01-31",
			"2/1/2006,2006-02-01,2006-02-28",
			"3/1/2006,2006-03-01,2006-03-31",
			"4/1/2006,2006-04-01,2006-04-30",
			"5/1/2006,2006-05-01,2006-05-31",
			"6/1/2006,2006-06-01,2006-06-30",
			"7/1/2006,2006-07-01,2006-07-31",
			"8/1/2006,2006-08-01,2006-08-31",
			"9/1/2006,2006-09-01,2006-09-30",
			"10/1/2006,2006-10-01,2006-10-31",
			"11/1/2006,2006-11-01,2006-11-30");

		$platforms = array(
			"aix,.ppc.tar.gz",
			"linux.ia64,.tar.gz",
			"linux.ppc,.tar.gz",
			"linux.x86,.tar.gz",
			"linux.x86_64,.tar.gz",
			"macosx,.ppc.tar.gz",
			"qnx,.x86.tar.gz",
			"solaris,.sparc.tar.gz",
			"win32,.x86.zip");
			
		$releases = array(
			"3.0.0",
			"3.0.1",
			"3.0.2",
			"3.1.0",
			"3.1.1");

		echo "<table>";
		echo "<th>";
		echo "<td>Month</td>";
		echo "<td>Release</td>";
		echo "<td>Platform</td>";
		echo "<td>Type</td>";
		echo "<td>Count</td>";
		echo "</th>";

		foreach ($months as $month) {		
			foreach ($releases as $release) {
				foreach ($platforms as $platform) {
					$monthex = explode(",", $month);
					$monthdate = $monthex[0];
					$monthfrom = $monthex[1];
					$monthto = $monthex[2];
					
					$platformex = explode(",", $platform);
					$platformbase = $platformex[0];
					$platformext = $platformex[1];
					
					# tools update
				}
			}		
		}
		
		echo "</table>";
		
		$dbc->disconnect();
	} elseif ($_PASSWORD == "cdttest") {
		# Connect to database
		$dbc 	= new DBConnectionDownloads();
		$dbh 	= $dbc->connect();

		echo "File count: " . getCount("/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core_3.0.2.jar",
			"2006-04-01", "2006-04-30", $dbh);

		$dbc->disconnect();
	} else {
		echo "<b>";
		echo "You are not authorized to access this page.";
		echo "</b>";
	}

?>
