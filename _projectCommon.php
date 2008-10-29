<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList( array() );
    $Nav->addNavSeparator( "<em>CDT Home</em>", "/<em>cdt</em>" );
    $Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=<em>tools.cdt</em>", "_self", 2  );
	$Nav->addCustomNav("Downloads", 		"downloads.php", 	"_self", 2);
	$Nav->addCustomNav("Wiki",				"http://wiki.eclipse.org/index.php/CDT", "_self", 2);
	#$Nav->addCustomNav("Installation", 		"install.php", 		"_self", 2);
	#$Nav->addCustomNav("FAQ", 				"faq.php", 			"_self", 2);
?>
