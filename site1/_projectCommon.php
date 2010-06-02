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
    $Nav->addNavSeparator( "CDT Home", "/cdt" );
    $Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=tools.cdt", "_self", 2  );
	$Nav->addCustomNav("Downloads", 		"downloads.php", 	"_self", 2);
	$Nav->addCustomNav("Wiki",				"http://wiki.eclipse.org/index.php/CDT", "_self", 2);
	$Nav->addCustomNav("CDT Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.cdt", "_self", 2);
	#$Nav->addNavSeparator( "Bugs", "https://bugs.eclipse.org/bugs/query.cgi?product=CDT", "_self", 2 );
	$Nav->addCustomNav("Report a Bug","https://bugs.eclipse.org/bugs/enter_bug.cgi?product=CDT", "_self", 2);
	#$Nav->addCustomNav("Installation", 		"install.php", 		"_self", 2);
	$Nav->addCustomNav("User FAQ", 				"http://wiki.eclipse.org/CDT/User/FAQ", 			"_self", 2);
?>
