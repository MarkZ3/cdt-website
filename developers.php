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

	$pageTitle 		= "CDT Getting Involved";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<ul>
<li>
	<a href="http://wiki.eclipse.org/Getting_started_with_CDT_development">
	Getting started with CDT Development</a>
</li>
<li>
	<a href="http://download.eclipse.org/tools/cdt/builds/7.0.0/index.html">
	Download CDT 7.0</a><br>Be a beta tester for newest CDT release
</li>
<li>
	<a href="http://wiki.eclipse.org/CDT/Developer/FAQ">CDT Developers FAQ</a>
</li>
<li>
    <a href="http://wiki.eclipse.org/CDT">Wiki</a><br>Source of all knowledge
</li>
<li>
	<a href="http://download.eclipse.org/tools/cdt/builds">
	Nightly Builds</a><br>Download CDT Nightly builds
</li>
<li>
    <a href="https://dev.eclipse.org/mailman/listinfo/cdt-dev">
    CDT Developers Mailing List</a><br>
	Mailing list for CDT Developers.
	If you are CDT user please post to
	<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.cdt">
	CDT Newsgroup</a> instead.
</li> 
<li>
    <a href="https://bugs.eclipse.org/bugs/query.cgi?product=CDT">
   	Bugzilla</a><br>Search for CDT bugs.
</li> 
<li>
	<a href="http://www.ibm.com/developerworks/opensource/library/os-ecl-cdt1/index.html?S_TACT=105AGX44&S_CMP=EDU">
	Building a CDT-based editor</a><br>Five part article series on IBM developerWorks.
</li>
<li>
	<a href="http://wiki.eclipse.org/CDT/designs/StaticAnalysis">
	Static Analysis in CDT</a><br>Proposal for CDT Static Analysis Framework
</li>
</ul>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>