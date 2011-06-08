<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2010
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "CDT Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<ul>
<li>
	<a href="releases">Eclipse Release Documentation</a><br>
	Formal Eclipse release review documentation and IP Logs for the latest CDT releases.
</li>
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
	<a href="http://www.codeproject.com/KB/tips/CPP_Dev_eclipse_CDT.aspx">
	C++ Development using eclipse IDE
	</a><br>
	Starters guide.
</li>
<li>
	<a href="http://live.eclipse.org/node/723">
	Webinar on Reverse Debugging with DSF-GDB</a><br>
	This webinar introduces the new DSF-GDB debugger integration that is part of CDT 6.0.  It illustrates the recent GDB additions such as Reverse debugging, Multi-Process and Non-stop multi-thread debugging.
</li>
<li>
	<a href="http://live.eclipse.org/node/293">
	CDT 4.0 Webinar</a><br>
	This webinar will walk through all of CDT's features from new project creation, code editing, and source navigation, to build and debug with a special focus on what's new in CDT 4.0.
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
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
