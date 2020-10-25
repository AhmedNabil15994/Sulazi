"use strict";

// Class definition
var KTProjectsAdd = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	var avatar;

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_projects_add', {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

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
				customer_type: {
					required: true
				},
				delegate_id: {
					required: true
				},

				// Step 2
				name: {
					required: true
				},
				date: {
					required: true
				},
				number_of: {
					required: true
				},
				qutation_no: {
					required: true
				},
				project_subject: {
					required: true
				},
				offer_validity: {
					required: true
				},
				main_category: {
					required: true
				},
				sub_category: {
					required: true
				},
				region_id: {
					required: true
				},
				city_id: {
					required: true
				},
				town_id: {
					required: true
				},
				district_id: {
					required: true
				},
				piece_number: {
					required: true
				},
				chart_number: {
					required: true
				},
				land_area: {
					required: true
				},
				'components[]': {
					required: true
				},
				unit: {
					required: true
				},
				company_account: {
					required: true
				},

				// Step 3
				'required_works[]': {
					required: true
				},

				// Step 4
				project_price: {
					required: true
				},
				number_of_type: {
					required: true
				},
				payment1: {
					required: true
				},
				payment_batch1: {
					required: true
				},
				supervision: {
					required: true
				},
				supervision_price: {
					required: true
				},

				// Step 5
				"document_id[]":{
					required: true
				},
				document1:{
					required: true
				},

				// Step 6
				office_obligation:{
					required: true
				}

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
							window.location.href = '/qutations';
						}
					}
				});
			}
		});
	}

	var initAvatar = function() {
		avatar = new KTAvatar('kt_projects_add_avatar');
	}

	return {
		// public functions
		init: function() {
			formEl = $('#kt_projects_add_form');

			initWizard();
			initValidation();
			initSubmit();
			initAvatar();
		}
	};
}();

jQuery(document).ready(function() {
	KTProjectsAdd.init();
});
