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

<div id="image">
<img src="/cdt/images/snapshots.gif" alt="CDT Snapshots" border="0"/>
</div>

</div>

<div id="feature_1">

<h4>Some cool feature</h4>
<p>MyProject has this really cool feature that you describe here in few words, just as a teaser.</p>
</div>

<div id="feature_2">
<h4>Another Feature</h4>
<p>When working with MyProject, great things happen, and one of them is described here.</p>
</div>

<div id="feature_3">
<h4>Another Feature</h4>
<p>When working with MyProject, great things happen, and one of them is described here.</p>
</div>

<div id="feature_4">
<h4>User Experience</h4>
<p>
Experiment with style.css to create columns for text, just the way you want it. This section 
is a bit wider and can contain more words, even small logos or graphics to describe a neat feature in more detail.</p>
</div>

<div id="feature_more">
<h4>and much more...</h4>
<p>Read the MyProject <a href="/project/documentation.php">documentation</a> and join the discussion at the <a href="http://www.eclipse.org/forums/eclipse.newsgroup.name">forum</a> to understand how powerful MyProject is.</p>
<p> Want to know more? <a href="/projects/project_summary.php?projectid=my.project">About This Project</a>
</div>

</div>

<div id="rightcolumn">

<div>
<h3>Current Status</h3>
<p>Update this section occasionally to let your community know what's new and exciting with your project....</p>
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
