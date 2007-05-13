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
		
		<h2>CDT 3.1.x</h2>
		<p>CDT 3.1 runs with Eclipse 3.2. It can be installed from the Callisto Discovery Site or the CDT Update Site.
		The CDT Update Site is avalable by entering the following URL as the Remote Site in the Update Manager.
		The Callisto Discovery Site should already be there. Note that the CDT SDK feature which is used if you
		are building plugins that extend the CDT is only available from the CDT Update Site.</p>
		<ul>
			<li>http://download.eclipse.org/tools/cdt/releases/callisto</li>
		</ul>
		<p>The CDT can also be downloaded in a single file form the following pages</p>
		<ul>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/callisto/dist/3.1.2">
					CDT 3.1.2 (February 15, 2007)
				</a>
				-
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=3.1.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved in 3.1.2
				</a>
			</li>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/callisto/dist/3.1.1">
					CDT 3.1.1 (September 29, 2006)
				</a>
				-
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=3.1.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved in 3.1.1
				</a>
			</li>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/callisto/dist/3.1.0">
					CDT 3.1.0 (June 30, 2006)
				</a>
				-
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=3.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved in 3.1.0
				</a>
			</li>
		</ul>
		
		<h2>CDT 3.1.x Language Pack</h2>
		<p>IBM has donated translations from their products to Eclipse. The language pack groups translations for 
		several languages into a single download which are distributed as a set of features which you can install 
		by extracting over your Eclipse directory and restarting Eclipse.</p>
		<p>These translations are based on the CDT 3.1.1 build but should work with all subsequent 3.1.x maintenance 
		releases. If new strings are added to CDT after 3.1.1, they will not show up as translated in the 3.1.x stream 
		when you install this language pack.</p>
		<ul>
			<li><a href="http://www.eclipse.org/downloads/download.php?file=/tools/cdt/releases/callisto/NL_language_packs/CDT_NL_3.1.1.zip">CDT 3.1.x Language Pack</a>
			– Contains the NL fragments and the NL features that contain those fragments for: German, Spanish, French, 
			Italian, Japanese, Korean, Portuguese (Brazil), Traditional Chinese and Simplified Chinese.</li>
		</ul>
		
		<h2>CDT 4.0 Milestones</h2>
		<p>CDT 4.0 will be the biggest release of the CDT since it was first contributed to open source.
		As a result, there will be a lot of churn and to make sure we end up with a good quality release,
		we are encouraging the community to take it out for a spin. CDT 4.0 requires matching milestone
		versions of Eclipse 3.3. You can download it from CDT's Europa update site at:<p>
		<ul>
			<li>http://download.eclipse.org/tools/cdt/releases/europa</li>
		</ul>
		<p>The zip/tar distributions as well as compile logs and JUnit results are available by visiting
		the build page:<p>
		<ul>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/europa/dist/4.0.0RC0">CDT 4.0.0 M7/RC1 (May 11, 2007)</a>
				- Requires Eclipse 3.3M6+ -
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=4.0+M7&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved for M7/RC1
				</a>
			</li>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/europa/dist/4.0.0RC0">CDT 4.0.0 RC0 (May 2, 2007)</a>
				- Requires Eclipse 3.3M6+ -
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=4.0+RC0&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved for RC0
				</a>
			</li>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/europa/dist/4.0.0M6">CDT 4.0.0 M6 (April 2, 2007)</a>
				- Requires Eclipse 3.3M6 -
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=4.0+M6&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved for M6
				</a>
			</li>
			<li>
				<a href="http://download.eclipse.org/tools/cdt/releases/europa/dist/4.0.0M5">CDT 4.0.0 M5 (February 16, 2007)</a>
				- Requires Eclipse 3.3M5 -
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Tools&product=CDT&target_milestone=4.0+M4&target_milestone=4.0+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs resolved up to M5
				</a>
			</li>
		</ul>
		<br>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
