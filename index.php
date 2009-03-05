<?php  																			
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());    
	# All on the same line to unclutter the user's desktop'

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

    <h1>Eclipse C/C++ Development Tooling - CDT</h1>
	<div id="LeftImage">
       <img src="images/CDT.png" height="180" width="180" border="0"/>
	   <img src="images/snapshots.gif" alt="" height="366" width="269" border="0"/>
	</div>
	<h2>Welcome to the Eclipse CDT Project</h2>
	<p>The CDT (C/C++ Development Tools) Project provides a fully functional C and C++ Integrated Development Environment (IDE) for the Eclipse platform.
	The features include: support for project creation and managed build for various toolchains, standard make build, source navigation, various source knowledge tools, such as
	type hierarchy, call graph, include browser, macro definition browser, code editor with syntax highlighting, folding and hyperlink navigation,
	source code refactoring and code generation,
	visual debugging tools, including memory, registers, and disassembly viewers.
	</p>

	<br>
	<h2>News</h2>
	<p><b>CDT 5.0.2 Now Available</b> - March 5, 2009
		- CDT 5.0.2 includes numerous fixes to CDT 5.0.1.  To download, please visit our Downloads page on the left.</p> 

	<p><b>CDT 6.0 M5 (Experimental)</b> - Feb 5, 2009. <a href="http://download.eclipse.org/tools/cdt/builds/6.0.0/I.I200902031437/index.html">Download</a>.

	<p><b>CDT 5.0.1 Now Available</b> - September 24, 2008
		- CDT 5.0.1 includes numerous fixes to CDT 5.0.  To download, please visit our Downloads page on the left.</p>
		
	<p><b>CDT 5.0 Now Available</b> - June 25, 2008<br>As part of the Ganymede Simultaneous release, CDT 5.0 includes various new features.  Check out our <a href="http://wiki.eclipse.org/CDT/User/NewIn50">New and Noteworthy</a> page in the CDT Wiki.</p>

	<hr class="clearer" />

	<div class="homeitem">
		<h3>For Users</h3>
			<ul>
			  <li>
				<a href="http://www.ibm.com/developerworks/opensource/library/os-eclipse-stlcdt/">
				Developing applications using the Eclipse C/C++ Development Toolkit </a><br>
				IBM developerWorks article.
			  </li>
			  <li>
				<a href="http://wascana.sourceforge.net/">
				Wascana Desktop Developer</a><br>
				CDT based distribution for Windows development.
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
				<a href="http://www.codeproject.com/KB/tips/CPP_Dev_eclipse_CDT.aspx">
				C++ Development using eclipse IDE
				</a><br>
				Starters guide.
			  </li>
		      <li>
				<a href="http://live.eclipse.org/node/293">
				CDT 4.0 Webinar</a><br>
				This webinar will walk through all of CDT�s features from new project creation, code editing, and source navigation, to build and debug with a special focus on what�s new in CDT 4.0.
			  </li>
			  <li>
				<a href="http://live.eclipse.org/node/197">
				Developing C/C++ Applications Webinar</a>
			  </li>
			  <li>
				<a href="http://cdtdoug.blogspot.com/index.html">
				Doug on the Eclipse CDT</a><br>
				All the latest news from the CDT world.
			  </li>
			  <li>
				<a href="http://wiki.eclipse.org/CDT/User/FAQ">
				CDT FAQ</a><br>
				All things CDT. May be slightly out of date.
			  </li>
			  <li>
				<a href="http://www.eclipse.org/cdt/index_old.html">
				Old CDT Website</a><br>
				Covers CDT 3.0 and earlier.
			  </li>
			</ul>

	</div>

	<div class="homeitem">
		<h3>For Developers</h3>
			<ul>
			  <li>
				<a href="http://www.ibm.com/developerworks/opensource/library/os-ecl-cdt1/index.html?S_TACT=105AGX44&S_CMP=EDU">
				Building a CDT-based editor
				</a><br>
				Five part article series on IBM developerWorks.
			  </li>
			  <li>
				<a href="http://wiki.eclipse.org/CDT/Developer/FAQ">
				CDT Developers FAQ</a>
			  </li>
			  <li>
			    <a href="http://wiki.eclipse.org/Getting_started_with_CDT_development">
			    Getting started with CDT Development
			    </a>
			  </li>
			  <li>
			    <a href="http://wiki.eclipse.org/CDT">
			    Wiki 
			    </a><br>
			    Source of all knowledge
			  </li>
			  <li>
			    <a href="http://download.eclipse.org/tools/cdt/builds">
			    Nightly Builds
			    </a><br>
			    Download CDT Nightly builds
			  </li>
			</ul>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
