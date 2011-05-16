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

	$pageTitle 		= "CDT Downloads";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>
	unless otherwise specified.</p>

<p>The CDT can either be installed as part of the Eclipse C/C++ IDE packaged zip file or installed
	into an existing Eclipse using the "Install New Software..." dialog and entering the p2
	repository URLs listed below.</p>

<h3>CDT 7.0.2 for Eclipse Helios</h3>
<p>Eclipse package:
	<a href="http://www.eclipse.org/downloads/packages/eclipse-ide-cc-developers/heliossr2">
	Eclipse C/C++ IDE Helios SR2</a>.</p>
<p>p2 software repository: <a href="http://download.eclipse.org/tools/cdt/releases/helios">
	http://download.eclipse.org/tools/cdt/releases/helios</a>.</p>

<h3>CDT 7.0.1 for Eclipse Helios</h3>
<p>Eclipse package:
	<a href="http://www.eclipse.org/downloads/packages/eclipse-ide-cc-developers/heliossr1">
	Eclipse C/C++ IDE Helios SR1</a>.</p>
<p>p2 software repository: <a href="http://download.eclipse.org/tools/cdt/releases/helios">
	http://download.eclipse.org/tools/cdt/releases/helios</a>.</p>

<p>Please note that there is a known problem with installing the optional GDB Hardware Debugging feature in CDT 7.0.1 
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=326176">Bug 326176</a>).
To install the optional GDB Hardware Debugging feature, please use this build: 
<a href="http://download.eclipse.org/tools/cdt/builds/7.0.1/I.I201009241320/index.html">cdt-master-7.0.1-I201009241320</a>.</p>

<h3>CDT 7.0 for Eclipse Helios</h3>
<p>Eclipse package:
	<a href="http://www.eclipse.org/downloads/packages/eclipse-ide-cc-developers/heliosr">
	Eclipse C/C++ IDE Helios</a>.</p>
<p>p2 software repository: <a href="http://download.eclipse.org/tools/cdt/releases/helios">
	http://download.eclipse.org/tools/cdt/releases/helios</a>.</p>

<h3>CDT 6.0.2 for Eclipse Galileo</h3>
<p>Eclipse package: 
	<a href="http://www.eclipse.org/downloads/packages/eclipse-ide-cc-developers/galileosr2">
	Eclipse C/C++ IDE Galileo SR2</a>.</p>
<p>p2 software repository: <a href="http://download.eclipse.org/tools/cdt/releases/galileo">
	http://download.eclipse.org/tools/cdt/releases/galileo</a>.</p>

<h3>Development Builds</h3>
<p>Development builds of the Eclipse C/C++ IDE can be found on the
	<a href="http://www.eclipse.org/downloads">Eclipse Downloads page</a>
	by clicking on the Development Builds tab.</p>

<p>CDT nightly builds used for testing are available from the 
	<a href="http://download.eclipse.org/tools/cdt/builds">CDT Nightly Build page</a>.</p>

<p>Bleeding edge continuous builds are available from the
	<a href="https://build.eclipse.org/hudson/job/cdt-nightly">cdt-nightly Hudson build page</a>.</p>
	
<h3>Additional Distributions</h3>
<p>The CDT can be installed as part of many commercial products or from the following open source
	distributions.</p>
	
<h4>Linux</h4>
<p>Most major Linux distributions include packages for Eclipse and the CDT.
	Check your package manager for availability.</p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>