<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/resources/c/css/global.css" />
		<script src="/resources/c/js/helpers.min.js"></script>
		<title>Form Primer</title>
	</head>
	<body>
	
		<div class="wrapper group">
			<section class="pal" role="main">
			
				<!-- Contact Form -->
				<form id="contact-form" action="#" method="POST" accept-charset="utf-8" data-validation="true">

					<!-- Contact Information -->
					<fieldset id="contact-form-contact-info">
						<legend class="paragon-text heading">Contact Information</legend>
						<label class="input-label">
							Name 
							<input id="formName" name="formName" class="input-m" type="text" minlength="2" value="" required="required" />
						</label>
						<label class="input-label">
							Address 
							<input type="text" id="formAddress1" class="input-l required" name="formAddress1" value="" required="required" />
						</label>
						<input type="text" id="formAddress2" class="input-l" name="formAddress2" value="" />
						<div class="gd-row">
							<label class="input-label gd-columns">
								City 
								<input type="text" id="formCity" class="input-s" name="formCity" value="" required="required" />
							</label>
							<label class="input-label gd-columns">
								State 
								<input maxlength="2" type="text" id="formState" class="input-xxs" name="formState" value="" required="required" />
							</label>
							<label class="input-label gd-columns">
								Zip 
								<input type="text" id="formZip" class="input-xxs" maxlength="10" name="formZip" value="" pattern="(^\d{5}$)|(^\d{5}-\d{4}$)" placeholder="XXXXX" required="required" />
							</label>
						</div>
						<label class="input-label">
							Phone <em>(Optional)</em>
							<input type="tel" id="formPhone" class="input-xs" name="formPhone" value="" placeholder="XXX-XXX-XXXX" />
						</label>
						<label class="input-label">
							Email 
							<input type="email" id="formEmail" class="input-m" name="formEmail" value="" required="required" />
							<p class="hint">Don't worry. We won't spam you.</p>
						</label>
						<fieldset>
							<legend class="input-label" data-for="info-packet">Would you like us to send an information packet to you by mail?</legend>
							<ul id="info-packet" class="unstyled checkbox-list">
								<li class="media-object">
									<input type="radio" id="formInfoPacketYes" name="formInfoPacket" class="object" value="Yes" required="required" checked="checked" /> 
									<label for="formInfoPacketYes" class="desc">Yes</label>
								</li>
								<li class="media-object">
									<input type="radio" id="formInfoPacketNo" name="formInfoPacket" class="object" value="No" required="required" /> 
									<label for="formInfoPacketNo" class="desc">No</label>
								</li>
							</ul>
						</fieldset>
					</fieldset>
					<!-- End Contact Information -->

					<!-- Project Information -->
					<fieldset id="contact-form-project-info">
						<legend class="paragon-text heading">Describe Your Project</legend>
						<label class="input-label">
							Please describe your project, and we will be in touch with you shortly. <em>(Optional)</em>
							<textarea name="formProjectDescription" id="formProjectDescription" class="input-half"></textarea>
						</label>
					</fieldset>
					<!-- End Project Information -->

					<input type="submit" id="contactFormSubmit" class="primary button" value="Submit" />
				</form>
				<!-- End Contact Form -->

			</section>
		</div>
	
		<!-- Additional Scripts -->
        <script>
            var plugins = "/resources/c/js/plugins.min.js",
                actions = "/resources/c/js/actions.min.js";

            // Ex: loadScript(path, callback);

            loadScript(plugins, function () {
                loadScript(actions);
            });
        </script>
        <!-- End Additional Scripts -->

	</body>
</html>
