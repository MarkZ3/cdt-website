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

	$pageTitle 		= "CDT Support";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<h3>CDT Forum</h3>
<p>As questions on the
	<a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=80">CDT Forum</a>.</p>

<h3>Bugzilla</h3>
<p>Report defects and ask for enhancements in
	<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=CDT">Bugzilla</a>.</p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>