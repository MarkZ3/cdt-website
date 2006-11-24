<?php

	echo date(DATE_RFC822, filemtime("downloads.php"));
	
/*	
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
	
	function printHeader() {
		echo "<table>";
		echo "<th>";
		echo "<td>Month</td>";
		echo "<td>Release</td>";
		echo "<td>Platform</td>";
		echo "<td>Type</td>";
		echo "<td>Count</td>";
		echo "</th>";
	}
	
	function printRow($month, $release, $platform, $type, $count) {
		echo "<tr>";
		echo "<td>$month</td>";
		echo "<td>$release</td>";
		echo "<td>$platform</td>";
		echo "<td>$type</td>";
		echo "<td>$count</td>";
		echo "</tr>";
	}
	
	# simplisticly silly way of preventing the page from being accessed by just anybody.
	# Linking to page.php?password=abc123 obviously defeats the whole purpose of this.
	$_PASSWORD = $_GET['password'];
	if ($_PASSWORD == "cdtstats") {
		# Connect to database
		$dbc 	= new DBConnectionDownloads();
		$dbh 	= $dbc->connect();

		$months = array(
#			"1/1/2006,2006-01-01,2006-01-31",
#			"2/1/2006,2006-02-01,2006-02-28",
#			"3/1/2006,2006-03-01,2006-03-31",
#			"4/1/2006,2006-04-01,2006-04-30",
#			"5/1/2006,2006-05-01,2006-05-31",
#			"6/1/2006,2006-06-01,2006-06-30",
#			"7/1/2006,2006-07-01,2006-07-31",
#			"8/1/2006,2006-08-01,2006-08-31",
#			"9/1/2006,2006-09-01,2006-09-30",
			"10/1/2006,2006-10-01,2006-10-31",
#			"11/1/2006,2006-11-01,2006-11-30",
		);

		$files = array(
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.aix_3.0.0.jar,3.0.0,aix,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.ia64_3.0.0.jar,3.0.0,linux.ia64,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.ppc_3.0.0.jar,3.0.0,linux.ppc,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.x86_3.0.0.jar,3.0.0,linux.x86,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.x86_64_3.0.0.jar,3.0.0,linux.x86_64,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.macosx_3.0.0.jar,3.0.0,macosx,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.qnx_3.0.0.jar,3.0.0,qnx,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.solaris_3.0.0.jar,3.0.0,solaris,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.win32_3.0.0.jar,3.0.0,win32,update",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-aix.ppc.tar.gz,3.0.0,aix,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-linux.ia64.tar.gz,3.0.0,linux.ia64,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-linux.ppc.tar.gz,3.0.0,linux.ppc,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-linux.x86.tar.gz,3.0.0,linux.x86,runtime"
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-linux.x86_64.tar.gz,3.0.0,linux.x86_64,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-macosx.ppc.tar.gz,3.0.0,macosx,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-qnx.x86.tar.gz,3.0.0,qnx,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-solaris.sparc.tar.gz,3.0.0,solaris,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt-3.0.0-win32.x86.zip,3.0.0,win32,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-aix.ppc.tar.gz,3.0.0,aix,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-linux.ia64.tar.gz,3.0.0,linux.ia64,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-linux.ppc.tar.gz,3.0.0,linux.ppc,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-linux.x86.tar.gz,3.0.0,linux.x86,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-linux.x86_64.tar.gz,3.0.0,linux.x86_64,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-macosx.ppc.tar.gz,3.0.0,macosx,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-qnx.x86.tar.gz,3.0.0,qnx,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-solaris.sparc.tar.gz,3.0.0,solaris,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.0/org.eclipse.cdt.sdk-3.0.0-win32.x86.zip,3.0.0,win32,sdk",
			
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.aix_3.0.1.jar,3.0.1,aix,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.ia64_3.0.1.jar,3.0.1,linux.ia64,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.ppc_3.0.1.jar,3.0.1,linux.ppc,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.x86_3.0.1.jar,3.0.1,linux.x86,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.x86_64_3.0.1.jar,3.0.1,linux.x86_64,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.macosx_3.0.1.jar,3.0.1,macosx,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.qnx_3.0.1.jar,3.0.1,qnx,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.solaris_3.0.1.jar,3.0.1,solaris,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.win32_3.0.1.jar,3.0.1,win32,update",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-aix.ppc.tar.gz,3.0.1,aix.runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-linux.ia64.tar.gz,3.0.1,linux.ia64,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-linux.ppc.tar.gz,3.0.1,linux.ppc,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-linux.x86.tar.gz,3.0.1,linux.x86,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-linux.x86_64.tar.gz,3.0.1,linux.x86_64,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-macosx.ppc.tar.gz,3.0.1,macosx,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-qnx.x86.tar.gz,3.0.1,qnx,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-solaris.sparc.tar.gz,3.0.1,solaris,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt-3.0.1-win32.x86.zip,3.0.1,win32,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-aix.ppc.tar.gz,3.0.1,aix,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-linux.ia64.tar.gz,3.0.1,linux.ia64,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-linux.ppc.tar.gz,3.0.1,linux.ppc,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-linux.x86_64.tar.gz,3.0.1,linux.x86_64,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-linux.x86.tar.gz,3.0.1,linux.x86,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-macosx.ppc.tar.gz,3.0.1,macosx,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-qnx.x86.tar.gz,3.0.1,qnx,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-solaris.sparc.tar.gz,3.0.1,solaris,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.1/org.eclipse.cdt.sdk-3.0.1-win32.x86.zip,3.0.1,win32,sdk",
			
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.aix_3.0.2.jar,3.0.2,aix,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.ia64_3.0.2.jar,3.0.2,linux.ia64,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.ppc_3.0.2.jar,3.0.2,linux.ppc,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.x86_3.0.2.jar,3.0.2,linux.x86,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.linux.x86_64_3.0.2.jar,3.0.2,linux.x86_64,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.macosx_3.0.2.jar,3.0.2,macosx,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.qnx_3.0.2.jar,3.0.2,qnx,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.solaris_3.0.2.jar,3.0.2,solaris,update",
			"/tools/cdt/releases/eclipse3.1/plugins/org.eclipse.cdt.core.win32_3.0.2.jar,3.0.2,win32,update",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-aix.ppc.tar.gz,3.0.2,aix,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-linux.ia64.tar.gz,3.0.2,linux.ia64,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-linux.ppc.tar.gz,3.0.2,linux.ppc,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-linux.x86_64.tar.gz,3.0.2,linux.x86_64,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-linux.x86.tar.gz,3.0.2,linux.x86,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-macosx.ppc.tar.gz,3.0.2,macosx,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-qnx.x86.tar.gz,3.0.2,qnx,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-solaris.sparc.tar.gz,3.0.2,solaris,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt-3.0.2-win32.x86.zip,3.0.2,win32,runtime",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-aix.ppc.tar.gz,3.0.2,aix,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-linux.ia64.tar.gz,3.0.2,linux.ia64,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-linux.ppc.tar.gz,3.0.2,linux.ppc,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-linux.x86_64.tar.gz,3.0.2,linux.x86_64,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-linux.x86.tar.gz,3.0.2,linux.x86,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-macosx.ppc.tar.gz,3.0.2,macosx,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-qnx.x86.tar.gz,3.0.2,qnx,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-solaris.sparc.tar.gz,3.0.2,solaris,sdk",
			"/tools/cdt/releases/eclipse3.1/dist/3.0.2/org.eclipse.cdt.sdk-3.0.2-win32.x86.zip,3.0.2,win32,sdk",
						
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.aix_3.1.0.200606261600.jar,3.1.0,aix,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.ia64_3.1.0.200606261600.jar,3.1.0,linux.ia64,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.ppc_3.1.0.200606261600.jar,3.1.0,linux.ppc,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.x86_3.1.0.200606261600.jar,3.1.0,linux.x86,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.x86_64_3.1.0.200606261600.jar,3.1.0,linux.x86_64,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.macosx_3.1.0.200606261600.jar,3.1.0,macosx,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.qnx_3.1.0.200606261600.jar,3.1.0,qnx,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.solaris_3.1.0.200606261600.jar,3.1.0,solaris,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.win32_3.1.0.200606261600.jar,3.1.0,win32,update",
			"/callisto/releases/plugins/org.eclipse.cdt.core.aix_3.1.0.200606261600.jar,3.1.0,aix,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.ia64_3.1.0.200606261600.jar,3.1.0,linux.ia64,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.ppc_3.1.0.200606261600.jar,3.1.0,linux.ppc,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.x86_3.1.0.200606261600.jar,3.1.0,linux.x86,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.x86_64_3.1.0.200606261600.jar,3.1.0,linux.x86_64,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.macosx_3.1.0.200606261600.jar,3.1.0,macosx,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.qnx_3.1.0.200606261600.jar,3.1.0,qnx,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.solaris_3.1.0.200606261600.jar,3.1.0,solaris,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.win32_3.1.0.200606261600.jar,3.1.0,win32,callisto",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-aix.ppc.tar.gz,3.1.0,aix,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-linux.ia64.tar.gz,3.1.0,linux.ia64,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-linux.ppc.tar.gz,3.1.0,linux.ppc,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-linux.x86_64.tar.gz,3.1.0,linux.x86_64,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-linux.x86.tar.gz,3.1.0,linux.x86,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-macosx.ppc.tar.gz,3.1.0,macosx,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-qnx.x86.tar.gz,3.1.0,qnx,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-solaris.sparc.tar.gz,3.1.0,solaris,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt-3.1.0-win32.x86.zip,3.1.0,win32,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-aix.ppc.tar.gz,3.1.0,aix,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-linux.ia64.tar.gz,3.1.0,linux.ia64,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-linux.ppc.tar.gz,3.1.0,linux.ppc,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-linux.x86_64.tar.gz,3.1.0,linux.x86_64,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-linux.x86.tar.gz,3.1.0,linux.x86,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-macosx.ppc.tar.gz,3.1.0,macosx,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-qnx.x86.tar.gz,3.1.0,qnx,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-solaris.sparc.tar.gz,3.1.0,solaris,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.0/org.eclipse.cdt.sdk-3.1.0-win32.x86.zip,3.1.0,win32,sdk",
			
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.aix_3.1.1.200609270800.jar,3.1.1,aix,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.ia64_3.1.1.200609270800.jar,3.1.1,linux.ia64,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.ppc_3.1.1.200609270800.jar,3.1.1,linux.ppc,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.x86_3.1.1.200609270800.jar,3.1.1,linux.x86,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.linux.x86_64_3.1.1.200609270800.jar,3.1.1,linux.x86_64,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.macosx_3.1.1.200609270800.jar,3.1.1,macosx,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.qnx_3.1.1.200609270800.jar,3.1.1,qnx,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.solaris_3.1.1.200609270800.jar,3.1.1,solaris,update",
			"/tools/cdt/releases/callisto/plugins/org.eclipse.cdt.core.win32_3.1.1.200609270800.jar,3.1.1,win32,update",
			"/callisto/releases/plugins/org.eclipse.cdt.core.aix_3.1.1.200609270800.jar,3.1.1,aix,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.ia64_3.1.1.200609270800.jar,3.1.1,linux.ia64,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.ppc_3.1.1.200609270800.jar,3.1.1,linux.ppc,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.x86_3.1.1.200609270800.jar,3.1.1,linux.x86,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.linux.x86_64_3.1.1.200609270800.jar,3.1.1,linux.x86_64,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.macosx_3.1.1.200609270800.jar,3.1.1,macosx,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.qnx_3.1.1.200609270800.jar,3.1.1,qnx,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.solaris_3.1.1.200609270800.jar,3.1.1,solaris,callisto",
			"/callisto/releases/plugins/org.eclipse.cdt.core.win32_3.1.1.200609270800.jar,3.1.1,win32,callisto",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-aix.ppc.tar.gz,3.1.1,aix,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-linux.ia64.tar.gz,3.1.1,linux.ia64,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-linux.ppc.tar.gz,3.1.1,linux.ppc,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-linux.x86_64.tar.gz,3.1.1,linux.x86_64,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-linux.x86.tar.gz,3.1.1,linux.x86,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-macosx.ppc.tar.gz,3.1.1,macosx,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-qnx.x86.tar.gz,3.1.1,qnx,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-solaris.sparc.tar.gz,3.1.1,solaris,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt-3.1.1-win32.x86.zip,3.1.1,win32,runtime",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-aix.ppc.tar.gz,3.1.1,aix,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-linux.ia64.tar.gz,3.1.1,linux.ia64,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-linux.ppc.tar.gz,3.1.1,linux.ppc,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-linux.x86_64.tar.gz,3.1.1,linux.x86_64,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-linux.x86.tar.gz,3.1.1,linux.x86,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-macosx.ppc.tar.gz,3.1.1,macosx,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-qnx.x86.tar.gz,3.1.1,qnx,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-solaris.sparc.tar.gz,3.1.1,solaris,sdk",
			"/tools/cdt/releases/callisto/dist/3.1.1/org.eclipse.cdt.sdk-3.1.1-win32.x86.zip,3.1.1,win32,sdk"
		);

		printHeader();

		foreach ($months as $month) {
			$monthex = explode(",", $month);
			$monthdate = $monthex[0];
			$monthfrom = $monthex[1];
			$monthto = $monthex[2];
			
			foreach ($files as $file) {
				$fileex = explode(",", $file);
				$filename = $fileex[0];
				$release = $fileex[1];
				$platform = $fileex[2];
				$type = $fileex[3];
				echo $filename . "<br>";
				$count = getCount($filename, $monthfrom, $monthto, $dbh);
				printRow($monthdate, $release, $platfrom, $type, $count);
			}
		}
		
		echo "</table>";
		
		$dbc->disconnect();
	} else {
		echo "You are not authorized to access this page.";
	}
*/		

?>
