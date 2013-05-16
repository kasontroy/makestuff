<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/resources/c/css/global.css" />
		<title>Pattern Primer</title>
		<script src="/resources/c/js/modernizr.min.js"></script>
		<style>
			.pattern {
				/*margin-top:				20px;*/
				padding:				10px 0 30px 0;
			}
			.main-section-heading {
				padding-top:			40px;
				/*border-bottom:			2px solid #999;*/
			}
			.sub-section-heading {
				border-bottom:			2px solid #ddd;
				margin-bottom:			20px;
			}
			.source {
				padding-top:			0px;
			}
			.block	{
				color:					#fff;
				text-align:				center;
				background:				rgb( 37, 117, 174);
				margin-top: 			20px;
				padding:				20px 0;
				-webkit-border-radius:	5px;
				-moz-border-radius:		5px;
				border-radius:			5px;
			}
			.swatch {
				width:100%;
				height:0;
				padding-top:100%;
				display:block;
				position: relative;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
				-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
			}
			.swatch-label {
				position: absolute;
				display: block;
				width: 100%;
				padding: 10px;
				left: 0;
				bottom: 0;
				background: rgba(255, 255, 255, 0.5);
				font-family: "Anonymous Pro Bold", Courier, monospace;
			}
		</style>
	</head>
	<body id="top">
	
		<div class="wrapper group">
			<section role="main" class="">
				<h1>Site Patterns</h1>
				<p>Below you'll find common patterns, elements and widgets for rapid prototyping.  The code for each example is provided in a <code>textarea</code>.</p>

				<div class="gt-row gd-row">
					<div class="gt-columns gt-third gd-columns gd-quarter">
						<nav class="thin panel">
							<h2 class="normal-text secondary-heading">Table of Contents</h2>
							<ul class="unstyled vertical-nav">
								<li>
									<a href="#text-level">Text-Level</a>
									<ul class="petite-text">
										<li><a href="#typographic-scale">Typographic Scale</a></li>
										<li><a href="#embedded-fonts">Embedded Fonts</a></li>
										<li><a href="#body-text">Body Text</a></li>
										<li><a href="#default-ordered-list">Default Ordered List</a></li>
										<li><a href="#default-unordered-list">Default Unordered List</a></li>
										<li><a href="#unstyled-list">Unstyled List</a></li>
										<li><a href="#blockquote">Blockquote</a></li>
										<li><a href="#table">Table</a></li>
									</ul>
								</li>
								<li>
									<a href="#headings">Headings</a>
									<ul class="petite-text">
										<li><a href="#headline">Headline</a></li>
										<li><a href="#heading-level-2">Heading Level 2</a></li>
										<li><a href="#heading-level-3">Heading Level 3</a></li>
										<li><a href="#heading-level-4">Heading Level 4</a></li>
										<li><a href="#heading-level-5">Heading Level 5</a></li>
										<li><a href="#heading-level-6">Heading Level 6</a></li>
										<li><a href="#heading-styles">Heading Styles</a></li>
									</ul>
								</li>
								<li>
									<a href="#layout">Layout</a>
									<ul class="petite-text">
										<li><a href="#media-object">Media Object</a></li>
										<li><a href="#media-floating-left">Media Floating Left</a></li>
										<li><a href="#media-floating-right">Media Floating Right</a></li>
										<li><a href="#desktop-grid">Desktop Grid</a></li>
										<li><a href="#tablet-grid">Tablet Grid</a></li>
										<li><a href="#mobile-grid">Mobile Grid</a></li>
										<li><a href="#media-grid">Media Grid</a></li>
									</ul>
								</li>
								<li>
									<a href="#messaging">Messaging</a>
									<ul class="petite-text">
										<li><a href="#panel">Panel</a></li>
										<li><a href="#alert-panel">Alert Panel</a></li>
										<li><a href="#error-panel">Error Panel</a></li>
										<li><a href="#success-panel">Success Panel</a></li>
									</ul>
								</li>
								<li>
									<a href="#interactive">Interactive</a>
									<ul class="petite-text">
										<li><a href="#buttons">Buttons</a></li>
										<li><a href="#tiny-buttons">Tiny Buttons</a></li>
										<li><a href="#small-buttons">Small Buttons</a></li>
										<li><a href="#large-buttons">Large Buttons</a></li>
										<li><a href="#pagination">Pagination</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<div class="gt-columns gt-two-thirds gd-columns gd-three-quarters">
		
						<?php /*
						<div class="pattern">
							<div class="display">
						<?php
						$fileContents = file_get_contents('../resources/less/_config.less');
						preg_match('/(\/\/ Color Variables).+(Color Variables)/s', $fileContents, $blockMatches);
						preg_match_all('/@([a-zA-Z0-9_.\-])+:\s*([a-zA-Z0-9\(\)\s,\#])+[;]/', $blockMatches[0], $matches);
						?>
						<ul class="unstyled gm-row gt-row gd-row">
						<?php foreach ($matches[0] as $match): ?>
							<?php preg_match('/@([a-zA-Z0-9_.\-])+/', $match, $colName); ?>
							<?php preg_match('/([a-zA-Z0-9\(\)\s,\#])+[;]/', $match, $bgCol); ?>
							<li class="gm-columns gm-half gt-columns gt-3of9 gd-columns gd-2of12">
								<figure class="swatch" style="background: <?php echo $bgCol[0]; ?>">
									
									<b class="petite-text swatch-label"><?php echo $match; ?></b>

								</figure>
							</li>
						<?php endforeach; ?>
						</ul>

							</div>
						</div>
						*/ ?>
						<h2 id="text-level" class="main-section-heading canon-text ptn mtm">Text-Level</h2>
						<?php
						$files = array();
						$handle=opendir('patterns/type/');
						while (false !== ($file = readdir($handle))):
						    if(stristr($file,'.html')):
						        $files[] = $file;
						    endif;
						endwhile;
						sort($files);
						foreach ($files as $file):
							preg_match('/(^[0-9]{2}\-)([\w-0-9]*)/', $file, $patternString);
							$patternName = implode(" ", (explode("-", $patternString[2])));
							$patternName = ucwords($patternName);
						    echo '<div id="' . $patternString[2] . '" class="pattern">';
							echo '<h3 class="sub-section-heading secondary-heading">';
							echo $patternName;
							echo '</h3>';
						    echo '<div class="display">';
						    include('patterns/type/'.$file);
						    echo '</div>';
						    echo '<div class="source"><p><strong>Code:</strong></p>';
						    echo '<pre class="clear thin panel"><code>';
						    echo htmlspecialchars(file_get_contents('patterns/type/'.$file));
						    echo '</code></pre>';
						    // echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
						    echo '<p class="minion-text"><a href="#top">Back to Top</a></p>';
						    echo '</div>';
						    echo '</div>';
						endforeach;
						?>
						<h2 id="headings" class="main-section-heading canon-text">Headings</h2>
						<?php
						$files = array();
						$handle=opendir('patterns/headings/');
						while (false !== ($file = readdir($handle))):
						    if(stristr($file,'.html')):
						        $files[] = $file;
						    endif;
						endwhile;
						sort($files);
						foreach ($files as $file):
							preg_match('/(^[0-9]{2}\-)([\w-]*)/', $file, $patternString);
							$patternName = implode(" ", (explode("-", $patternString[2])));
							$patternName = ucwords($patternName);
						    echo '<div id="' . $patternString[2] . '" class="pattern">';
							echo '<h3 class="sub-section-heading secondary-heading">';
							echo $patternName;
							echo '</h3>';
						    echo '<div class="display">';
						    include('patterns/headings/'.$file);
						    echo '</div>';
						    echo '<div class="source"><p><strong>Code:</strong></p>';
						    echo '<pre class="clear thin panel"><code>';
						    echo htmlspecialchars(file_get_contents('patterns/headings/'.$file));
						    echo '</code></pre>';
						    // echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
						    echo '<p class="minion-text"><a href="#top">Back to Top</a></p>';
						    echo '</div>';
						    echo '</div>';
						endforeach;
						?>
						<h2 id="layout" class="main-section-heading canon-text">Layout</h2>
						<?php
						$files = array();
						$handle=opendir('patterns/layout/');
						while (false !== ($file = readdir($handle))):
						    if(stristr($file,'.html')):
						        $files[] = $file;
						    endif;
						endwhile;
						sort($files);
						foreach ($files as $file):
							preg_match('/(^[0-9]{2}\-)([\w-]*)/', $file, $patternString);
							$patternName = implode(" ", (explode("-", $patternString[2])));
							$patternName = ucwords($patternName);
						    echo '<div id="' . $patternString[2] . '" class="pattern">';
							echo '<h3 class="sub-section-heading secondary-heading">';
							echo $patternName;
							echo '</h3>';
						    echo '<div class="display">';
						    include('patterns/layout/'.$file);
						    echo '</div>';
						    echo '<div class="source"><p><strong>Code:</strong></p>';
						    echo '<pre class="clear thin panel"><code>';
						    echo htmlspecialchars(file_get_contents('patterns/layout/'.$file));
						    echo '</code></pre>';
						    // echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
						    echo '<p class="minion-text"><a href="#top">Back to Top</a></p>';
						    echo '</div>';
						    echo '</div>';
						endforeach;
						?>
						<h2 id="messaging" class="main-section-heading canon-text">Messaging</h2>
						<?php
						$files = array();
						$handle=opendir('patterns/messaging/');
						while (false !== ($file = readdir($handle))):
						    if(stristr($file,'.html')):
						        $files[] = $file;
						    endif;
						endwhile;
						sort($files);
						foreach ($files as $file):
							preg_match('/(^[0-9]{2}\-)([\w-]*)/', $file, $patternString);
							$patternName = implode(" ", (explode("-", $patternString[2])));
							$patternName = ucwords($patternName);
						    echo '<div id="' . $patternString[2] . '" class="pattern">';
							echo '<h3 class="sub-section-heading secondary-heading">';
							echo $patternName;
							echo '</h3>';
						    echo '<div class="display">';
						    include('patterns/messaging/'.$file);
						    echo '</div>';
						    echo '<div class="source"><p><strong>Code:</strong></p>';
						    echo '<pre class="clear thin panel"><code>';
						    echo htmlspecialchars(file_get_contents('patterns/messaging/'.$file));
						    echo '</code></pre>';
						    // echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
						    echo '<p class="minion-text"><a href="#top">Back to Top</a></p>';
						    echo '</div>';
						    echo '</div>';
						endforeach;
						?>
						<h2 id="interactive" class="main-section-heading canon-text">Interactive Elements</h2>
						<?php
						$files = array();
						$handle=opendir('patterns/interactive/');
						while (false !== ($file = readdir($handle))):
						    if(stristr($file,'.html')):
						        $files[] = $file;
						    endif;
						endwhile;
						sort($files);
						foreach ($files as $file):
							preg_match('/(^[0-9]{2}\-)([\w-]*)/', $file, $patternString);
							$patternName = implode(" ", (explode("-", $patternString[2])));
							$patternName = ucwords($patternName);
						    echo '<div id="' . $patternString[2] . '" class="pattern">';
							echo '<h3 class="sub-section-heading secondary-heading">';
							echo $patternName;
							echo '</h3>';
						    echo '<div class="display">';
						    include('patterns/interactive/'.$file);
						    echo '</div>';
						    echo '<div class="source"><p><strong>Code:</strong></p>';
						    echo '<pre class="clear thin panel"><code>';
						    echo htmlspecialchars(file_get_contents('patterns/interactive/'.$file));
						    echo '</code></pre>';
						    // echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
						    echo '<p class="minion-text"><a href="#top">Back to Top</a></p>';
						    echo '</div>';
						    echo '</div>';
						endforeach;
						?>
					</div>
				</div>
			</section>
		</div>
	
		<script>

			// Load jQuery and vital plugins asynchronously
			var jqueryPlugins		=	document.createElement('script'),
				s					=	document.getElementsByTagName('script')[0];
			jqueryPlugins.async		=	true;
			jqueryPlugins.src		=	'/resources/c/js/plugins.min.js';

			// Append to body
			document.body.appendChild(jqueryPlugins);

			// Function for loading actions.js after page has loaded
			function downloadJSAtOnload() {
				var jqueryActions	=	document.createElement('script');
				jqueryActions.src	=	'/resources/c/js/actions.min.js';
				document.body.appendChild(jqueryActions);
			}

			// Load actions.js once window is loaded
			if (window.addEventListener) {
				window.addEventListener("load", downloadJSAtOnload, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", downloadJSAtOnload);
			} else {
				window.onload		=	downloadJSAtOnload;
			}
		</script>
	</body>
</html>
