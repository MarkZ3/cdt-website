<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("CDT", 	"/cdt/");
	$Nav->addCustomNav("Download", "/cdt/download/", "_self", 3);
	$Nav->addCustomNav("Documentation", "/cdt/documentation/", "_self", 3);
	$Nav->addCustomNav("Support", "/cdt/support/", "_self", 3);
	$Nav->addCustomNav("Getting Involved", "/cdt/developers/", "_self", 3);
	
	$pageKeywords	= "eclipse, cdt, git, vcs";
	$pageAuthor		= "Doug Schaefer";
	$pageTitle 		= "CDT";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/cdt/", "_self");
	$Menu->addMenuItem("Download", "/cdt/download/", "_self");
	$Menu->addMenuItem("Documentation", "/cdt/documentation/", "_self");
	$Menu->addMenuItem("Support", "/cdt/support/", "_self");
	$Menu->addMenuItem("Developers", "/cdt/developers/", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style2.css"/>' . "\n\t");
	
	$App->Promotion = TRUE;
?>
