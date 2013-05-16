<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/resources/c/css/global.css" />
		<title>Modal</title>
		<script src="/resources/c/js/modernizr.min.js"></script>
		<style>
			.modal {
				display: none;
			}
		</style>
	</head>
	<body>
	
		<div class="wrapper group">
			<section role="main">

				<a href="#sample-modal" class="button" data-modal="sample-modal">Launch Modal</a>
				<div id="sample-modal" class="panel">
					<h2>This is a Panel</h2>
					<p>This is a feedback message for the user.</p>
					<p><a href="#" class="button">Action</a></p>
				</div>
				<a href="/resources/images/close-x.png" class="button" data-modal="img">Launch Modal</a>
			</section>
		</div>
	
		<script src="/resources/c/js/plugins.min.js"></script>
		<script src="/resources/js/plugins/jquery.lb-modal-deux.js"></script>
		<!--<script src="/resources/c/js/actions.min.js"></script>-->
		<script>
			$(document).ready(function () {
				$("[data-modal]").lb_modal();
			});
		</script>
	</body>
</html>
