"use strict";

// Class definition
var KTWizard4 = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_wizard_v4', {
			startStep: 1, // initial active step number
			clickableSteps: true  // allow step clicking
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		});

		wizard.on('beforePrev', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		});

		// Change event
		wizard.on('change', function(wizard) {
			KTUtil.scrollTop();
		});
	}

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			// ignore: ":hidden",

			// Validation rules
			rules: {
				//= Step 1
				name: {
					required: true
				},
				phone: {
					required: true
				},
				category_id: {
					required: true
				},
				address: {
					required: true
				},
				address_details: {
					required: true
				},
				// postcode: {
				// 	required: true
				// },
				// city: {
				// 	required: true
				// },
				// state: {
				// 	required: true
				// },
				// country: {
				// 	required: true
				// },
			},

			// Display error
			invalidHandler: function(event, validator) {
				KTUtil.scrollTop();

				swal.fire({
					"title": "",
					"text": "There are some errors in your submission. Please correct them.",
					"type": "error",
					"confirmButtonClass": "btn btn-secondary"
				});
			},

			// Submit valid form
			submitHandler: function (form) {

			}
		});
	}

	var initSubmit = function() {
		var btn = formEl.find('[data-ktwizard-type="action-submit"]');

		btn.on('click', function(e) {
			e.preventDefault();

			if (validator.form()) {
				// See: src\js\framework\base\app.js
				KTApp.progress(btn);
				//KTApp.block(formEl);

				// See: http://malsup.com/jquery/form/#ajaxSubmit
				formEl.ajaxSubmit({
					success: function(data) {
						KTApp.unprogress(btn);
						//KTApp.unblock(formEl);
						var type = '';
						if(data.status.status == 0){
							type = 'error';
						}else if (data.status.status == 1) {
							type = 'success'
						}
						swal.fire({
							"title": "",
							"text": data.status.message,
							"type": type,
							"confirmButtonClass": "btn btn-secondary"
						});
						if (data.status.status == 1) {
							window.location.href = '/shops';
						}
					}
				});
			}
		});
	}

	return {
		// public functions
		init: function() {
			wizardEl = KTUtil.get('kt_wizard_v4');
			formEl = $('#kt_form');

			initWizard();
			initValidation();
			initSubmit();
		}
	};
}();

jQuery(document).ready(function() {
	KTWizard4.init();
});
