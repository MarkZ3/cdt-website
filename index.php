<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse C/C++ Development Tooling - CDT";
	$pageKeywords	= "CDT, Eclipse, C++, IDE, C++ IDE";
	$pageAuthor		= "CDT Community";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	
<link href="extraStyles.css" rel="stylesheet" type="text/css" media="all" />


<div id="maincontent">

<table border="0">
<tr>
<td valign="top">
	<h1>&nbsp;&nbsp;Eclipse C/C++ Development Tooling - CDT</h1><br>
	<div id="LeftImage"><img src="images/snapshots.gif" alt="" height="366" width="269" border="0"><br>
		<!--Content regarding image-->
	</div>
	<h2>Welcome to the Eclipse CDT Project</h2>
	<p>The CDT (C/C++ Development Tools) Project provides a fully functional C and C++ Integrated Development Environment (IDE) for the Eclipse platform.</p>

	<br>
	<h2>News</h2>
	<p><b>CDT 5.0.1 Now Available</b> - September 24, 2008
		- CDT 5.0.1 includes numerous fixes to CDT 5.0.  To download, please visit our Downloads page on the left.</p>
		
	<p><b>CDT 5.0 Now Available</b> - June 25, 2008<br>As part of the Ganymede Simultaneous release, CDT 5.0 includes various new features.  Check out our <a href="http://wiki.eclipse.org/CDT/User/NewIn50">New and Noteworthy</a> page in the CDT Wiki.</p>

	<hr class="clearer" />

	<div class="homeitem">
		<h3>Articles</h3>
			<ul>


			  <li>
				<a href="http://www.ibm.com/developerworks/opensource/library/os-eclipse-stlcdt/">
				Developing applications using the Eclipse C/C++ Development Toolkit </a><br>
				IBM developerWorks article.
			  </li>
			  <li>
				<a href=" http://www.ibm.com/developerworks/opensource/library/os-ecc/?S_TACT=105AGX44&S_CMP=ART">
				C/C++ development with the Eclipse Platform</a><br>
				IBM developerWorks article.
			  </li>
			  <li>
				<a href="http://www-128.ibm.com/developerworks/library/os-ecl-vscdt/index.html?ca=dgr-eclipse-1">
				Migrate Visual Studio C and C++ projects to Eclipse CDT
				</a><br>
				A step-by-step guide to moving Microsoft VS projects to Eclipse C/C++ Development Toolkit.
			  </li>
			  <li>
				<a href="http://forge.mysql.com/wiki/Eclipse/CDT_on_Linux_and_Mac_OS_X">
				Eclipse/CDT on Linux and Mac OS X </a><br>
				Covers installation, configuration, and basic debugging of Eclipse/CDT Europa edition using MySQL as source code.
			  </li>
			  <li>
				<a href="http://www.infoq.com/articles/aspectj-with-ajdt">
				Building a CDT-based editor
				</a><br>
				Five part article series on IBM developerWorks.
			  </li>
			  <li>
				<a href="http://www.codeproject.com/KB/tips/CPP_Dev_eclipse_CDT.aspx">
				C++ Development using eclipse IDE
				</a><br>
				Starters guide.
			  </li>

			</ul>

	</div>

	<div class="homeitem">
		<h3>Resources</h3>
			<ul>
		      <li>
				<a href="http://live.eclipse.org/node/293">
				CDT 4.0 Webinar</a><br>
				This webinar will walk through all of CDT’s features from new project creation, code editing, and source navigation, to build and debug with a special focus on what’s new in CDT 4.0.
			  </li>
			  <li>
				<a href="http://live.eclipse.org/node/197">
				Developing C/C++ Applications Webinar</a>
			  </li>
			  <li>
				<a href="http://wiki.eclipse.org/CDT/User/FAQ">
				CDT FAQ</a><br>
				All things CDT. May be slightly out of date.
			  </li>

			  <li>
				<a href="http://cdt-devel-faq.wikidot.com/">
				Unofficial CDT Developers FAQ</a>
			  </li>
			  <li>
				<a href="http://www.eclipse.org/cdt/index_old.html">
				Old CDT Website</a><br>
				Covers CDT 3.0 and earlier.
			  </li>
			  <li>
				<a href="http://wascana.sourceforge.net/">
				Wascana Desktop Developer</a><br>
				CDT based distribution for Windows development.
			  </li>
			  <li>
				<a href="http://cdtdoug.blogspot.com/index.html">
				Doug on the Eclipse CDT</a><br>
				All the latest news from the CDT world.
			  </li>
			</ul>
	</div>

</td>
<td valign="top">

	<div id="DownloadR">

		<a href="http://www.eclipse.org/downloads">
			<img src="images/download.jpg" alt="" height="133" width="143" border="0">
			<br>
			Download CDT
		</a>

	</div>
	<div id="DL_leftNavR">
		<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.cdt">CDT newsgroup</a><br>
		<img src="images/RegisterArrow.gif" alt="" height="23" width="31" align="absmiddle" border="0">
		<a href="http://www.eclipse.org/newsgroups/register.php">Register</a><br>
		<img src="images/subNav_bars.gif" alt="" height="8" width="100%" border="0" vspace="5"><br>
		<a href="http://wiki.eclipse.org/index.php/CDT">Wiki </a><br>
		<img src="images/subNav_bars.gif" alt="" height="8" width="100%" border="0" vspace="5">
		<a href="https://dev.eclipse.org/mailman/listinfo/cdt-dev">Mailing list</a><br>
		<img src="images/subNav_bars.gif" alt="" height="8" width="100%" border="0" vspace="5">
		<a href="/projects/project_summary.php?projectid=tools.cdt">Project Information</a><br>
		<img src="images/subNav_bars.gif" alt="" height="8" width="100%" border="0" vspace="5">
		<a href="https://bugs.eclipse.org/bugs/">Report a bug</a>

	</div>

</td>
</tr>
</table>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
