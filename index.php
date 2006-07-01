<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Doug Schaefer
	# Date:			2006-07-01
	#
	# Description:  CDT main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse C/C++ Development Tooling - CDT";
	$pageKeywords	= "CDT";
	$pageAuthor		= "Doug Schaefer";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Welcome to the Eclipse CDT</h2>
		<p>I appreciate everyone's patience as we slowly roll out the new Eclipse CDT 3.1 which is one
		of the 10 project available in Callisto. We will shortly be making the zip/tar distributions available
		as well as pointers to the CDT update site for Callisto.</p>
		<p>In the meantime, you can install the CDT from the Callisto update site that is available when
		you install the Eclipse SDK.</p>
		<p>I am also in the middle of Phoenix'ing the CDT web site. More content will appear here over the next
		few days. In the meantime more information about the CDT project can be found on the
		<a href="http://wiki.eclipse.org/index.php/CDT">CDT Wiki</a></p>
		<p>Thanks for your patience, Doug Schaefer, CDT Project Lead</p>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
