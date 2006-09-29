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
		<p><b>CDT 3.1.1 Now Available!</b> - September 29, 2006 - CDT 3.1.1 runs on Eclipse 3.2.x or Callisto.
		It can be downloaded from the Callisto Update site of by following the instructions
		on the CDT Download page by following the Downloads link on the left.</p>
		<p>I am in the middle of Phoenix'ing the CDT web site. More content will appear here over the next
		few weeks. In the meantime more information about the CDT project can be found on the
		<a href="http://wiki.eclipse.org/index.php/CDT">CDT Wiki</a> and the old page is still available
		<a href="index_old.html">here</a>.</p>
		<p>Thanks for your patience, Doug Schaefer, CDT Project Lead</p>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
