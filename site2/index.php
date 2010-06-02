<?php
/*******************************************************************************
 * Copyright (c) 2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>');
	
	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, cdt";
	$pageAuthor		= "Doug Schaefer";
	$pageTitle 		= "Eclipse CDT";
	
	// 	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
	<li><a id="buttonDownload" href="download.php" title="Download">Eclipse
	Distribution, Update Site, Dropins</a></li>
	<li><a id="buttonDocumentation" href="midcolumn_example.php"
		title="Documentation">Tutorials, Examples, Videos, Reference Documentation</a></li>
	<li><a id="buttonSupport" href="midcolumn_example.php" title="Download">Bug
	Tracker, Newsgroup, Professional Support</a></li>
	<li><a id="buttonInvolved" href="midcolumn_example.php" title="Getting Involved">CVS,
	Workspace Setup, Wiki, Committers</a></li>
</ul>
</div>

<div id="midcolumn">
<h3>Eclipse CDT (C/C++ Development Tooling)</h3>

<div id="introText">

<p>The CDT Project provides a fully functional C and C++ Integrated Development Environment
based on the Eclipse platform.
Features include: support for project creation and managed build for various toolchains,
standard make build, source navigation, various source knowledge tools, such as type hierarchy,
call graph, include browser, macro definition browser, code editor with syntax highlighting,
folding and hyperlink navigation, source code refactoring and code generation,
visual debugging tools, including memory, registers, and disassembly viewers.
</p>

<img class="displayed" src="/cdt/images/snapshots.gif" alt="CDT Snapshots" border="0"/>

</div>

</div>

<div id="rightcolumn">

<div>
<h3>Current Status</h3>
<p>We are quickly approaching the release of CDT 7.0 for Eclipse Helios.</p>
</div>

<div id="headlines">
<h3>New and Noteworthy</h3>
<p>... or a link to your new and noteworthy.</p>
</div>

<div id="headlines">
<h3>Headlines on the web</h3>
<p>Project headlines...</p>
</div>

<div id="headlines">
<h3>Another announcement</h3>
<p>MyProject is pleased to announce...</p>
</div>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
