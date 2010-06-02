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
	repository URLs listed below</p>

<h3>CDT 6.0.2 for Eclipse Galileo</h3>
<p><b><a href="http://www.eclipse.org/downloads/packages/eclipse-ide-cc-developers/galileosr2">
	Eclipse C/C++ IDE Galileo SR2</a></b></p>
<p><b>p2 repository:</b> http://download.eclipse.org/cdt/releases/galileo</p>

<h3>Helios - Eclipse 3.6 (unreleased)</h3>
<p><b>Update site:</b> http://download.eclipse.org/myproject/<br />
<b>ZIP file: </b><a href="/downloads/download.php?file=/myproject/file.zip">file.zip</a> (10 MiB)</p>

<h3>Additional Distributions</h3>
<p>The CDT may be installed as part of commercial products or from the following open source
	distributions.</p>
	
<h4>Linux</h4>
<p>Most major Linux distributions include packages for Eclipse and the CDT.
	Check your package manager for availability.</p>

<h4>Wascana</h4>
<p>The <a href="http://www.eclipselabs.org/p/wascana">Wascana</a> project maintains a distribution
	of the Eclipse C/C++ IDE with the MinGW GNU toolchain and libraries for building Windows
	applications. See their site for more information</p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>