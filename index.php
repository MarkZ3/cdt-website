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
	
	$localVersion = false;
	
	$pageTitle 		= "Eclipse CDT";
	
	// 	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
<li><a id="buttonDownload" href="downloads.php" title="Download">
	Eclipse C/C++ IDE Distribution, Software Install Site</a></li>
<li><a id="buttonDocumentation" href="documentation.php" title="Documentation">
	Tutorials, Examples, Videos, Reference Documentation</a></li>
<li><a id="buttonSupport" href="support.php" title="Support">
	Bug Tracker, Newsgroup</a></li>
<li><a id="buttonInvolved" href="developers.php" title="Getting Involved">
	CVS, Workspace Setup, Wiki, Committers</a></li>
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
<p>Release review material is now available. See the
	<a href="releases/cdt7.0/CDT_Helios_Review.pdf">Review Slides</a>
	and the
	<a href="releases/cdt7.0/CDT_Helios_Approved_IP_Log.pdf">Approved IP log</a>.
</p>
</div>

<div id="headlines">
<h3>CDT 6.0.2 Now Available</h3>
<p>Check the <a href="downloads.php">Download</a> link on how to get yours.</p>
</div>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
