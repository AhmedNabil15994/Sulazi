"use strict";

// Class definition
var KTContactsAdd = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	var avatar;

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_contacts_add', {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

		// wizard.on('beforePrev', function(wizardObj) {
		// 	if (validator.form() !== true) {
		// 		wizardObj.stop();  // don't go to the next step
		// 	}
		// });

		// Change event
		wizard.on('change', function(wizard) {
			KTUtil.scrollTop();
		});
	}

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {
				// Step 1
				customer_type:{
					required: true,
				},

				// Step 2
				govern_name: {
					required: true
				},
				govern_phone: {
					required: true
				},
				govern_fax: {
					required: true
				},
				govern_email: {
					required: true,
					email: true
				},
				govern_site: {
					required: true
				},
				govern_address: {
					required: true
				},
				govern_city: {
					required: true
				},
				govern_region: {
					required: true
				},
				govern_district: {
					required: true
				},

				// Step 3
				comp_first_name: {
					required: true
				},
				comp_last_name: {
					required: true
				},
				comp_phone: {
					required: true
				},
				comp_email: {
					required: true,
					email: true
				},
				comp_site: {
					required: true
				},
				comp_address: {
					required: true
				},
				comp_city: {
					required: true
				},
				comp_region: {
					required: true
				},
				comp_district: {
					required: true
				},

				// Step 4
				owner_first_name: {
					required: true
				},
				owner_last_name: {
					required: true
				},
				owner_phone: {
					required: true
				},
				owner_email: {
					required: true,
					email: true
				},
				owner_site: {
					required: true
				},
				owner_address: {
					required: true
				},
				owner_city: {
					required: true
				},
				owner_region: {
					required: true
				},
				owner_district: {
					required: true
				},

				// Step 5
				dele_first_name: {
					required: true
				},
				dele_last_name: {
					required: true
				},
				dele_phone: {
					required: true
				},
				dele_email: {
					required: true,
					email: true
				},
				dele_site: {
					required: true
				},
				dele_address: {
					required: true
				},
				dele_city: {
					required: true
				},
				dele_region: {
					required: true
				},
				dele_district: {
					required: true
				},
			},

			// Display error
			invalidHandler: function(event, validator) {
				KTUtil.scrollTop();

				swal.fire({
					"title": "",
					"text": "There are some errors in your submission. Please correct them.",
					"type": "error",
					"buttonStyling": false,
					"confirmButtonClass": "btn btn-brand btn-sm btn-bold"
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
							window.location.href = '/customers';
						}
					}
				});
			}
		});
	}

	var initAvatar = function() {
		avatar = new KTAvatar('kt_contacts_add_avatar');
	}

	return {
		// public functions
		init: function() {
			formEl = $('#kt_contacts_add_form');

			initWizard();
			initValidation();
			initSubmit();
			initAvatar();
		}
	};
}();

jQuery(document).ready(function() {
	KTContactsAdd.init();
});
