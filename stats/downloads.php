<?php

	function getCount($filename, $dbh) {
		#get the file id
		$sql = "SELECT file_id
				FROM download_file_index
				WHERE file_name = '$filename'";
		$rs = mysql_query($sql, $dbh);
		$myrow = mysql_fetch_assoc($rs);
		$fileid = $myrow['file_id'];
		
		$sql = "SELECT COUNT(file_id) as count
				FROM downloads
				WHERE file_id = $fileid";
		$rs = mysql_query($sql, $dbh);
		$myrow = mysql_fetch_assoc($rs);
		return $myrow['count'];
	}
	
	# simplisticly silly way of preventing the page from being accessed by just anybody.
	# Linking to page.php?password=abc123 obviously defeats the whole purpose of this.
	$_PASSWORD = $_GET['password'];
	if ($_PASSWORD == "cdtstats") {
		require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_downloads_ro.class.php";

		# Connect to database
		$dbc 	= new DBConnectionDownloads();
		$dbh 	= $dbc->connect();
		
		$files = array(
			"/technology/epp/downloads/release/galileo/SR1/eclipse-cpp-galileo-SR1-win32.tar.gz,Windows",
			"/technology/epp/downloads/release/galileo/SR1/eclipse-cpp-galileo-SR1-linux-gtk.tar.gz,Linux 32",
			"/technology/epp/downloads/release/galileo/SR1/eclipse-cpp-galileo-SR1-linux-gtk-x86_64.tar.gz,Linux 64",
			"/technology/epp/downloads/release/galileo/SR1/eclipse-cpp-galileo-SR1-macosx-carbon.tar.gz,Mac Carbon 32",
			"/technology/epp/downloads/release/galileo/SR1/eclipse-cpp-galileo-SR1-macosx-cocoa.tar.gz,Mac Cocoa 32",
			"/technology/epp/downloads/release/galileo/SR1/eclipse-cpp-galileo-SR1-macosx-cocoa-x86_64.tar.gz,Mac Cocoa 64",
		);

		echo "<h2>Galileo SR1 C/C++ IDE Downloads</h2>";
		
		echo "<table>";
		echo "<tr>";
		echo "<th>Platform</th>";
		echo "<th>Downloads</th>";
		echo "</tr>";

		foreach ($files as $file) {
			$fileex = explode(",", $file);
			$filename = $fileex[0];
			$platform = $fileex[1];
			$count = getCount($filename, $dbh);
				
			echo "<tr>";
			echo "<td>$platform</td>";
			echo "<td>$count</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		
		$dbc->disconnect();
	} else {
		echo "<p>You are not authorized to access this page. (2)</p>";
	}

?>
