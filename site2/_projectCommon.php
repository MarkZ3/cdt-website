<?php

/*******************************************************************************
 * Copyright (c) 2009-2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("CDT", 	"/cdt/site2");
   	$Nav->addCustomNav("Download", "/cdt/site2/downloads.php", "_self", 3);
	$Nav->addCustomNav("Documentation", "/cdt/site2/documentation.php", "_self", 3);
	$Nav->addCustomNav("Support", "/cdt/site2/support.php", "_self", 3);
	$Nav->addCustomNav("Getting Involved", "/cdt/site2/developers.php", "_self", 3);
    $Nav->addCustomNav("Project Stats", "/projects/project_summary.php?projectid=tools.cdt", "_self", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "eclipse, cdt, c++";
	$pageAuthor		= "Doug Schaefer";

	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/cdt/site2", "_self");
	$Menu->addMenuItem("Download", "/cdt/site2/downloads.php", "_self");
	$Menu->addMenuItem("Documentation", "/cdt/site2/documentation.php", "_self");
	$Menu->addMenuItem("Support", "/cdt/site2/support.php", "_self");
	$Menu->addMenuItem("Developers", "/cdt/site2/developers.php", "_self");
    $Menu->addMenuItem("Stats", "/projects/project_summary.php?projectid=tools.cdt", "_self");
	
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/cdt/site2/style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
?>