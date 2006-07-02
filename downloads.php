<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "CDT Downloads Page";
	$pageKeywords	= "CDT, downloads";
	$pageAuthor		= "Doug Schaefer";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>One thing to note about the CDT is that, up to this point, we are very tied to specific versions of
		the Eclipse Platform release. So please be careful how you are matching these versions.</p>
		<p>As a minimum, you need to install the Eclipse Platform Runtime before installing the CDT</p>
		<h2>CDT 3.1</h2>
		<p>CDT 3.1 runs on Eclipse 3.2. It can be installed from the Callisto Update Site or the CDT Update Site.
		The CDT Update Site is avalable by entering the following URL as the remote site in the Update Manager.</p>
		<ul>
			<li>http://download.eclipse.org/tools/cdt/releases/callisto</li>
		</ul>
		<p>The CDT can also be downloaded in a single file form the following pages</p>
		<ul>
			<li><a href="http://download.eclipse.org/tools/cdt/releases/callisto/dist/3.1.0">CDT 3.1.0 (June 30, 2006)</a></li>
		</ul>
		<br>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
