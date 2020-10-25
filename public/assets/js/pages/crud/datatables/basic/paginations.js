"use strict";
var KTDatatablesBasicPaginations = function() {

	var initTable1 = function() {
		var table = $('#kt_table_1');

		// begin first table
		table.DataTable({
			dom: 'Bfrtip',
	        buttons: [{
		        extend: 'print',
		        exportOptions: {
		          columns: ':visible'
		        },
		        customize: function(win) {
		          $(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
		        }
		    },
		    {
		        extend: 'excel',
		        exportOptions: {
		          columns: [0,1,2,3,4,5,6,7,8]
		        },
		    },
		    {
		        extend: 'pdf',
		        exportOptions: {
		          columns: [0,1,2,3,4,5,6,7,8]
		        },
		    }
		    ],
			responsive: true,
			pagingType: 'full_numbers',
			paging:false,
			columnDefs: [
				
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesBasicPaginations.init();
});