(function ($) {

	"use strict";

	/*

	Declarations
	============

	Putting all variable and function declarations first.
	
	*/


	/*

	Variables
	---------
	
	*/

		// Tabbed Widget
	var tabbedWidget	=	$("[data-reveal-group='tabbed-widget']"),

		// Validating Form
		validatingForms	=	$("[data-validation='true']"),

		// Off-Canvas Layouts
		canvasTrigger	=	$(".canvas-trigger"),

		// Mobile Nav
		revealMainNav	=	$("#reveal-main-nav"),

		// Icon Fonts
		ie8				=	$("html.lte8"),
		dataIcon		=	$("[data-icon]"),

		// Wireframing ***Remove Before Final Launch!***
		wireframe		=	$(".wireframe"),
		wfBlock			=	wireframe.find(".block"),
		wfBaseHeight	=	20;


	/*

	Functions
	---------

	*/


	/*
	### AJAX Form Response ###
	*/

	function formResponse(o) {

		// Variables
		var	options					=	$.extend({
				"form"				:	false,
				"error"				:	false,
				"fieldSuccessClass"	:	"success",
				"successText"		:	"Great! Your form has been submitted.",
				"errorText"			:	"There was an error submitting your form. Please contact the site's administrator.",
				"alertSuccessClass"	:	"success",
				"alertErrorClass"	:	"error",
				"messageLocation"	:	"prepend",
				"callback"			:	null
			}, o),
			responseMsg				=	$('<div class="form-response"></div>');

		// Scroll to the top of the form
		$("html, body").animate({
			scrollTop	:	options.form.offset().top - 100
	    }, 500);

		// If there was an error submitting the form...
		if (options.error) {

			// Place error message
			responseMsg.addClass(options.alertErrorClass).html(options.errorText);

		// If form submission was successful...
		} else {

			// Reset the form
			options.form[0].reset();

			// Remove "success" classes from form fields
			options.form
				.find('label')
				.removeClass(options.fieldSuccessClass);

			// Place success message
			responseMsg.addClass(options.alertSuccessClass).html(options.successText);
		}

		// Prepend response message to form
		if (options.messageLocation === "prepend") {
			responseMsg.prependTo(options.form);

		// Append response message to form
		} else if (options.messageLocation === "append") {
			responseMsg.appendTo(options.form);
		}

		// After a few seconds, remove message
		setTimeout(function () {
			responseMsg.slideUp(150);
		}, 8000, function () {
			responseMsg.remove();
		});
	}


	/*

	Binding Event Functions
	-----------------------

	Slightly different than raw, modular functions, these are functions that execute binding events. `.on()` events, plugin initializations, etc.

	*/


	/*
	### Initialize Forms ###
	*/

	function formsInit() {

		// Form placeholder text (if applicable)
		if (!Modernizr.placeholder) {
			$.getScript('/resources/c/js/jquery.placeholder.min.js', function () {
				$("input, textarea").placeholder();
			});
		}

		// Validating forms
		if (validatingForms.length) {
			$.getScript('/resources/c/js/jquery.lb-validation.min.js', function () {

				// Call LB Validation plugin
				validatingForms.lb_validation({
					ajaxSubmit	:	function () {

						// Variables
						var $this				=	$(this),
							dataString			=	decodeURIComponent($this.serialize()),
							successResponseOpts	=	{
								"form"				:	$this,
								"error"				:	false,
								"fieldSuccessClass"	:	"success",
								"successText"		:	"Great! Your form has been submitted.",
								"alertSuccessClass"	:	"success"
							},
							errorResponseOpts	=	{
								"form"				:	$this,
								"error"				:	true,
								"errorText"			:	"There was an error submitting your form. Please contact the site's administrator.",
								"alertErrorClass"	:	"error"
							};

						// Make AJAX call
						$.ajax({
							type		:	"POST",
							url			:	$this.attr("action"),
							data		:	dataString,
							cache		:	false,
							success		:	function () {

								// Call form response function
								formResponse(successResponseOpts);
							},
							error		:	function () {

								// Call form response function
								formResponse(errorResponseOpts);
							}
						});
					}
				});
			});
		}
	}


	/*
	### Initialize Tabbed Widgets ###
	*/

	function tabsInit() {

		// Tabbed widget
		if (tabbedWidget.length) {
			$.getScript('/resources/c/js/jquery.lb-reveal.min.js', function () {
				tabbedWidget.lb_reveal({
					"trigger"	:	"click",
					"exclusive"	:	"radio"
				});
			});
		}
	}


	/*
	### Initialize Off-Canvas Layout Triggers ###
	*/

	function offCanvasInit() {
		if (canvasTrigger.length) {
			$.getScript('/resources/c/js/jquery.lb-reveal.min.js', function () {
				canvasTrigger.lb_reveal({
					"exclusive"		:	"yes",
					"activeClass"	:	"is-active",
					"visitedClass"	:	"was-active"
				});
			});
		}
	}


	/*
	### Initialize Mobile Menu Dropdown ###
	*/

	function mobileMenuDropdownInit() {
		if (revealMainNav.length) {
			$.getScript('/resources/c/js/jquery.lb-reveal.min.js', function () {
				revealMainNav.lb_reveal();
			});
		}
	}


	/*
	### Initialize Icon Fonts ###
	*/

	function iconsInit() {

		// If generated content exists/it's IE8 _and_ `[data-icon]` exists on the page... 
		if ((!Modernizr.generatedcontent || ie8.length) && dataIcon.length) {

			// For each element w/ `[data-icon]`...
			dataIcon.each(function () {

				// Variables
				var	target			=	$(this),
					icon			=	$("<i></i>"),
					iconValue		=	target.attr("data-icon"),
					iconPosition	=	target.attr("data-icon-position"),
					iconFamily		=	target.attr("data-icon-family");

				// Create icon details
				icon.addClass("data-icon").addClass("data-icon-" + iconFamily).attr("aria-hidden", "true").html(iconValue);

				// Prepend or append
				if (iconPosition === "before" || iconPosition === "solo") {
					icon.prependTo(target);
				} else if (iconPosition === "after") {
					icon.appendTo(target);
				}
			});
		}
	}


	/*
	### Initialize Wireframing ###

	***Remove Before Final Lunch!***
	*/

	function wireframeInit() {
		if (wireframe.length) {
			wfBlock.each(function () {

				// Variables
				var	blockHeight		=	$(this).attr("data-height") * wfBaseHeight;

				// Generate height
				$(this).css("height", blockHeight + "px");
			});
		}
	}


	/*

	Initialization Function
	-----------------------

	This is where we bring it all together in one function so that we only end up executing a single function.

	*/

	function init() {
		formsInit();
		tabsInit();
		offCanvasInit();
		mobileMenuDropdownInit();
		iconsInit();
		wireframeInit();
	}


	/*

	Execution
	=========

	When we actually execute the functions. This will be short.

	*/

	init();

}(jQuery));
